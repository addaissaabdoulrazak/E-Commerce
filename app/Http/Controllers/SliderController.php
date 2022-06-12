<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function ajouter()
    {
        return view('admin.ajouterslider');
    }

    public function save()
    {
        return null;
    }
    public function sliders()
    {
        return view('admin.sliders');
    }
}
