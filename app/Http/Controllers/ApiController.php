<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Showing;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    
    public function getAllShowings(Request $request)
    {
        return Showing::all();
    }

    public function getUpcomingShowings(Request $request)
    {
        return Showing::upcoming()->get();
    }

    public function getMovies(Request $request)
    {
        return Movie::get();
    }

    public function getMobileMovieInfo(Request $request, $id)
    {
        $movie = Movie::where('id', '=', $id)->get()->first();        
        return view('coursework.week_four.page', ['movie' => $movie]);
    }

    public function getMovie(Request $request, $id)
    {
        return Movie::findOrFail($id)->get()->first();
    }

    public function createBooking(Request $request)
    {
        
    }
}
