<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(Request $r)
    {
        if ($r->submodulo == '') {
            return view('layouts.view_plantilla');
        } elseif ($r->submodulo == '1') {
        } else {
        }
    }
}
