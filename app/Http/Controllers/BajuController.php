<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use Illuminate\Http\Request;

class BajuController extends Controller
{
    public function index()
    {
        return view('baju.all', [
            "title" => "Baju",
            "baju" => baju::all(),
        ]);
    }

    public function show()
    {
        return view('baju.show',[
            "title" => "Baju-Detail",
            "students" => Student::find($baju)
        ]);
    }
}