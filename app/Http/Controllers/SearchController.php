<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SearchController extends Controller
{
    public function index()
    {
        // $tag_id = "laravel";

        $url = "https://cocktail-f.com/api/v1/cocktails";
        $method = "GET";

        //接続
        $client = new Client();

        $response = $client->request($method, $url);

        $posts = $response->getBody();
        $posts = json_decode($posts, true);
        $posts = $posts['cocktails'];
        // $posts = array();
        // dd($posts);

        return view('tops.search_result', ['posts' => $posts]);
        // return view('tops.search_result', compact('posts'));
    }

    public function show()
    {
        return view('tops.search_show');
    }
}