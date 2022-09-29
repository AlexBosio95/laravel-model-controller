<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FilmEdit;

class FilmController extends Controller
{
    //

    public function FilmPage(){
        try {
            $Movies = FilmEdit::all();
            return view('FilmEdit', compact('Movies'));
        } catch (\Throwable $th) {
            return view('ErrorPage');
        }
        
    }
}
