<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $movies = new Movies();
        $seasons = []; // Initialize the $seasons array

        // Fetch all movies
        $allMovies = $movies->orderBy('number')->get();

        // Check if movies are retrieved successfully
        if ($allMovies) {
            // Iterate over each movie to extract the season
            foreach ($allMovies as $movie) {
                if (!in_array($movie->season, $seasons)) {
                    $seasons[] = $movie->season;
                }
            }
        }

        return view('movies', ['movies' => $allMovies, 'seasons' => $seasons]);
    }

    public function main()
    {
        $movies = new Movies();
        $seasons = []; 

        $allMovies = $movies->orderBy('number')->get();

        // Check if movies are retrieved successfully
        if ($allMovies) {
            // Iterate over each movie to extract the season
            foreach ($allMovies as $movie) {
                if (!in_array($movie->season, $seasons)) {
                    $seasons[] = $movie->season;
                }
            }
        }
        return view('index', ['movies' => $allMovies, 'seasons' => $seasons]);
    }


}
