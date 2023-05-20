<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ExportController extends Controller
{
    public function createJSON(News $news)
    {
        File::put(storage_path() . '/news.json', json_encode($news->all(), JSON_UNESCAPED_UNICODE, JSON_PRETTY_PRINT));
        return redirect()->route('main')->with('success', 'Данные выгруженны');
    }
}
