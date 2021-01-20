<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['status' => 'failed', 'data' => 'Wrong password']);
        }

        $abilities = $user->role == 'admin' ? ['user:index', 'user:create'] : ['user:index'];
        return response()->json([
            'status' => 'User login successfully.',
            'token' => $user->createToken("Android", $abilities)->plainTextToken
        ]);
    }

    public function logout()
    {
        $user = request()->user();

        if (request()->token_id) {
            $user->tokens()->where('id', request()->token_id)->delete();
            return response()->json(['status' => 'Successfully logged out']);
        }

        $user->tokens()->delete();
        return response()->json(['status' => 'Successfully logged out']);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $new_user = new User();
        $new_user->name = $request->get('name');
        $new_user->email = $request->get('email');
        $new_user->password = Hash::make($request->get('password'));



        $new_user->save();
        return response()->json(['status' => 'success'], 200);
    }
}
