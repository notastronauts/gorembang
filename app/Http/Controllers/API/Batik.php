<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\BatikCollection;
use App\Http\Resources\BatikResource;
use App\Models\Batik as ModelsBatik;
use Illuminate\Http\Request;

class Batik extends Controller
{
    public function index() {
        return new BatikCollection(ModelsBatik::all());
    }

    public function show($id) {
        return new BatikResource(ModelsBatik::find($id));
    }
}
