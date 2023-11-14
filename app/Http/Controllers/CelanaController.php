<?php

namespace App\Http\Controllers;

use App\Models\Celana;
use Illuminate\Http\Request;

class CelanaController extends Controller
{
    public function index()
    {
        return view('celana.all', [
            "title" => "celana",
            "celana" => Celana ::all(),
        ]);
    }

    public function show()
    {
        return view('celana.show',[
            "title" => "celana-Detail",
            "celana" => Student::find($celana)
        ]);
    }
}