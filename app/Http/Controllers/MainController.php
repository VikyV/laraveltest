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
        return view('accueil');
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


    public function register()
    {
        return view('register');
    }


    public function checkout()
    {
        return view('checkout');
    }
}

