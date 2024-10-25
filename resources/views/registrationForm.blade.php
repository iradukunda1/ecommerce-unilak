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
</body>

</html>
