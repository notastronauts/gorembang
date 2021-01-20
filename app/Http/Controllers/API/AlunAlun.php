<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AlunAlunCollection;
use App\Http\Resources\AlunAlunResource;
use App\Models\AlunAlun as ModelsAlunAlun;
use Illuminate\Http\Request;

class AlunAlun extends Controller
{
    public function index() {
        return new AlunAlunCollection(ModelsAlunAlun::all());
    }

    public function show($id) {
        return new AlunAlunResource(ModelsAlunAlun::find($id));
    }
}
