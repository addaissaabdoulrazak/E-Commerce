<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProduitController extends Controller
{
    public function ajouter()
    {
        //TODO: search method pluck() 
        $list_Categories=Category::all()->pluck('category_name','category_name');
        return view('admin.ajouterProduit')->with("list_Categories", $list_Categories);
    }
 
    public function save(Request $request)
    {
        $request->validate([
            'product_category' => 'required',
            'product_price' => 'required',
            'product_name'=> 'required',
            'product_image' => 'image|nullable|max:1999'
        ]);

  if($request->file('product_image'))
  {
      //Obtenir l'extension uniquement
      $fileExtension= $request->file('product_image')->getClientOriginalExtension();

      //construire un fichier 
      
      $fileNameToStore = '_'.time().'.'.$fileExtension;

      //uploader l'image et l'stoque dans notre Application
      $path= $request->file('product_image')->storeAs('/app/mes_image', $fileNameToStore);

  }else{
           
    $fileNameToStore ='noImage.jpeg' ;
  }

     $produit = new product();
     $produit->product_name=$request->input('product_name');
     $produit->product_price=$request->input('product_price');
     $produit->product_category=$request->input('product_category');
     $produit->product_image=$fileNameToStore;
     $produit->status= 1;
     dd($produit);
     $produit->save();

        return redirect('/produit/ajouter')->with('status', 'produit ajouter');
    }

    public function produits()
    {
        $list_produit=product::get();
        return view('admin.produits')->with('list_produit', $list_produit);
    }

}
