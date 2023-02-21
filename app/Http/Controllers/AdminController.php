<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $portfolios = Portfolio::all();
        $blogs = Blog::all();

        return view('auth.admin', ['portfolios' => $portfolios, 'blogs' => $blogs]);
    }
}
