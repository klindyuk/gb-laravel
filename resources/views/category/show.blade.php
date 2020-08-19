@extends('layouts.index')

@section('content')
<h2>{{$category->title}}</h2>
<ul>
@foreach ($category->news as $item)
<li>
    <a href="{{route('news', ['id' => $item->id])}}">{{$item->title}}</a>
</li>
@endforeach

</ul>
@stop
