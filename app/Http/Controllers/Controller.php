<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $categories = [
        [
            'id' => 1,
            'title' => 'Категория 1'
        ],
        [
            'id' => 2,
            'title' => 'Категория 2'
        ],
        [
            'id' => 3,
            'title' => 'Категория 3'
        ],
        [
            'id' => 4,
            'title' => 'Категория 4'
        ],
        [
            'id' => 5,
            'title' => 'Категория 5'
        ]
    ];

    protected $news = [
        [
            'id' => 1,
            'category_id' => 1,
            'title' => 'Новость 1',
            'text' => 'Текст новости 1'
        ],
        [
            'id' => 2,
            'category_id' => 1,
            'title' => 'Новость 2',
            'text' => 'Текст новости 2'
        ],
        [
            'id' => 3,
            'category_id' => 1,
            'title' => 'Новость 3',
            'text' => 'Текст новости 3'
        ],
        [
            'id' => 4,
            'category_id' => 1,
            'title' => 'Новость 4',
            'text' => 'Текст новости 4'
        ],
        [
            'id' => 5,
            'category_id' => 1,
            'title' => 'Новость 5',
            'text' => 'Текст новости 5'
        ],
        [
            'id' => 6,
            'category_id' => 2,
            'title' => 'Новость 6',
            'text' => 'Текст новости 6'
        ],
        [
            'id' => 7,
            'category_id' => 2,
            'title' => 'Новость 7',
            'text' => 'Текст новости 7'
        ],
        [
            'id' => 8,
            'category_id' => 2,
            'title' => 'Новость 8',
            'text' => 'Текст новости 8'
        ],
        [
            'id' => 9,
            'category_id' => 2,
            'title' => 'Новость 9',
            'text' => 'Текст новости 9'
        ],
        [
            'id' => 10,
            'category_id' => 2,
            'title' => 'Новость 10',
            'text' => 'Текст новости 10'
        ],
        [
            'id' => 11,
            'category_id' => 3,
            'title' => 'Новость 11',
            'text' => 'Текст новости 11'
        ],
        [
            'id' => 12,
            'category_id' => 3,
            'title' => 'Новость 12',
            'text' => 'Текст новости 12'
        ],
        [
            'id' => 13,
            'category_id' => 3,
            'title' => 'Новость 13',
            'text' => 'Текст новости 13'
        ],
        [
            'id' => 14,
            'category_id' => 3,
            'title' => 'Новость 14',
            'text' => 'Текст новости 14'
        ],
        [
            'id' => 15,
            'category_id' => 3,
            'title' => 'Новость 15',
            'text' => 'Текст новости 15'
        ],
        [
            'id' => 16,
            'category_id' => 4,
            'title' => 'Новость 16',
            'text' => 'Текст новости 16'
        ],
        [
            'id' => 17,
            'category_id' => 4,
            'title' => 'Новость 17',
            'text' => 'Текст новости 17'
        ],
        [
            'id' => 18,
            'category_id' => 4,
            'title' => 'Новость 18',
            'text' => 'Текст новости 18'
        ],
        [
            'id' => 19,
            'category_id' => 4,
            'title' => 'Новость 19',
            'text' => 'Текст новости 19'
        ],
        [
            'id' => 20,
            'category_id' => 4,
            'title' => 'Новость 20',
            'text' => 'Текст новости 20'
        ],
        [
            'id' => 21,
            'category_id' => 5,
            'title' => 'Новость 21',
            'text' => 'Текст новости 21'
        ],
        [
            'id' => 22,
            'category_id' => 5,
            'title' => 'Новость 22',
            'text' => 'Текст новости 22'
        ],
        [
            'id' => 23,
            'category_id' => 5,
            'title' => 'Новость 23',
            'text' => 'Текст новости 23'
        ],
        [
            'id' => 24,
            'category_id' => 5,
            'title' => 'Новость 24',
            'text' => 'Текст новости 24'
        ],
        [
            'id' => 25,
            'category_id' => 5,
            'title' => 'Новость 25',
            'text' => 'Текст новости 25'
        ],
    ];

}
