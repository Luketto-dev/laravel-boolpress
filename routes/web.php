<?php

use Illuminate\Support\Facades\Auth;
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


//crea tutte le rotte per l autenticazione e gestione degli utenti
Auth::routes();

//crea una rotto per la home-page pubblica
Route::get('/', 'HomeController@index')->name('home');

Route::middleware("auth")
->namespace("Admin") // indica la cartella dove si trovano i controller
->name("admin.") // aggiunge prima del nome di ogni rotta questo prefisso
->prefix("admin") // aggiunge prima di ogni URI questo prefisso
->group(function(){

    //crea una rotta per la home-page amministrativa
    Route::get('/', 'HomeController@index')->name('index');

    //rotta per la index degli utenti, mi mostra la lista degli utenti
    Route::get('/users', 'UserController@index')->name('users.index');

    //rotta per l update degli utenti, salva la modifica fatta agli utenti
    Route::put('/users/{user}', 'UserController@update')->name('users.update');

    //rotta per l edit degli utenti, mostra un form per cambiare le informazioni degli utenti
    Route::get('/users/{user}/edit', 'UserController@edit')->name('users.edit');
    

    //mi crea tutte le rotte crud per i post
    Route::resource("posts", "PostController");

    
});

//rotta jolly 
//laravel cerca una rotta se non la trova arriva a questa che gli dice di prendere qualsiasi cosa gli viene passata 
Route::get('{any?}', function(){
    return view("welcome");// torniamo sempre la rotta welkome perchè il framawork creano la single page application
    //ovvero lavorando lato brawser al ricaricamento della pagina ricomincia da zero, e quindi cercano in tutti i modi 
    //di non farti ricariche la pagina perchè altrimenti perdi il ruolo piu importante del framwork
})->where("any", ".*"); // espressione regolare * = può contenere qualsiasi cosa l any