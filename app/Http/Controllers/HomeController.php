<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concert;

class HomeController extends Controller
{
    public function index()
    {
        $concerts = Concert::all();
        return view('index')->with('concert', $concerts);
    }
}
