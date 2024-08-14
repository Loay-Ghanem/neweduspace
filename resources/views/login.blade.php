<title>edu space log in</title>
@extends('layout')
@section('contant')
<div class="content">
    <div class="mid-section">
        <h1> login page <h1>
    </div>
</div>
<form action="{{route('login')}}" method="POST">
    <div>
        <label for="user_name">name</label>
        <input id="user_name" name="user_name" type="text">
    </div>
    <div>
        <label for="password">name</label>
        <input id="password" name="password" type="text">
    </div>
@endsection
