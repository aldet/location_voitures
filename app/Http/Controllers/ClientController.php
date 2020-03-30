<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function index(){
        return view('client');
    }


    public function ajoutClient(Request $request){
        $client= new Client;
        $client->nom=$request->nom;
        $client->prenom=$request->prenom;
        $client->cin=$request->cin;
        $client->NumPermis=$request->permis;
        $client->NumPassport=$request->passport;
        $client->email=$request->email;
        $client->pays=$request->pays;
        $client->ville=$request->ville;
        $client->telephone=$request->telephone;
        $client->save();
        return redirect()->route('NosClients');
    }
}
