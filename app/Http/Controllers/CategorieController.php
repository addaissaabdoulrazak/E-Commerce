<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
   public function ajouter()
   {
       return view('admin.ajouterCategorie');
   }

   public function save()
   {
      return null;
   }
}