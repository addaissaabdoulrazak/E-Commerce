<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
   public function ajouter()
   {
       return view('admin.ajouterCategorie');
   }

   public function edit($id)
   {
      $categ = Category::find($id);
     // dd($categ);
     return view('admin.editCategorie')->with('categ', $categ);
   }


   public function save(Request $request)
   {
      // ! Serve side validation puis save
      $request->validate([
         'category_name' => 'required'
      ]);

       $category=new Category();
       $category->category_name = $request->input('category_name');

      $category->save();

       return redirect('/categorie/ajouter')->with('status', "La Categorie $category->category_name a été Ajouter avec succès ");
   }

 public function update(Request $request)
 {
    // ! Serve side validation puis save
    $request->validate([
      'category_name' => 'required|unique:categories'
   ]);
      $categorie = Category::find($request->input('id'));
      $categorie->category_name = $request->input('category_name');
      $categorie->update();

    return redirect('categorie/categories')->with('status', "La Categorie $categorie->category_name a été Modifier avec succès ");
 }


   public function categorie()
   {
      //!getAll();
      $list_categories=Category::get(); 

      return view('admin.categories')->with('list_categories', $list_categories);
   }
}