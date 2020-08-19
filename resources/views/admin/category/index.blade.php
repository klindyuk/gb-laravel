@extends('layouts.app')

@section('content')
    <div>
        @if(session()->has('success'))
            {{session()->get('success')}}
        @endif

    </div>
    <div class="col-4 offset-2">
        <h2>Управление категориями</h2>
    </div>

    <div class="col-4 offset-2">
        <a class="btn btn-success" href="{{route('category.create')}}">Добавить категорию</a>
        @forelse($categoryList as $category)


            <form method="post" action="{{route('category.destroy', ['category' => $category])}}">
                @csrf
                @method('DELETE')
                <a href="{{route('category.edit', ['category' => $category])}}">{{$category->title}}</a>
                <input class="btn btn-link" type="submit" value="[x]" title="Удалить">
            </form>

        @empty
            <h3>Список пуст</h3>
        @endforelse
    </div>

    <div class="col-4 offset-2">
        {{$categoryList->links()}}
    </div>


@stop
