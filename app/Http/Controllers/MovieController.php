<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use GuzzleHttp\Client;


class MovieController extends Controller
{
    public function index(){

        $url = Movie::paginate(10);
        $data['images'] = [];
        $data['name'] = [];
        $data['movie'] = $url;
        $data['genres'] = Genre::all();
        $data['vote_average'] = [];
        $data['overview'] = [];
        $data['backdrop'] = [];
        $data['movie'] = $url;
        $data['slide'] = [];
        $data['slide_poster'] = [];
        $data['slide_name'] = [];
        $data['slide_desc'] = [];

        foreach ($url as $item) {
            array_push($data['name'], $item->name);

            $client = new Client();
            $response = $client->request(
                'GET',
                $item->details
            );

            $body = $response->getBody();
            $json = json_decode($body);

            if(sizeof($json->results) != 0) {
                if(isset($json->results[0]->poster_path)) {
                    array_push($data['images'], 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2'.$json->results[0]->poster_path);
                    array_push($data['vote_average'], $json->results[0]->vote_average);
                    $overview = $json->results[0]->overview;
                    if(strlen($overview) > 150){
                        $overview = substr($overview, 0,200).'...';
                    }
                    array_push($data['overview'], $overview);
                } else {
                    array_push( $data['images'], '/images/default.jpg');
                    array_push($data['vote_average'], '0');
                    array_push($data['overview'], 'Nonton film '.$item->name.' sub Indo hanya di NontonMovies');
                }


                if(isset($json->result[0]->backdrop_path)){
                    array_push($data['backdrop'], 'https://www.themoviedb.org/t/p/'.$json->results[0]->backdrop_path);
                } else {
                    array_push($data['backdrop'], 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2'.$json->results[0]->poster_path);
                }

            } else {
                array_push( $data['images'], '/images/default.jpg');
                array_push( $data['backdrop'], '/images/default.jpg');
                array_push($data['vote_average'], '0');
                array_push($data['overview'], 'Nonton film '.$item->name.' sub Indo hanya di NontonMovies');
            }

        }

        //get upcoming
        $client = new Client();
        $response = $client->request(
            'GET',
            'https://api.themoviedb.org/3/movie/upcoming',
            [
                'query' => [
                    'api_key' => '3f413da4215dfbf5b0677ec281a9c208',
                ]
            ]
        );

        $body = $response->getBody();
        $json = json_decode($body);

        for ($i = 0 ; $i<3 ; $i++){
            array_push($data['slide'], 'https://www.themoviedb.org/t/p/original'.$json->results[$i]->backdrop_path);
            array_push($data['slide_name'], $json->results[$i]->original_title);
            array_push($data['slide_desc'],$json->results[$i]->overview);
            array_push($data['slide_poster'], 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2'.$json->results[$i]->poster_path);
        }

        return view('index', $data);

    }
}
