@extends('layouts.app')

@section('content')
<div class="col-md-4 offset-2">


<h2>Добавить новость</h2>
<form action="{{route('admin.news.store')}}" method="post">
    @csrf
<input class="form-control" type="number" name="id" placeholder="id" value="{{old('id')}}">
<br>
    <input class="form-control" type="number" name="category_id" placeholder="category" value="{{old('category_id')}}">
    <br>
<input class="form-control" type="text" name="title" placeholder="Заголовок" value="{{old('title')}}">
<br>
<textarea name="text" id="text" cols="30" rows="10">{!! old('text') !!}</textarea>
<br>
<input type="submit">
</form>
</div>
@stop
