<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
      $people = ['John', 'Tony', 'Noby'];
      $pets = ['dog', 'cat', 'bird'];
       return view('welcome', compact('people', 'pets'));

    }
    public function about()
    {

      return view('about');
    }
}
