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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livret/{n}', function ($n) {
    $resultat = [];
    for ($i = 1; $i <= 12; $i++) {
        $resultat[] = $i . " * " . $n . " = " . $i * $n;
    }
   echo implode("<br>", $resultat);

})->where('n', '[1-9]|1[0-2]');

Route::get('/{p}age1', function () {
    return true;
})->where('p', 'p|P');

Route::get('/cff/{gare}/{time}/{direction}/{date?}', function($gare, $time, $direction, $date = null){
    if($date == null){
        $date = date('d.m.Y');
    }
    return redirect('https://www.sbb.ch/fr/acheter/pages/fahrplan/fahrplan.xhtml?von=' . $gare . '&zeit=' . $time . '&nach=' . $direction . '&suche=true&datum='. $date);
});






