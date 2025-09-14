<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgenceController extends Controller
{
    public function index(){
        return view('home');
    }

    public function apropos(){
        return view('apropos');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function equipe(){
        return view('equipe');
    }

    public function contact(){
        return view('contact');
    }

    public function contactForm(Request $request){
       //return $request;

            // Retourne la vue 'contact' en y passant les données de la requête sous la clé 'data'.
            // Cela permet d'accéder aux données du formulaire dans la vue, par exemple :
            // {{ $data->input('name') }}
       return view('contact', ['data' => $request]);
    }

}