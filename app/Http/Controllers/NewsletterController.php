<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index(Type $var = null)
    {
       return view('index');
    }
    public function subscribe(Type $var = null)
    {
        
    }
}
