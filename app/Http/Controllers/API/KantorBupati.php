<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\KantorBupatiCollection;
use App\Http\Resources\KantorBupatiResource;
use App\Models\KantorBupati as ModelsKantorBupati;
use Illuminate\Http\Request;

class KantorBupati extends Controller
{
    public function index() {
        return new KantorBupatiCollection(ModelsKantorBupati::all());
    }

    public function show($id) {
        return new KantorBupatiResource(ModelsKantorBupati::find($id));
    }
}
