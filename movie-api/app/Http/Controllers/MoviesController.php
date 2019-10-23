<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MoviesController extends Controller
{

    public function getUpComing()
    {
        $client = new Client(['base_uri' => 'https://api.themoviedb.org/3/movie/upcoming?api_key=1f54bd990f1cdfb230adb312546d765d&page=1', 'timeout'  => 2.0]);
        $response = $client->request('GET', '');

        return $response->getBody();
    }

    public function search($query)
    {
        $client = new Client(['base_uri' => 'https://api.themoviedb.org/3/search/movie?api_key=1f54bd990f1cdfb230adb312546d765d&query='.$query.'&page=1', 'timeout'  => 2.0]);
        $response = $client->request('GET', '');

        return $response->getBody();
    }

    public function getGenres()
    {
        $client = new Client(['base_uri' => 'https://api.themoviedb.org/3/genre/movie/list?api_key=1f54bd990f1cdfb230adb312546d765d', 'timeout'  => 2.0]);
        $response = $client->request('GET', '');

        return $response->getBody();
    }
}
