<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        // Seleziona tutto da movies
        $movies = Movie::all()->sortBy('title');

        // dd($movies);

        return view('home', compact('movies'));

    }
}
