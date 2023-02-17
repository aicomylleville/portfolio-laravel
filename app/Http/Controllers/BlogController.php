<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        return redirect()->route('blog.show', ['id' => $blog -> id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('blog.update', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

        return redirect()->route('blog.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        $blog->delete();

        return redirect()->route('admin');
    }
}
