<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Booking;
use App\Showing;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CourseworkController extends Controller
{

    public function weekOne()
    {
        $movies = Movie::orderBy('ranking', 'asc')->get();
        return view('coursework.week_one.index', ['movies' => $movies]);
    }

    public function weekTwo()
    {
        $movies = Movie::orderBy('ranking', 'asc')->get();
        return view('coursework.week_two.index', ['movies' => $movies]);
    }

    public function weekThree()
    {
        $movies = Movie::orderBy('ranking', 'asc')->get();
        $genres = [];

        foreach($movies as $movie)
        {
            if(!isset($genres[$movie->genre]))
            {
                $genres[$movie->genre] = [];
            }
            $genres[$movie->genre][] = $movie;
        }
        return view('coursework.week_three.index', ['movies' => $movies, 'genres' => $genres]);
    }

    public function weekFour()
    {
        $movies = Movie::orderBy('ranking', 'asc')->get();
        return view('coursework.week_four.index', ['movies' => $movies]);
    }

    public function weekFive()
    {
        $movies = Movie::orderBy('ranking', 'asc')->get();
        return view('coursework.week_five.index', ['movies' => $movies]);
    }

    public function weekSix()
    {
        $movies = Movie::orderBy('ranking', 'asc')->get();
        return view('coursework.week_six.index', ['movies' => $movies]);
    }

    public function singlePageApp()
    {
        return view('spa');
    }

    public function mobile()
    {
        $user = \Auth::user();

        return view('mobile', ['user' => $user]);
    }
}
