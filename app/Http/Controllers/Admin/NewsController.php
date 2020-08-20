<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $newsList = News::paginate(10);
        return view('admin.news.index', ['newsList' => $newsList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img' => 'sometimes|url',
            'title' => 'required|string|min:5|max:255',
            'text' => 'required|string'
        ]);
        $data = $request->only('title', 'slug', 'img', 'text');
        if (!$data['slug']) {
            $data['slug'] = Str::slug($data['title'], '-');
        }
        $news = News::create($data);
        if ($news) {
            return redirect()->route('news.index')->with('success', 'Новость добавлена');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(News $news)
    {

        return view('admin.news.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'img' => 'sometimes|url',
            'title' => 'required|string|min:5|max:255',
            'text' => 'required|string'
        ]);
        $news->title = $request->input('title');
        $news->slug = $request->input('slug');
        $news->img = $request->input('img');
        $news->text = $request->input('text');

        if ($news->save()) {
            return redirect()->route('news.index')->with('success', 'Новость обновлена');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        if ($news->delete()) {
            return redirect()->route('news.index')->with('success', 'Новость удалена');
        }
        return back();
    }
}
