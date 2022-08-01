<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  
    public function index()
    {
        return view('contact');
    }

    //sending messages
    public function sendMessage(){

    }
    //fetching blog
    public function getBlog(){

    }
    //getting portfolio
    public function getPortfolio(){

    }

}
