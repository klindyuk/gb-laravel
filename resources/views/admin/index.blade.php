@extends('layouts.app')
@section('content')
    <div class="col-4 offset-2">
        <h2>Панель администратора</h2>
        <p><a href="{{route('category.index')}}">Категории</a></p>
        <p><a href="{{route('news.index')}}">Новости</a></p>
    </div>

@endsection
