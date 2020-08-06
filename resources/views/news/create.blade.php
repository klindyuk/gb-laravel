@extends('layouts.index')

@section('content')

<h2>Добавить новость</h2>
<form action="#">
<input type="text" name="title" placeholder="Заголовок">
<br>
<textarea name="text" id="text" cols="30" rows="10"></textarea>
<br>
<input type="submit">
</form>

@stop