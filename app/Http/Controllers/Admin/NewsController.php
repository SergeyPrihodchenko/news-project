<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(News $news)
    {
        $category = Category::all();
        return view('adminPanel.createNews', ['news' => $news, 'categories' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, News $news)
    {
        $request->flash();
        $url = null;
        $news->img = $url;
        $news->fill($request->all())->save();
        return redirect()->route('main');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $category = Category::all();
        return view('adminPanel.createNews', ['news' => $news, 'categories' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $request->flash();
        $news->img = null;
        $news->fill($request->all())->save();

        return redirect()->route('main');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('main')->with('success', 'Новость удалена');
    }
}
