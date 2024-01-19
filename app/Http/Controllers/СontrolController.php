<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class СontrolController extends Controller
{
    public function index()
    {
        $movies = new Movies();
        $allMovies = $movies->orderBy('created_at')->get();
        return view('control-movies', ['movies' => $allMovies ]);
    }
    public function indexEdit($id)
{
    $movie = Movies::find($id);
    return view('movies-edit', ['movie' => $movie]);
}
public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'description' => 'required',
        'title_de' => 'required',
        'number' => 'required',
        'title_ru' => 'required',
        'season' => 'required',
    ]);
    $movie = Movies::find($id);
    $movie->season = $validatedData['number'];
    $movie->season = $validatedData['season'];
    $movie->title_ru = $validatedData['title_ru'];
    $movie->title_de = $validatedData['title_de'];
    $movie->description = $validatedData['description'];
    $movie->video= $request->input('video');
    $movie->subtitles = $request->input('subtitles');
    $movie->hero =" NULL";
    $movie->chronology = $request->input('dateone') + $request->input('datetwo');
    $movie->save();
    

    return redirect()->route('control-movies')->with('success', 'Content updated successfully');
}

public function store(Request $request)
{
    $seasonValidation = $request->validate([
        'season' => 'required',
    ]);
    $numberValidation = $request->validate([
        'number' => 'required',
    ]);
    $title_ruValidation = $request->validate([
        'title_ru' => 'required',
    ]);
    $title_deValidation = $request->validate([
        'title_de' => 'required',
    ]);
    $descriptionValidation = $request->validate([
        'description' => 'required',
    ]);
    $movie = new Movies();
    $title_de=  Movies::where('title_de', $request->input('title_de'))->first();
    $title_ru=  Movies::where('title_ru', $request->input('title_ru'))->first();
  

    if(!empty($request->input('video')) && !empty($request->input('subtitles'))){
        $video =Movies::where('video', $request->input('video'))->first();
        $subtitles=Movies::where('subtitles', $request->input('subtitles'))->first();

        if (!$title_ru && !$video && !$title_de && !$subtitles) {
            $movie->title_de = $request->input('title_de');
            $movie->title_ru = $request->input('title_ru');
            $movie->video= $request->input('video');
            $movie->subtitles = $request->input('subtitles');
        } else {
            return back()->with('error', 'Видео уже существует с таким заголовком в базе данных.');
        }
    } else if (!empty($request->input('subtitles'))) 
    {
        $subtitles=Movies::where('subtitles', $request->input('subtitles'))->first();
        if (!$title_ru  && !$title_de) {
            $movie->title_de = $request->input('title_de');
            $movie->title_ru = $request->input('title_ru');
            $movie->video= " ";
            $movie->subtitles = $request->input('subtitles');
        } else {
            return back()->with('error', 'Видео уже существует с таким заголовком в базе данных.');
        }
    } else if (!empty($request->input('video'))) 
    {
        $video =Movies::where('video', $request->input('video'))->first();
        if (!$title_ru && !$video && !$title_de ) {
            $movie->title_de = $request->input('title_de');
            $movie->title_ru = $request->input('title_ru');
            $movie->video= $request->input('video');
            $movie->subtitles = " ";
        } else {
            return back()->with('error', 'Видео уже существует с таким заголовком в базе данных.');
        }
    }  else {
        if (!$title_ru  && !$title_de) {
            $movie->title_de = $request->input('title_de');
            $movie->title_ru = $request->input('title_ru');
            $movie->video=" ";
            $movie->subtitles = " ";
        } else {
            return back()->with('error', 'Видео уже существует с таким заголовком в базе данных.');
        }
    }
  
    $movie->season = $request->input('season');
    $movie->chronology = $request->input('dateone') + $request->input('datetwo');
    $movie->number = $request->input('number');
    $movie->hero =" NULL";
    $movie->description = $request->input('description');
    $movie->save();

    return redirect()->route('addmovie')->with('success', 'Видео успешно загружено!');

}
}
