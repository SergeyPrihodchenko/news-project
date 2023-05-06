<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(News $news)
    {
        $mainData = DB::table('news')
            ->join('categories', 'news.id_category', '=', 'categories.id')
            ->select('categories.name as category',);
        $data = $mainData->get()->all();
        $news->categories = $mainData;
        dd($news->categories->get());
        return view('main', ['data' => $data, 'news' => $newsData]);
    }
}
