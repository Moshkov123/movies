<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $movies = new Movies();
        
        return view('movies',['movies' => $movies->all()]);
    }

}
