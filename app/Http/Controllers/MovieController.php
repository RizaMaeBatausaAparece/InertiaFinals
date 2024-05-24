<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Inertia\Inertia;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return Inertia::render('movies', [
            'movies' => $movies,
        ]);
    }

    public function create()
    {
        return Inertia::render('Movies/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'director' => 'required',
            'rating' => 'required|numeric',
        ]);

        $movies = new Movie();
        $movies->title = $request->title;
        $movies->director = $request->director;
        $movies->rating = $request->rating;
        $movies->save();

        return redirect('/movies')->with('success', 'Movie created successfully');
    }

    public function show(Movie $movie)
    {
        return Inertia::render('Movies/view', ['movies' => $movie]);
    }

    public function update(Request $request, Movie $movie)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'director' => 'required',
            'rating' => 'required|numeric',
        ]);

        $movie->update($validatedData);

        return redirect('/movies');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();

        return redirect('/movies')->with('success', 'Movie deleted successfully');
    }
}
