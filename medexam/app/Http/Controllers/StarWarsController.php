<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class StarWarsController extend Controller{
    puplic function getCharacters()
    {
        $client = new Client();
        $response = $client->get('https://swapi.dev/api/people');
        $data = json_decode($response->getBody(), true);
        return view('starwars', ['characters' => $data['results']]);
    }
}

