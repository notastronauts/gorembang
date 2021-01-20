<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\KlentengCollection;
use App\Http\Resources\KlentengResource;
use App\Models\Klenteng as ModelsKlenteng;
use Illuminate\Http\Request;

class Klenteng extends Controller
{
    public function index() {
        return new KlentengCollection(ModelsKlenteng::all());
    }

    public function show($id) {
        return new KlentengResource(ModelsKlenteng::find($id));
    }
}
