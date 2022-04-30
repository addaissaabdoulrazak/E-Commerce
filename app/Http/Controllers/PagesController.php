<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function services()
    {
        return view('pages.service');

    }
    public function apropos()
    {
        return view('pages.apropos');
    }
}
