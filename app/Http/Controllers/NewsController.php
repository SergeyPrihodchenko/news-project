<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(News $news)
    {
        $mainData = $news->all();
        $data = [];
        return view('main', ['data' => $data, 'news' => $mainData]);
    }
    public function show(News $news)
    {
        return view('showNews', ['news' => $news]);
    }
}
