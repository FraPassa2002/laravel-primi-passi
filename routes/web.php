<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//  Route = classe
//  ::get = propiretà statica
//  '/' = percorso che ci permette di arrivare alla pagina principale
//  function() = funzione di callback che restituisce quello che l'utente deve vedere quando accedi al link; quando accedi a questa pagina esegui questa funzione che ci restituisce la view.

Route::get('/', function () {

    $users = [
        [
            'firstName' => 'Francesco',
            'lastName' => 'Passarelli',
        ],
        [
            'firstName' => 'Luca',
            'lastName' => 'Rossi',
        ],
        [
            'firstName' => 'Paolo',
            'lastName' => 'Bruni',
        ],
        [
            'firstName' => 'Carlo',
            'lastName' => 'Cracco',
        ],
        [
            'firstName' => 'Gino',
            'lastName' => 'Torto',
        ],
    ];

    /*
    compact: crea un array associativo le cui chiavi sono le stringhr che mettiamo tra parentesi, mentre i valori di tali chiavi sono i valori delle variabili con i nomi corrispondenti alle stringhe inserite

        compact('links','firstName', 'lastName')
                        |
                        v
        [
            'links => $links,
            'links => $firstName,
            'links => $lastName,
        ]
    */

    /*
        dd: vuol dire dump and die, cioè fai il var_dump (più carino però) e poi stoppa l'esecuzione
    */
    // dd(compact('links','firstName', 'lastName'));

    // return view('welcome', [
    //     'links' => $links,
    //     'firstName' => $firstName,
    //     'lastName' => $lastName,
    // ]);          |
    //              V
    return view('home', compact('users'));
});
