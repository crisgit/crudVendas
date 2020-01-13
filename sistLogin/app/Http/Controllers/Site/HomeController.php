<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bolsa;

class HomeController extends Controller
{
    public function index()
    {
        $bolsas = Bolsa::all();
        return view('home', compact('bolsas'));
    }
}
