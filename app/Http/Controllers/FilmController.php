<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class FilmController extends Controller
{
    //

    public function FilmPage(){

        $Movies = Movie::all();

        return view('FilmEdit', compact('Movies'));
    }
}
