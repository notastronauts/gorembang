<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\IbadahCollection;
use App\Http\Resources\IbadahResource;
use App\Models\Ibadah as ModelsIbadah;
use Illuminate\Http\Request;

class Ibadah extends Controller
{
    public function index() {
        return new IbadahCollection(ModelsIbadah::all());
    }

    public function show($id) {
        return new IbadahResource(ModelsIbadah::find($id));
    }
}
