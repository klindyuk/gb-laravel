@extends('layouts.index')

@section('content')

<h2>{{$item->title}}</h2>
<p><img src="{{$item->img}}" alt="" style="width: 250px;"></p>
{!! $item->text !!}
<p>Опубликовано в категориях:
@foreach($item->categories as $category)
        <a href="{{route('category', ['category' => $category])}}">{{$category->title}}</a>
@endforeach
</p>

<p><a href="{{route('index')}}">На главную</a></p>

@stop
