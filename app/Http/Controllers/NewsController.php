<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show(int $id)
    {
        $item = News::find($id);
        return view('news/show', ['item' => $item]);
    }

}
