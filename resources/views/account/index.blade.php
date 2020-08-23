@extends('layouts.app')
@section('content')
<h1>Привет, {{$user->name}}</h1>
    @if ($user->is_admin)
        <a href="{{route('admin.index')}}">Админка</a>
    @endif

@endsection
