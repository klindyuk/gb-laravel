@extends('layouts.index')

@section('content')

    <h2>Добавить комментарий</h2>
    <form action="{{route('comments.store')}}" method="post">
        @csrf
        <input type="text" name="firstname" placeholder="Ваше имя" value="{{old('firstname')}}">
        <br>
        <textarea name="text" id="text" cols="30" rows="10" placeholder="Текст">{!! old('text') !!}</textarea>
        <br>
        <input type="submit">
    </form>

@stop
