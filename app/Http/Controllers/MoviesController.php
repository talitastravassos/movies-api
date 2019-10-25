<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MoviesController extends Controller
{

    private $API_KEY = "1f54bd990f1cdfb230adb312546d765d";
    private $BASE_URL = "https://api.themoviedb.org/3/";

    public function getUpComing($page = 1)
    {

        $client = new Client([
            'base_uri' => $this->BASE_URL . 'movie/upcoming?api_key=' . $this->API_KEY . '&page=' . $page,
            'timeout'  => 2.0
        ]);
        $response = $client->request('GET', '');

        return $response->getBody();
    }

    public function getMovie($movie_id)
    {

        $client = new Client([
            'base_uri' => $this->BASE_URL . 'movie/' . $movie_id . '?api_key=' . $this->API_KEY,
            'timeout'  => 2.0
        ]);
        $response = $client->request('GET', '');

        return $response->getBody();
    }

    public function search($query, $page = 1)
    {
        $client = new Client([
            'base_uri' => $this->BASE_URL . 'search/movie?api_key=' . $this->API_KEY . '&query=' . $query . '&page=' . $page,
            'timeout'  => 2.0
        ]);
        $response = $client->request('GET', '');

        return $response->getBody();
    }

    public function getGenres()
    {
        $client = new Client([
            'base_uri' => $this->BASE_URL . 'genre/movie/list?api_key=' . $this->API_KEY,
            'timeout'  => 2.0
        ]);
        $response = $client->request('GET', '');

        return $response->getBody();
    }
}
