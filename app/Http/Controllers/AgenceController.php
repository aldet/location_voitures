<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agence;

class AgenceController extends Controller
{
    public function index(){
        return view('agences');
    }
    public function ajoutAgence(Request $request){
          $agence=new Agence;
          $agence->NomAgence=$request->nom_agence;
          $agence->CodePostalAgence=$request->code_postal;
          $agence->pays=$request->pays_agence;
          $agence->ville=$request->ville_agence;
          $agence->AdresseAgence=$request->adresse_agence;
          $agence->save();
          
          
    }
}
