<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\TravelCollection;
use App\Http\Resources\TravelResource;
use App\Models\Travel as ModelsTravel;
use Illuminate\Http\Request;

class Travel extends Controller
{
    public function index() {
        return new TravelCollection(ModelsTravel::all());
    }

    public function show($id) {
        return new TravelResource(ModelsTravel::find($id));
    }
}
