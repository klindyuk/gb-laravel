@extends('layouts.index')

@section('content')
<h2>Главная страница</h2>
@foreach($newsList as $news)
    <h3>{{$news->title}}</h3>
    <p><a href="{{route('news', ['id' => $news->id])}}">{!! $news->text !!}</a></p>
@endforeach
<p>{{$newsList->links()}}</p>
    <p><a href="{{route('comments.create')}}">Добавить комментарий</a></p>

@stop
