<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', ['newsList' => News::paginate(10)]);
    }
}
