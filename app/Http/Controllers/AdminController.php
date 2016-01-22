<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Product;
use App\Categorie;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class AdminController extends Controller
{
    public function dashboard()
    {

        $products = DB::table('product')->get();
        $nb = DB::table('product')->count();
        //Product ::count();
        $max = DB::table('product')->max('price');
        $avg = DB::table('product')->avg('price');
        $list = DB::table('product')->orderBy('price')->get();
        //die(var_dump($brand));
        return view('admin.dashboard', ["produit" => $products, "quantity" => $nb, "prix" => $max, "moyenne" => $avg, "ordre" => $list]);
    }

    public function register()
    {
        return view('admin.register');
    }







    public function categories()
    {


        $category = DB::table('categorie')->get();
        /*dump($category);*/
        return view('admin.categories', ["catyg" => $category]);

        //dump($categ);
        //die("cool");

    }
    public function supprimer($idcat)
    {
        Categorie:: FindOrFail($idcat)->delete();

        return redirect()->route('categories');
     }

   public function ajouterCategory(Request $request){

        /*dump($request);*/
        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(),
                [
                    'catId' => 'required',
                    'catTitre' => 'required|min:2|max:250',
                    'catDescribe' => 'required|min:2|max:250',
                    'catImage' => 'required|image|max :150000'//taille
                ],
                [
                    'catTitre.required' => 'Attention le champ titre est vide',
                    'required' => 'Attention',
                    'catDescribe.required' => 'Attention la description est vide',
                    'catId.required' => 'Attention le champ position est vide',
                    'catImage' => 'Attention, cela doit être une image'

                ]
            );


            if ($validator->fails()) {
                return redirect()->route('ajouterCategory')
                    ->withInput()
                    ->withErrors($validator);
            }
            // Si tout s'est bien passé, j'enregistre une nouvelle catégorie

            $file = $request->file('catImage');
            $destinationFile = public_path() . '/upload/categories';
            $nameFile = str_random(15) . '.' . $file->getClientOriginalExtension();

            $nouvelleCategorie = new Categorie();
            $nouvelleCategorie->name = $request->catTitre;
            $nouvelleCategorie->description = $request->catDescribe;
            $nouvelleCategorie->position = $request->catId;
            $nouvelleCategorie->image = $nameFile;

            $nouvelleCategorie->save(); // Fait l'enregistrement en BDD

            $file->move($destinationFile, $nameFile);

            return redirect()->route('ajouterCategory')->with('successCat', 'Votre catégorie a bien été ajouté');


        }


        return view('admin.ajouterCategory');



    }
}