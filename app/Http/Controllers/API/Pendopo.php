<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PendopoCollection;
use App\Http\Resources\PendopoResource;
use App\Models\Pendopo as ModelsPendopo;
use Illuminate\Http\Request;

class Pendopo extends Controller
{
    public function index() {
        return new PendopoCollection(ModelsPendopo::all());
    }

    public function show($id) {
        return new PendopoResource(ModelsPendopo::find($id));
    }
}
