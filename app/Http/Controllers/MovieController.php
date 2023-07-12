<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Movie::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return $movie;
    }

    /**
     * Store a new resource in the database.
     */
    function store(Request $request) {
        $movie = Movie::create($request->all());
        return $movie;
    }

    /**
     * Update a resource
     */
    function update(Request $request, Movie $movie) {
        
        Movie::where('id', $movie->id)
            ->update($request->all());
        
        return Movie::find($movie->id);
    }

    /**
     * Destroy a resource
     */
    function destroy(Movie $movie) {

        Movie::destroy($movie->id);

        return Movie::all();
    }
}
