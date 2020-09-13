<?php

namespace App\Http\Controllers;
use Redirect;

class HomeController extends Controller
{
 
    public function index(){
        return view('pages.home');
    }
}
