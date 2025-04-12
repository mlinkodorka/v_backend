<?php

namespace App\Http\Controllers;

use App\Models\Teszt;

class TesztController extends Controller
{
    public function index()
    {
        return response()->json(Teszt::with('kategoria')->get());
    }

    public function byKategoria($id)
    {
        return response()->json(Teszt::with('kategoria')->where('kategoria_id', $id)->get());
    }
}
