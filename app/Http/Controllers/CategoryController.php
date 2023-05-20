<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $category = $category->all();
        return view('category', ['categories' => $category, 'news']);
    }

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

        return view('groupNews', ['news' => $news, 'category' => $category_name]);
    }
}
