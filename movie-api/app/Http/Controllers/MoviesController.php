<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

// public $client = new Client([
//     // Base URI is used with relative requests
//     'base_uri' => 'https://jsonplaceholder.typicode.com/posts',
//     // You can set any number of default request options.
//     'timeout'  => 2.0,
// ]);

class MoviesController extends Controller
{

    public function getUpComing()
    {
        $client = new Client(['base_uri' => 'https://api.themoviedb.org/3/movie/upcoming?api_key=1f54bd990f1cdfb230adb312546d765d&page=1', 'timeout'  => 2.0]);
        $response = $client->request('GET', '');

        return $response->getBody();
    }
}
