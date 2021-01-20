<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PesantrenCollection;
use App\Http\Resources\PesantrenResource;
use App\Models\Pesantren as ModelsPesantren;
use Illuminate\Http\Request;

class Pesantren extends Controller
{
    public function index() {
        return new PesantrenCollection(ModelsPesantren::all());
    }

    public function show($id) {
        return new PesantrenResource(ModelsPesantren::find($id));
    }
}
