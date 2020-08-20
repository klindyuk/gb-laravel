@extends('layouts.app')

@section('content')
<div class="col-md-4 offset-2">

<h2>Добавить новость</h2>
<form action="{{route('news.store')}}" method="post">
    @csrf
    <input class="form-control" type="text" name="title" placeholder="Заголовок" value="{{old('title')}}">
    @error('title')
    <div class="alert alert-danger">
        @foreach($errors->get('title') as $e)
            <p>{{$e}}</p>
        @endforeach
    </div>
    @enderror
    <br>
    <input class="form-control" type="text" name="slug" placeholder="Alias" value="{{old('slug')}}">
    @error('slug')
    <div class="alert alert-danger">
        @foreach($errors->get('slug') as $e)
            <p>{{$e}}</p>
        @endforeach
    </div>
    @enderror
    <br>
    <input class="form-control" type="text" name="img" placeholder="Ссылка на изображение" value="{{old('img')}}">
    @error('img')
    <div class="alert alert-danger">
        @foreach($errors->get('img') as $e)
            <p>{{$e}}</p>
        @endforeach
    </div>
    @enderror
    <br>
    <textarea class="form-control" name="text" id="text" cols="30" rows="10">{!! old('text') !!}</textarea>
    @error('text')
    <div class="alert alert-danger">
        @foreach($errors->get('text') as $e)
            <p>{{$e}}</p>
        @endforeach
    </div>
    @enderror
    <br>
    <input type="submit">
</form>
</div>
@stop
