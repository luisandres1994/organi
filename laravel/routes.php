<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Note;

Route::get('/', function () {
    return view('welcome');
});


Route::get('Notes', function () {
    
    $notes = Note::all();
    
    return view('Notes', compact('notes'));
});


Route::get('Notes/{note}/{slug?}' , function ($note,$slug = null){
    dd($note,$slug);
})->where('note','[0-9]+');

Route::get('Inicio', function(){
    
    return view('Inicio');
});



Route::get('sae', function(){
    
    return view('sae');
});