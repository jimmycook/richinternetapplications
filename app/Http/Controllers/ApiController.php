<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Showing;
use App\Booking;
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

    public function getUser(Request $request)
    {
        return \Auth::user();
    }

    public function getMovieWithSlug(Request $request, $slug)
    {
        return Movie::where('slug', '=', $slug)->get()->first();
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
        $userID = $request->input('userid');
        $showingID = $request->input('showingid');
        $seats = $request->input('seats');

        $showing = Showing::find($showingID)->get()->first();

        if ($showing) {
            if($showing->seats >= $seats ) {
                $showing->seats = $showing->seats - $seats;
                $showing->save();
                $booking = new Booking;
                $booking->user_id = $userID;
                $booking->seats = $seats;
                $booking->showing_id = $showingID;
                $booking->save();
                return true;
            }
        }
        return false;

    }

    public function getMovieShowings($slug)
    {
        return Movie::where('slug', '=', $slug)->get()->first()->showings()->get();
    }
}
