<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    function index() : View {
        return view('frontend.index');
        
    }
    function about() : View {
        return view('frontend.components.about');
        
    }
}
