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
        // dd($movies);
        return view('coursework.week_one.index', ['movies' => $movies]);
    }

    public function weekTwo()
    {
        $movies = Movie::orderBy('ranking', 'asc')->get();
        // dd($movies);
        return view('coursework.week_two.index', ['movies' => $movies]);
    }

    public function singlePageApp()
    {
        return view('spa');
    }
}
