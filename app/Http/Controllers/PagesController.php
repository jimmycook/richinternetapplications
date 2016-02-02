<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Movie;

class PagesController extends Controller
{
    
    /**
     * Return the index view 
     * 
     * @return void
     */
    public function index()
    {
        $movie = Movie::first();
        return view('coursework.week_one', ['var' => $movie]);
    }
}
