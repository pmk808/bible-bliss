<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function passVotd()
    {
        $votd = $this->getVotd();

        return view('verseOfTheDay', compact('votd'));
    } 

    private function getVotd()
    {
        $curl = curl_init();
        
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://uncovered-treasure-v1.p.rapidapi.com/today",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: uncovered-treasure-v1.p.rapidapi.com",
                "X-RapidAPI-Key: 50c67afc93msh2d4d3cc0293b3aap1cd5ebjsn73a9354c5576"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);

        return json_decode($response, true);
    }
}   