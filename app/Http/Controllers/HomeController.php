<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application home page.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
    {       
        return view('index');
    }

    public function about()
    {       
        return view('about');
    }

    public function service()
    {       
        return view('services');
    }

    public function feature()
    {       
        return view('features');
    }

     public function pricing()
    {       
        return view('pricing');
    }

    public function demo_form()
    {       
        return view('Demo_form');
    }

    public function school_visit()
    {       
        return view('schoolvisit');
    }

     public function service_agreement()
    {       
        return view('service_agreement');
    }

    public function franchiess()
    {       
        return view('franchiess');
    }

    public function contact()
    {       
        return view('contact');
    }

    public function home()
    {       
        return view('home');
    }
}
