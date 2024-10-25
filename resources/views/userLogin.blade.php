<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
</head>

<body>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif

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
</body>

</html>
