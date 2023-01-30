<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        //$series = Serie::all(); //get all the series
        $series = Serie::query()->orderBy('name')->get();

        return view('series.index', compact('series'));
    }

    public function create(Request $request)
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serieName = $request->input('name');
        $serie = new Serie();
        $serie->name = $serieName;
        $serie->save();

        return redirect('/series');

    }
}

