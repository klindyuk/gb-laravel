@extends('layouts.app')
@section('content')
    <div class="col-4 offset-2">
        <h2>Изменить данные пользователя</h2>
        <form method="post" action="{{route('user.update', ['user' => $user])}}">
            @csrf
            @method('PUT')
            <input class="form-control" type="text" name="name" placeholder="Имя" value="{{$user->name}}"><br>
            <input class="form-control" type="email" name="email" placeholder="email" value="{{$user->email}}"><br>
            <label for="is_admin" class="form-check-label">Администратор</label>
                <input class="form-check-inline" type="checkbox" id="is_admin" name="is_admin" @if($user->is_admin) checked @endif"><br>
            <input type="submit" class="btn btn-success" value="Сохранить">

        </form>
    </div>

@endsection
