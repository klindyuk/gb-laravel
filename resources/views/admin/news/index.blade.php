@extends('layouts.app')

@section('content')
    <div>
        @if(session()->has('success'))
            {{session()->get('success')}}
        @endif

    </div>
    <div class="col-4 offset-2">
        <h2>Управление новостями</h2>
    </div>

    <div class="col-4 offset-2">
        <a class="btn btn-success" href="{{route('news.create')}}">Добавить новость</a>
        @forelse($newsList as $news)
            <form method="post" action="{{route('news.destroy', ['news' => $news])}}">
                @csrf
                @method('DELETE')
                <a href="{{route('news.edit', ['news' => $news])}}">{{$news->title}}</a>
                <input class="btn btn-link" type="submit" value="[x]" title="Удалить">
            </form>
            @empty
            <h3>Новостей нет</h3>
        @endforelse
    </div>

    <div class="col-4 offset-2">
        {{$newsList->links()}}
    </div>


@stop
