<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public function getAll() {
        return \DB::select("select id, title, text from news");
    }

    public function getById(int $id) {
        return \DB::selectOne("select id, title, text from news where id = :id",
            ['id' => $id]);
    }

    public function getByCategoryId(int $id) {
        return \DB::select("select news.id, news.title, news.text from news join categories_to_news on news.id = categories_to_news.news_id where categories_to_news.category_id = :id",
            ['id' => $id]);
    }
}
