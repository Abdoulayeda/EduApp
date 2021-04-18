<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Universite;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $universites = Universite::all();
     return view('header')->with(compact('universites'));
    }


    public function showsite($id)
    {
        $universite = Universite::find($id);
        return view('showsite')->with(compact('universite'));
    }



}

