<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; 

use  App\Models\superheros; //IMPORTAR MODELO

class SuperherosController extends Controller
{
    //
    public function index(){

        $page_title = "Super heroes";
        $superheroes = superheros::all();


        

    return view('Welcome', compact('page_title', 'superheroes'));
    }

    public function men(){

        $page_title = "Super heroes";
    
        $men = superheros::where('gender', '=', 'Male')->get();


        $superheroes = superheros::all();

        

    return view('example', compact('page_title','men'));
    }

    public function female(){

        $page_title = "Super heroes";
    
        $female = superheros::where('gender', '=', 'female')->get();


        $superheroes = superheros::all();

        

    return view('superheroes', compact('page_title','female'));
    }
}
