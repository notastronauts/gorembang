<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\KulinerCollection;
use App\Http\Resources\KulinerResource;
use App\Models\Kuliner as ModelsKuliner;
use Illuminate\Http\Request;

class Kuliner extends Controller
{
    public function index() {
        return new KulinerCollection(ModelsKuliner::all());
    }

    public function show($id) {
        return new KulinerResource(ModelsKuliner::find($id));
    }
}
