<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;

class controllerJour2 extends Controller
{
    public function afficheTab($letter = null){
        $artistes = array(
            array(
                "nom" => "Amy",
                "prenom" => "Winehouse",
                "dateNaissance" => new DateTime('14-09-1983')
            ),
            array(
                "nom" => "Janis",
                "prenom" => "Joplin",
                "dateNaissance" => new DateTime('19-01-1943')
            ),
            array(
                "nom" => "Jo",
                "prenom" => "Bar",
                "dateNaissance" => new DateTime('19-01-1943')
            ),
            array(
                "nom" => "Janis",
                "prenom" => "Siegel",
                "dateNaissance" => new DateTime('12-01-1990')
            ),);

        //check if letter is empty
        if (!empty($letter)) {
            $letter = strtoupper($letter);
            $artistes = array_filter($artistes, function ($artiste) use ($letter) {
                return $artiste['nom'][0] == $letter;
            });
        }

        return view('maVue2')->with('artistes', $artistes);
    }
}
