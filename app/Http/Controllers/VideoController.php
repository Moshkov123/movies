<?php

namespace App\Http\Controllers;

use App\Models\Chronology;
use App\Models\Movies;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function main()
    {
        $movies = new Movies();
        $chronologies = Chronology::all();
        $seasons = []; 
        $year = [];

        $allMovies = $movies->orderBy('number')->get();
        $allchronology =$movies->orderBy('chronology')->get();

        // Check if movies are retrieved successfully
        if ($allMovies) {
            // Iterate over each movie to extract the season
            foreach ($allMovies as $movie) {
                if (!in_array($movie->season, $seasons)) {
                    $seasons[] = $movie->season;
                }
            }
        }

        // Iterate over each chronology to extract the year
        foreach ($chronologies as $chronology) {
            if (!in_array($chronology->chronology, $year)) {
                $year[] = $chronology->chronology;
            }
        }
        return view('index', ['movies' => $allMovies,'allchronology'=>$allchronology, 'seasons' => $seasons, 'chronologies' => $chronologies, 'years' => $year]);
    }


}
