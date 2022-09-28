<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FilmEdit;

class FilmController extends Controller
{
    //

    public function FilmPage(){

        $Movies = FilmEdit::all();

        return view('FilmEdit', compact('Movies'));
    }
}
