<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
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
        return view('service');
        
    }

    public function nos_produits()
    {
        return view('nos_produits');
        
    }
}
