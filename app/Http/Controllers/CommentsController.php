<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function create() {
        return view('comments.create', ['categories' => $this->categories]);
    }
    public function store(Request $request) {
        $data = $request->only(['firstname', 'text']);
        $saveFile = function(array $data) {
            $responseData = [];
            $fileComments = storage_path('app/comments.txt');
            if (file_exists($fileComments)) {
                $file = file_get_contents($fileComments);
                $responseData = json_decode($file, true);
            }
            $responseData[] = $data;
            file_put_contents($fileComments, json_encode($responseData, JSON_UNESCAPED_UNICODE));
        };

        $saveFile($data);
        return redirect()->route('index');
    }
}
