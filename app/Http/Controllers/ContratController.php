<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contrat;

class ContratController extends Controller
{
    public function index(){
        return view('contrat');
    }
    public function ajoutContrat(Request $request){
        $contrat=new Contrat;
        $contrat->DateDepart=$request->date_depart;
        $contrat->DateRetourPrevu=$request->date_prevu;
        $contrat->DateRetour=$request->date_retour;
        $contrat->MontantJournalier=$request->montant_journalier;
        $contrat->MontantAcompte=$request->montant_acompte;
        $contrat->km_depart=$request->kilometre_depart;
        $contrat->save();
        return redirect()->route('NosContrats');

}
}
