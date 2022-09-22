<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    // Blog

    public function blogCreate()
    {
        return view('blog.create');
    }


    public function blogStore(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'type' => 'required',
            'image' => 'required|file|image',
            'article' => 'required'
        ]);

        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->type = $request->input('type');
        $path = $request -> file('image') -> store('images');
        $blog->image = $path;
        $blog->article = $request->input('article');

        $blog->save();

        return redirect()->route('blog.index', ['filter' => 'all']);
    }


    public function blogEdit($id)
    {
        $blog = Blog::find($id);

        return view('blog.update', ['blog' => $blog]);
    }


    public function blogUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'type' => 'required',
            'image' => 'required|file|image',
            'article' => 'required'
        ]);

        $blog = Blog::find($id);

        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->type = $request->input('type');
        $path = $request -> file('image') -> store('images');
        $blog->image = $path;
        $blog->article = $request->input('article');

        $blog->save();

        return redirect()->route('blog.index', ['filter' => 'all']);
    }


    public function blogDestroy($id)
    {
        $blog = Blog::find($id);

        $blog->delete();

        return redirect()->route('blog.index');
    }
}
