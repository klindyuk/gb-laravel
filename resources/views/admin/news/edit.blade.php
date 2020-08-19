@extends('layouts.app')

@section('content')
<div class="col-md-4 offset-2">
    <h2>Редактировать новость</h2>
    <form method="post" action="{{route('news.update', ['news' => $news])}}">
        @csrf
        @method('PUT')
        <input class="form-control" type="text" name="img" placeholder="Ссылка на изображение" value="{{$news->img}}">
        <input class="form-control" type="text" name="title" placeholder="Заголовок" value="{{$news->title}}">
        <input class="form-control" type="text" name="slug" placeholder="Alias" value="{{$news->slug}}">
        <textarea class="form-text" name="text" id="text" cols="60" rows="10">{{$news->text}}</textarea>

        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
    <p>
        <a href="{{route('index')}}">На главную</a>
    </p>
</div>

@stop
