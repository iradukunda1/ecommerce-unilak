<!DOCTYPE html>
<html lang="en">

<head>
    <title>Layout</title>
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
    @auth
        <h1>Welcome back: {{auth()->user()->name }}</h1>    
        <p> <a href="{{ route('logout') }}">Logout</a> </p>
    @endauth
     @yield('content')
    
</body>

</html>
