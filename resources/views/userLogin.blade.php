@extends('layout.layout')

@section('content')
    <h1>Login Form</h1>
    <form method="POST" action="{{ route('userLogin') }}">
        {{ csrf_field() }}
        <p>
            Email: <input type="email" name="email" placeholder="email">
        </p>
        <p>
            Password: <input type="password" name="password" placeholder="Password">
        </p>
        <p> <input type="submit" value="Login"> </p>
        <a href="{{ route('showRegistration') }}">Register </a>
    </form>
@endsection