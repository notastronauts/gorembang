<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PantaiCollection;
use App\Http\Resources\PantaiResource;
use App\Models\Pantai as ModelsPantai;
use Illuminate\Http\Request;

class Pantai extends Controller
{
    public function index() {
        return new PantaiCollection(ModelsPantai::all());
    }

    public function show($id) {
        return new PantaiResource(ModelsPantai::find($id));
    }
}
