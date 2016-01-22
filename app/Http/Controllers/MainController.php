<?php
/* comemntaires*/
namespace App\Http\Controllers;

/**
 * Class MainController
 * @package App\Http\Controllers
 * Sufficé par le mot clef Controller
 * et doit hérité de la super classe Controller
 */
    /** afin dutiliser le chemin sasn avoir à le rappeler **/

use Illuminate\Support\Facades\Input;
use App\Product;
use App\Categorie;
use DB;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class MainController extends Controller
{
    public function essai()
    {
        return view('test.testcode', ['firstname'=> 'Arale' ]);
    }

    public function tableau()
    {
        //die('go!');
        $products = [
            [
                "id" => 1,
                "title" => "Mon premier produit",
                "description" => "lorem ipsum",
                "date_created" => new \DateTime('now'),
                "prix" => 10
            ],
            [
                "id" => 2,
                "title" => "Mon deuxième produit",
                "description" => "lorem ipsum",
                "date_created" => new \DateTime('now'),
                "prix" => 20
            ],
            [
                "id" => 3,
                "title" => "Mon troisième produit",
                "description" => "lorem ipsum",
                "date_created" => new \DateTime('now'),
                "prix" => 30
            ],
            [
                "id" => 4,
                "title" => "",
                "description" => "lorem ipsum",
                "date_created" => new \DateTime('now'),
                "prix" => 410
            ],
        ];
        $produit = [
                [
                    "id" =>"",
                    "title" => "",
                    "description" => "",
                    "date_created" => new \DateTime('now'),
                    "prix" => ""
                ],
        ];
        return view("test.fichiertableau", ["bladeProduct"=>$products, "bladePro"=>$produit]);



    }
    public function team(){

        $equipes = [
            [
                "id" => 1,
                "firstname" => "Marc",
                "lastname" => "Toto",
                "chef" => true,
                "description" => "Lorem ipsum",
                "statut" => "chef"
            ],
            [
                "id" => 2,
                "firstname" => "Jean",
                "lastname" => "Michel",
                "chef" => false,
                "description" => "Lorem ipsum",
                "statut" => "graphiste"
            ],
            [
                "id" => 3,
                "firstname" => "Martine",
                "lastname" => "a la plage",
                "chef" => false,
                "description" => "Lorem ipsum",
                "statut" => "developeur"
            ],
        ];
        return view("test.equipe", ["teams"=>$equipes]);
    }

    public function home()
    {

        $products = Product::all();
        $categories = Categorie::all();
        //dump($products);
        return view('accueil',["produit"=>$products, "category"=>$categories]);

    }
    public function contact(Request $request)
    {
        /*dump($request);*/
        if($request->isMethod('POST'))
        {   $validator = Validator::make($request->all(),
            [
                'userName' => 'required|min:2|max:250',
                'userEmail' => 'required|email',
                'userPhone' => 'required|numeric',

                'userMsg' => 'required|max:1000',
            ],
            [
                'userName.required' => 'Attention le champ nom est vide',
                'required' => 'Attention le champ est vide',//celui-ci est général et permet de mettre qu'une ligne
            ]
            );

            if ($validator->fails())
            {
                return redirect()->route('contact')
                    ->withInput()
                    ->withErrors($validator);
            }

            Mail::send(['emails.contact-email', 'emails.contact-email-text'], ["data" => $request->all()], function ($message) {
                $message->from('monadressemail@gmail.com');

                 $message->to('sasha01tasha@gmail.com'); //mail admin
            });
            return redirect()->route('contact')->with('successContact', 'Votre email a bien été envoyé');
        }
        return view('contact');
    }



    public function details($id)
    {
        //$products = Product::all();
        //dump($products);
        $prod= Product:: FindOrFail($id);
        //dump($prod);

        //$catProduct = Categorie::where('name', $prod->categorie->name)->first();

        $productSameCategorie = Categorie::where('id', $prod->categorie->id)
            ->first()
            ->products()
            ->whereNotIn('id', [$id])
            ->get();


        return view('details',["produit"=>$prod, 'productsSameCat' => $productSameCategorie]);
    }

    public function categorie($id, Request $request)
    {
        $categ= Categorie:: findOrFail($id);
        $produitCategorie = $categ->products();

        switch($request->price)
        {
            case 'desc' :
                $produitCategorie = $produitCategorie->orderBy('price', 'desc');
                break;

            case 'asc' :
                $produitCategorie = $produitCategorie->orderBy('price', 'asc');
                break;
        }

        return view('categorie',["categorie"=>$categ, "priceOrder"=>$produitCategorie->get()]);

    }
    public function feedback(Request $request)
    {
        if($request->isMethod('POST'))
        {   $validator = Validator::make($request->all(),
            [
                'userUrl' => 'required',
                'userBug' => 'required',
                'userFirstName' => 'required|min:2|max:250',
                'userName' => 'required|min:2|max:250',
                'userEmail' => 'required|email',
                'userPhone' => 'required|numeric',
                'userMsg' => 'required|sometimes|min:10|max:500',
                "UserImage" => 'required|image|max :150000'//taille
            ],
            [
                'userEmail.required' => "nous avons besoin d'une adresse email",
                "UserImage.size" => "Votre image est trop grande"
                //'required' => 'Attention le champ est vide',celui-ci est général et permet de mettre qu'une ligne
            ]
        );

            if ($validator->fails())
            {
                return redirect()->route('feedback')
                    ->withInput()
                    ->withErrors($validator);
            }

            $size = Input::file('UserImage')->getSize();
            $name = Input::file('UserImage')->getClientOriginalName();
            //$name = str_random(10).'.'.Input::file('UserImage')->getClientOriginalExtension();//pour renommer avec string alétoire max10.


            $destinationPath = public_path()."/upload";


            if (Input::file('UserImage')->isValid())
            {
                $extension = Input::file('UserImage')->getClientOriginalExtension();
                Input::file( 'UserImage' )->move($destinationPath, $name);
            }

            Mail::send(['feedback.feedback-email', 'feedback.feedback-email-text'], ["data" => $request->all()], function ($message) use ($name) {
                $message->from('monadressemail@gmail.com');

                $message->to('sasha01tasha@gmail.com'); //mail admin

                $message->attach(asset("/upload/".$name));
            });




            return redirect()->route('feedback')->with('successContact', 'Nous vous remercions de votre retour');
        }
        return view('feedback');
    }


    public function checkout(Request $request)
    {

        //dump ($request->session()->get('panier'));
        $achatQuantity = $request->session()->get('panier');

        dump($achatQuantity);
        // Récupérer dans une variable les clefs du panier
        // Utiliser le nouveau tableau dans la requête ci-dessous
        $idProductPanier = array_keys($achatQuantity);

        $achat = DB::table('product')->whereIn('id', $idProductPanier )->get();
        dump($achat);

        $prixTotal = 0;

        $prixTotal = array_sum(array_column($achatQuantity, 'prixTotal'));



        //die;

        return view('checkout', ["achat"=>$achat, 'qty' => $achatQuantity, 'prix'=> $prixTotal]);
    }



    public function addproduct($id,Request $request)
    {
        $product = Product::findOrFail($id);
        if($request->session()->get('panier'))
        {
            $panier = $request->session()->get('panier');
        }
        else
        {
            $panier = [];
        }


        $qty = 1;

        if ( !empty($panier[$id]) )
        {
            $qty = $panier[$id]['qty'] + 1;
        }

        $panier[$id] = ["qty" => $qty, 'prixTotal' => ($product->price * $qty) ];
        //dump($panier);
        //die();

        $request->session()->put("panier", $panier);

        return redirect()->route('checkout');
    }


    public function updateProduct($id, Request $request)
    {
        $product = Product::findOrFail($id);
        // $id représente l'id du produit
        // $panier = Récupération du panier grâce à la session
        $panier = $request->session()->get('panier');
        if ( !empty($panier[$id]))
        {
            $qty = $request->quantite;
            //$prix = $request->price;
            $panier[$id]['qty'] = $qty;
            $panier[$id]['prixTotal'] = $product->price * $qty;
           /* mettre à jour la quantité du produit ( le code ressemble à ce que l'on a fait dans l'ajout )
                        enregistrer le panier dans la session*/
            $request->session()->put("panier", $panier);
        }

       return redirect()->route('checkout');

    }
    public function deleteproduct($id, Request $request)
    {
        $panier = $request->session()->get("panier");
        if( !empty($panier[$id]) )
        {
            unset($panier[$id]);
            $request->session()->put("panier", $panier);

        }

        if ($request->ajax())
        {
            // recalculer le total du panier
            $totalPanier = array_sum(array_column($panier, 'prixTotal'));

            // recalculer le nombre de produit
            $nombreDeProduit = array_sum(array_column($panier, 'qty'));

            return response()->json([
                'success' => 'suppression du produit avec succès',
                'totalPanier' => $totalPanier,
                'nombreDeProduit' => $nombreDeProduit
            ]);
        }

        return redirect()->route('checkout');
    }


}

