@extends('layouts.index')

@section('content')
<h2>Список категорий</h2>
<ul>
@foreach(getCategories() as $cat)
<li>
    <a href="<?=route('category.show', ['id' => $cat->id]); ?>"><?=$cat->title;?></a>
</li>
@endforeach
</ul>
<a href="<?=route('index'); ?>">Вернуться на главную</a>
@stop
