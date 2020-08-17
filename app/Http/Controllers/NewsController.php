<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show(int $id)
    {
        $item = (new \App\Models\News())->getById($id);
        return view('news/show', ['item' => $item]);
    }

}
