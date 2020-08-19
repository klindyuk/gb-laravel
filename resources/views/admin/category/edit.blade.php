@extends('layouts.app')

@section('content')
<div class="col-md-4 offset-2">
    <h2>Редактировать категорию</h2>
    <form method="post" action="{{route('category.update', ['category' => $category])}}">
        @csrf
        @method('PUT')
        <input class="form-control" type="text" name="title" placeholder="Заголовок" value="{{$category->title}}">
        <input class="form-control" type="text" name="slug" placeholder="Alias" value="{{$category->slug}}">
        <textarea class="form-text" name="description" id="description" cols="60" rows="10">{{$category->description}}</textarea>

        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
    <p>
        <a href="{{route('admin.index')}}">На главную</a>
    </p>
</div>

@stop
