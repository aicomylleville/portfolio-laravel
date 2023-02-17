<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {
        $portfolios = app('App\Http\Controllers\PortfolioController')->index();
        return view('home.index', ['portfolios' => $portfolios]);
    }

    public function show($name) {
        $portfolio = app('App\Http\Controllers\PortfolioController')->show($name);
        
        return view('home.detail', ['portfolio' => $portfolio]);
    }
}
