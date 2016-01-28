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
        return Showing::
            whereDate('start_time', '>=', Carbon::today()->toDateString())->
            get();
    }

    public function getMovies(Request $request)
    {
        return Movie::get();
    }

    public function getMovie(Request $request, $id)
    {
        // dd($id);
        return Movie::findOrFail($id)->get()->first();
    }
}
