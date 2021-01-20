<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\OlehOlehCollection;
use App\Http\Resources\OlehOlehResource;
use App\Models\OlehOleh as ModelsOlehOleh;
use Illuminate\Http\Request;

class OlehOleh extends Controller
{
    public function index() {
        return new OlehOlehCollection(ModelsOlehOleh::all());
    }

    public function show($id) {
        return new OlehOlehResource(ModelsOlehOleh::find($id));
    }
}
