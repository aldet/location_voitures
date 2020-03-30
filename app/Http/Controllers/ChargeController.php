<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charge;

class ChargeController extends Controller
{
    public function index(){
        return view('charge');
    }
    public function ajoutCharge(Request $request){
        $charge=new Charge;
        $charge->type=$request->type_charge;
        $charge->Observation=$request->observation;
        $charge->save();
        return redirect()->route('NosCharges');
    }
}
