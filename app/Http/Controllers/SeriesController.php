<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SeriesController extends Controller
{
    public function index(Request $request) {

        /*access the method of the object Request received
        that return information like 'id' or 'url'*/
        //$id = $request -> get('id');
        //$url = $request -> url();
        //$method = $request -> method();

        $series = [
            'Punisher',
            'Breaking Bad',
            'Game of Thrones',
            'Better Call Saul'
        ];

        $html = '<ul>';
        foreach ($series as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        /* The function 'redirect' redirect to any address parsed as parameter */
        //return redirect('https://google.com');

        return response($html);
        // or just return $html

    }
}

