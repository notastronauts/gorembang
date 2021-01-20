<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\HotelCollection;
use App\Http\Resources\HotelResource;
use App\Models\Hotel as ModelsHotel;
use Illuminate\Http\Request;

class Hotel extends Controller
{
    public function index() {
        return new HotelCollection(ModelsHotel::all());
    }

    public function show($id) {
        return new HotelResource(ModelsHotel::find($id));
    }
}
