<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show(int $id)
    {
        $key = array_search($id, array_column($this->news, 'id'));
        $item = $this->news[$key];
        return view('news/show', ['item' => $item, 'categories' => $this->categories]);
    }

}
