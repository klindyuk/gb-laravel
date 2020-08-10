<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStoreRequest;
use Illuminate\Http\Request;

class NewsController extends \App\Http\Controllers\Controller
{
    public function create() {
        return view('admin.news.create', ['categories' => $this->categories]);
    }
    public function edit(int $id) {
        $key = array_search($id, array_column($this->news, 'id'));
        $item = $this->news[$key];
        return view('admin.news.edit', ['item' => $item, 'categories' => $this->categories]);
    }
    public function store(NewsStoreRequest $request) {
        $data = $request->only(['id', 'category_id', 'title', 'text']);
        $saveFile = function(array $data) {
            $responseData = [];
            $fileNews = storage_path('app/news.txt');
            if (file_exists($fileNews)) {
                $file = file_get_contents($fileNews);
                $responseData = json_decode($file, true);
            }
            $responseData[] = $data;
            file_put_contents($fileNews, json_encode($responseData, JSON_UNESCAPED_UNICODE));
        };

        $saveFile($data);
        return redirect()->route('index');
    }
}
