@extends('layouts.app')

@section('content')
<div class="col-md-4 offset-2">


<h2>Добавить категорию</h2>
<form action="{{route('category.store')}}" method="post">
    @csrf
    <input class="form-control" type="text" name="title" placeholder="Заголовок" value="{{old('title')}}"><br>
    <input class="form-control" type="text" name="slug" placeholder="Alias" value="{{old('slug')}}"><br>
    <textarea class="form-control" name="description" id="description" cols="30" rows="10">{!! old('text') !!}</textarea>
<input type="submit">
</form>
</div>
@stop
