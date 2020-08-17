@extends('layouts.index')

@section('content')

<h2>{{$item->title}}</h2>
{!! $item->text !!}

<p><a href="{{route('admin.news.edit', ['id' => $item->id])}}">Редактировать новость</a></p>
<p><a href="{{route('index')}}">На главную</a></p>

@stop
