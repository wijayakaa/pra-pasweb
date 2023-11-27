<?php

namespace App\Http\Controllers;

use App\Models\Jacket;
use Illuminate\Http\Request;

class JacketController extends Controller
{
    public function index()
    {
        return view('jacket.all', [
            "title" => "jacket",
            "jacket" => Jacket ::all(),
        ]);
    }

    public function show($jacket)
{
    return view('jacket.Detail', [
        "title" => "jacket-Detail",
        "jacket" => Jacket::find($jacket)
    ]);
    }
}
