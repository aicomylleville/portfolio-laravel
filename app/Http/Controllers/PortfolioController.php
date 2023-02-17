<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Portfolio::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.create');
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
            'name' => 'required|max:255',
            'type' => 'required|max:100',
            'description' => 'required',
            'image' => 'required|file|image',
            'site_url' => 'required|max:100',
            'github_url' => 'required|max:100',
            'responsibility' => 'required|max:100',
            'production_time' => 'required|max:100',
            'technology' => 'required|max:100',
            'tools' => 'required|max:100'
        ]);

        $portfolio = new Portfolio();
        $portfolio->name = $request->input('name');
        $portfolio->type = $request->input('type');
        $portfolio->description = $request->input('description');
        $path = $request -> file('image') -> store('images');
        $portfolio->image = $path;
        $portfolio->site_url = $request->input('site_url');
        $portfolio->github_url = $request->input('github_url');
        $portfolio->responsibility = $request->input('responsibility');
        $portfolio->production_time = $request->input('production_time');
        $portfolio->technology = $request->input('technology');
        $portfolio->tools = $request->input('tools');

        $portfolio->save();

        return redirect()->route('portfolio.show', ['name' => $portfolio->name]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {

        $portfolio = Portfolio::where('name', $name)->first();

        if ($portfolio != null) {
            $portfolio->description = Str::markdown($portfolio->description);
        }

        return $portfolio;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio = Portfolio::find($id);

        return view('home.update', ['portfolio' => $portfolio]);
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
            'name' => 'required|max:255',
            'type' => 'required|max:100',
            'description' => 'required',
            'image' => 'required|file|image',
            'site_url' => 'required|max:100',
            'github_url' => 'required|max:100',
            'responsibility' => 'required|max:100',
            'production_time' => 'required|max:100',
            'technology' => 'required|max:100',
            'tools' => 'required|max:100'
        ]);

        $portfolio = Portfolio::find($id);
        $portfolio->name = $request->input('name');
        $portfolio->type = $request->input('type');
        $portfolio->description = $request->input('description');
        $path = $request -> file('image') -> store('images');
        $portfolio->image = $path;
        $portfolio->site_url = $request->input('site_url');
        $portfolio->github_url = $request->input('github_url');
        $portfolio->responsibility = $request->input('responsibility');
        $portfolio->production_time = $request->input('production_time');
        $portfolio->technology = $request->input('technology');
        $portfolio->tools = $request->input('tools');

        $portfolio->save();

        return redirect()->route('portfolio.show', ['name' => $portfolio->name]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio = Portfolio::find($id);

        $portfolio -> delete();

        return redirect()->route('admin');
    }
}
