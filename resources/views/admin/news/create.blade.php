@extends('layouts.index')

@section('content')

<h2>Добавить новость</h2>
<form action="{{route('admin.news.store')}}" method="post">
    @csrf
<input type="number" name="id" placeholder="id" value="{{old('id')}}">
<br>
    <input type="number" name="category_id" placeholder="category" value="{{old('category_id')}}">
    <br>
<input type="text" name="title" placeholder="Заголовок" value="{{old('title')}}">
<br>
<textarea name="text" id="text" cols="30" rows="10">{!! old('text') !!}</textarea>
<br>
<input type="submit">
</form>

@stop
