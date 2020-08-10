@extends('layouts.index')

@section('content')
<h2>Главная страница</h2>
<p><a href="{{route('category')}}">К списку категорий</a></p>
    <p><a href="{{route('comments.create')}}">Добавить комментарий</a></p>

@stop
