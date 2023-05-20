<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Category $category)
    {
        $category = Category::all();
        return view('indexAdmin', ['categories' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Category $category)
    {
        return view('adminPanel.createCategory', ['categories' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request, Category $category)
    {
        $request->validated();
        $request->flash();
        $category->fill($request->all())->save();
        return redirect()->route('admin.index', ['categories' => $category]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = DB::table('categories')
            ->where('id', '=', $id)
            ->select('name')
            ->get('name');

        $category_name = '';

        foreach ($category as $item) {
            $category_name = $item->name;
        }

        $news = News::where('id_category', '=', $id)->get();

        return view('adminPanel.newsByCategroy', ['news' => $news, 'category' => $category_name]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('adminPanel.createCategory', ['categories' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $request->validated();
        $request->flash();
        $category->fill($request->all())->save();

        return redirect()->route('admin.index', $category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.index', ['categories' => $category]);
    }
}
