@extends('layouts.app')
@section('content')
    <div class="col-4 offset-2">
        @if(session()->has('success'))
            <p class="alert alert-success">{{session()->get('success')}}</p>
        @endif
        <h2>Управление пользователями</h2>
        <ul>
            @foreach($userList as $user)
                <li>
                    <form method="post" action="{{route('user.destroy', ['user' => $user])}}">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('user.show', ['user' => $user])}}">{{$user->name}} ({{$user->email}})</a>
                        <input class="btn btn-link" type="submit" value="[x]" title="Удалить">
                    </form>
                </li>
            @endforeach
        </ul>
    </div>

@endsection
