@extends('layout.layout')
@section('content')
    <h1>Registeration Form</h1>
    <form method="POST" action="{{ route('registration') }}">
        {{ csrf_field() }}
        <p>
            Name: <input type="text" name="name" placeholder="name">
        </p>
        <p>
            Email: <input type="email" name="email" placeholder="email">
        </p>
        <p>
            Password: <input type="password" name="password" placeholder="Password">
        </p>
        <p> <input type="submit" value="Register"> </p>
        <a href="{{ route('showLogin') }}">LOGIN </a>
    </form>
@endsection
