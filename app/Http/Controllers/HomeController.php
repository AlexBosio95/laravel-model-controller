<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    //
    public function Home(){

        $Movies = Movie::all();

        return view('Homepage', compact('Movies'));
    }
}
