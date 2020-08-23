@extends('layouts.app')
@section('content')
    <div class="col-4 offset-2">
        <h2>Информация о пользователе</h2>
        <p>Имя: {{$user->name}}</p>
        <p>Email: {{$user->email}}</p>
        <p>Администратор: {{$user->is_admin}}</p>
        <a class="btn btn-success" href="{{route('user.edit', ['user' => $user])}}">Редактировать</a>
    </div>

@endsection
