@extends('layouts.app')

@section('content')
<div class="col-md-4 offset-2">
    <h2>Редактировать новость</h2>
    <form method="post" action="{{route('news.update', ['news' => $news])}}">
        @csrf
        @method('PUT')
        <input class="form-control" type="text" name="img" placeholder="Ссылка на изображение" value="{{$news->img}}">
        @error('img')
        <div class="alert alert-danger">
            @foreach($errors->get('img') as $e)
                <p>{{$e}}</p>
            @endforeach
        </div>
        @enderror
        <input class="form-control" type="text" name="title" placeholder="Заголовок" value="{{$news->title}}">
        @error('title')
        <div class="alert alert-danger">
            @foreach($errors->get('title') as $e)
                <p>{{$e}}</p>
            @endforeach
        </div>
        @enderror
        <input class="form-control" type="text" name="slug" placeholder="Alias" value="{{$news->slug}}">
        @error('slug')
        <div class="alert alert-danger">
            @foreach($errors->get('slug') as $e)
                <p>{{$e}}</p>
            @endforeach
        </div>
        @enderror
        <textarea class="form-text" name="text" id="text" cols="60" rows="10">{{$news->text}}</textarea>
        @error('text')
        <div class="alert alert-danger">
            @foreach($errors->get('text') as $e)
                <p>{{$e}}</p>
            @endforeach
        </div>
        @enderror

        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
    <p>
        <a href="{{route('index')}}">На главную</a>
    </p>
</div>

@stop
