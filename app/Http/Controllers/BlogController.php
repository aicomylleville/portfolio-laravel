<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        if ($request->filter == 'all' || $request->filter == null) {
            $blogs = Blog::orderBy('created_at', 'desc')
                            ->get();
        } else {
            $blogs = Blog::where('type', $request->filter)
                            ->orderBy('created_at', 'desc')
                            ->get();
        }


        foreach($blogs as $blog){
            // date
            $newtime = strtotime($blog->created_at);
            $blog->date = date('M d, Y',$newtime);
        }

        return view('blog.blog', ['blogs' => $blogs]);
    }


    public function show($id)
    {
        $blog = Blog::find($id);

        if ($blog != null) {
            // date
            $newtime = strtotime($blog->created_at);
            $blog->date = date('M d, Y',$newtime);

            // markdown
            $blog->article = Str::markdown($blog->article);

            return view('blog.detail', ['blog' => $blog]);
        }

        return redirect()->route('blog.index')->with('error', 'Blog doesn\'t exist.');
    }
}
