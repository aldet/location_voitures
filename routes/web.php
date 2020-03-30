<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/indice', 'HomeController@indice')->name('index');
Route::get('/voiture','VoitureController@index')->name("NosVoitures");
Route::post('voiture/ajout','VoitureController@ajoutVoiture')->name('ajoutVoiture');

Route::get('/client', 'ClientController@index')->name('NosClients');
Route::post('client/ajout','ClientController@ajoutClient')->name('ajoutClient');

Route::get('/agences','AgenceController@index')->name('NosAgences');
Route::post('agence/ajout','AgenceController@ajoutAgence')->name('ajoutAgence');

Route::get('/contrat','ContratController@index')->name('NosContrats');
Route::post('contrat/ajout','ContratController@ajoutContrat')->name('ajoutContrat');

Route::get('/facture','FactureController@index')->name('NosFactures');
Route::post('facture/ajout','FactureController@ajoutFacture')->name('ajoutFacture');

Route::get('/charge','ChargeController@index')->name('NosCharges');
Route::post('charge/ajout','ChargeController@ajoutCharge')->name('ajoutCharge');





