<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  
    public function index()
    {
        return view('index');
    }

    //About Page
    public function about(){
        return view('about');
    }
    //Privacy Policy Page
    public function privacy(){
        return view('privacy');
    }
    //Company Services Page
    public function services(){
        return view('services');
    }
    //Projects Page
    public function projects(){
        return view('project.index');
    }
    //Blog Articles Page
    public function blogs(){
        return view('blog.index');
    }
    //Contact Page
    public function contact(){
        return view('contact');
    }
    

}
