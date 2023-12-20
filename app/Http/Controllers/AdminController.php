<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->usertype;

            if($usertype=='user')
            {
                return view('movies');
            }
            else if($usertype=='admin')
            {
                return view('admin');
            }
            else
            {
                return redirect()->back();
            }
        
        }

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
        $videoValidation = $request->validate([
            'video' => 'required',
        ]);

        $descriptionValidation = $request->validate([
            'description' => 'required',
        ]);
        $movie = new Movies();
        $title_de=  Movies::where('title_de', $request->input('title_de'))->first();
        $title_ru=  Movies::where('title_ru', $request->input('title_ru'))->first();
        $video=  Movies::where('video', $request->input('video'))->first();

        if (!$title_ru && !$video && !$title_de) {
            $movie->title_de = $request->input('title_de');
            $movie->title_ru = $request->input('title_ru');
            $movie->video= $request->input('video');
        } else {
            return back()->with('error', 'Видео уже существует с таким заголовком в базе данных.');
        }

      
        $movie->season = $request->input('season');
        $movie->number = $request->input('number');
        $movie->description = $request->input('description');
        $movie->save();

        return redirect()->route('addmovie')->with('success', 'Видео успешно загружено!');

    }
}
