<?php

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

use App\Article;
use App\User;
use App\Cible_routage;

Route::get('/', function () {

    $arts = DB::select('SELECT * FROM Article  ORDER BY numéro DESC');
    $ArtsBricolage = [];
    $ArtsDecoration = [];
    $Brico = 0;
    $Deco = 0;
    foreach ($arts as $ast) {
        if ($ast->Categori == "Bricolage" && $Brico < 3) {
            $ArtsBricolage[] = $ast;
            $Brico++;

        }
        if ($ast->Categori == "Décoration" && $Deco < 3 ) {
            $ArtsDecoration[] = $ast;
            $Deco++;

        }


        if ($Brico == 3 && $Deco == 3 )
            break;

    }

    return view('index',compact('ArtsBricolage','ArtsDecoration'));
})->name('index');

//**********************************************************************************************************************

Route::get('/Deco', function () {
    $ArtsDecoration = Article::all()->where('Categori','Décoration' );

    return view('Deco',compact('ArtsDecoration'));
})->name('Deco');

//**********************************************************************************************************************

Route::get('/Bricolage', function () {
    $ArtsDecoration = Article::all()->where('Categori','Bricolage' );
    return view('Bricolage',compact('ArtsDecoration'));
})->name('Bricolage');

//**********************************************************************************************************************

Route::post('/ValideCommande/delete/{id}', 'ValiderCommandeController@destroy');
Route::post('/ValideCommande/{id}', 'ValiderCommandeController@update');



//**********************************************************************************************************************

Route::group(['middleware' => ['web']], function () {
    Route::resource('/Commande', 'CommandeController');
    Route::resource('/ValideCommande','ValiderCommandeController')->except('destroy','update');;
    Route::resource('/allArt', 'AllArtController');
    Route::resource('/NewArt', 'ArticleController');
    Route::resource('/dashbord/ToutLesCible','ToutLesCiblecontroller');
    Route::resource('/dashbord/NewCible','AjouterCibleController');
    Route::resource('/dashbord/CommandeAD','ComandeADMContreller');
    Route::resource('/dashbord/anomalie','AnomalieController');
    Route::resource('/dashbord/editanomali','EditeAnomaliController');
    Route::resource('/dashbord/CreatPub','PubCreateControler');
    Route::resource('/dashbord/EnvoyerPub','PubCibleControler');

});
//**********************************************************************************************************************
Route::get('/email', function (){
    return view('email.pubmail');
});

Auth::routes();

Route::get('/dashbord', 'HomeController@index')->name('dashbord');
Route::post('/dashbord/EnvoyerPub/creat','PubCibleControler@CreatXMLFile')->name('EnvoyerPub.CreatXMLFile');


