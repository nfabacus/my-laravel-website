<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $people = ['John', 'Tony', 'Noby'];
      $pets = ['dog', 'cat', 'bird'];
      return view('welcome', compact('people', 'pets'));
    }
}
