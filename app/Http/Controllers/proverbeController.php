<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proverbeController extends Controller
{
    //fonction qui récupère les proverbes sur https://fr.wiktionary.org/wiki/Annexe:Liste_de_proverbes_fran%C3%A7ais
    public function getProverbes(){
        $url = "https://fr.wiktionary.org/wiki/Annexe:Liste_de_proverbes_fran%C3%A7ais";
        $html = file_get_contents($url);
        $dom = new \DOMDocument();
        @$dom->loadHTML($html);
        $xpath = new \DOMXPath($dom);
        $proverbes = $xpath->query('//div[@class="mw-parser-output"]/ul/li');
        $proverbesArray = array();
        foreach ($proverbes as $proverbe) {
            $proverbesArray[] = $proverbe->nodeValue;
        }
        return $proverbesArray;
    }

    //fonction qui affiche les proverbes
    public function afficheProverbes(){
        $proverbes = $this->getProverbes();
        $proverbesKey = array_rand($proverbes, 10);
        $proverbes = array_intersect_key($proverbes, array_flip($proverbesKey));

        return view('proverbes')->with('proverbes', $proverbes);
    }
}
