<?php

namespace App\Http\Controllers;

use \Illuminate\View\View;

class GrupoController extends Controller
{
    public function index()
    {
        return view('inicio');
    }
    public function Gabo()
    {
        return view('Gabo');
    }

    public function ismael()
    {
        return view('ismael');
    }

}
