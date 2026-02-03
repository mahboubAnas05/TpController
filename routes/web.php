<?php

use Illuminate\Support\Facades\Route;

Route::get('/a', function () {
    return view('welcome'); //katgoul lih mli ch wa7d kymchi lhad url katgoul lih afficher lihoum ha la page owla dir chi programme
});

Route::get('/', function () {
    return view(''); //katgoul lih mli ch wa7d kymchi lhad url katgoul lih afficher lihoum ha la page owla dir chi programme
});


// Route::get('/login', function(){
//     return 'page login' ;
// });

// // Route::get('/page/{n}', function($n){
// //     return "page numero $n";
// // });

// Route::get('/page/{n?}', function($n = "2020"){
//     return "page numero $n";
// });

// Route::get('/formation/{formation}/filiere/{filiere}/groupe/{groupe}/stagaire/{stagaire}', function($formation, $filiere, $groupe, $stagaire){
//     return view('page', [
//         'formation' => $formation,
//         'filiere' => $filiere,
//         'groupe' => $groupe,
//         'stagaire' => $stagaire
//     ]);
// });

// Route::get('bienvenue/', function(){
//     return "<h1>welcome to my app</h1>";
// });

// Route::get('name/{nom}', function($nom){
//     return "<h1> hello $nom how can i help you ?</h1>";
// });

//





?>

