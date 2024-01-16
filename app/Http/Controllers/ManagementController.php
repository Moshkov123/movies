<?php

namespace App\Http\Controllers;

use App\Models\Chronology;
use App\Models\Movies;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index()
{
    $movies = new Movies();
    $allMovies = $movies->orderBy('season')->orderBy('number')->get();
    $chronologies = Chronology::all();

    return view('management', ['movies' => $allMovies, 'chronologies' => $chronologies]);
}
public function indexEdit()
{
    $movies = new Movies();
    $allMovies = $movies->orderBy('season')->orderBy('number')->get();
    $chronologies = Chronology::all();

    return view('management-edit', ['movies' => $allMovies, 'chronologies' => $chronologies]);
}
public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'sumMin' => 'required',
        'sumMax' => 'required',
        'chronology' => 'required',
    ]);

    $chronology = Chronology::find($id);
    $chronology->sumMin = $validatedData['sumMin'];
    $chronology->sumMax = $validatedData['sumMax'];
    $chronology->chronology = $validatedData['chronology'];
    $chronology->save();

    return redirect()->route('management')->with('success', 'Content updated successfully');
}

}
