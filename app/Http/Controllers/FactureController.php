<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facture;

class FactureController extends Controller
{
    public function index(){
        return view('facture');
    }
    public function ajoutFacture(Request $reque){
        $facture=new Facture;
        $facture->DateFacture=$reque->date_facture;
        $facture->montantFacture=$reque->montant_facture;
        $facture->save();
        return redirect()->route('NosFactures');

    }
}
