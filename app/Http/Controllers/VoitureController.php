<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voiture;



class VoitureController extends Controller
{
    public function index(){
        return view('voiture');
    }
    public function ajoutVoiture(Request $request){

           $voiture =new Voiture;
           $voiture->matriculation =$request->matriculation;
           $voiture->marque =$request->marque;
           $voiture->couleur=$request->couleur;
           $voiture->puissance =$request->puissance;
           $voiture->DateDebutAssurance=$request->date_assurance;
           $voiture->DateFinAssurance =$request->date_fin_assurance;
           $voiture->puissance =$request->puissance;        
           $voiture->climatisation=$request->choix_automatisation;
           $voiture->automatique=$request->choix_automatisation;
           $voiture->save();
           return redirect()->route('NosVoitures');
    
    }
}
