@extends('layouts.index')

@section('content')
<h2><?=$category['title']?></h2>
<ul>
@foreach ($news as $item)
<li>
    <a href="{{route('news.show', ['id' => $item['id']])}}">{{$item['title']}}</a>
</li>
@endforeach

</ul>
<p><a href="<?=route('news.create');?>">Добавить новость</a></p>
@stop