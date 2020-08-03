<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category/index', ['categories' => $this->categories]);
    }

    public function show(int $id)
    {
        $key = array_search($id, array_column($this->categories, 'id'));
        $category = $this->categories[$key];
        $news = array_filter($this->news, function($v) use ($id) {return $v['category_id'] == $id; });
        return view('category/show', ['category' => $category, 'news' => $news]);
    }
}
