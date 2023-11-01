<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to PokePlace</h1>
    @guest()
        <a href="/register"> Register! </a>
        <a href="/login"> Login! </a>
    @else
        <p>Welcome back {{ auth()->user()->username }}!</p>
        <div>
            <a href="{{route('create.index')}}"> Add your pokemon! </a>
        </div>
        @if(auth()->user()->valid == 1)
        <div>
            <a href="{{route('pokemon.index')}}"> View pokemon! </a>
        </div>
        @endif
        <div>
            <a href="{{route('profile.index')}}"> Profile </a>
        </div>
        <form method="POST" action="{{route('logout.index')}}">
            @csrf
            <button>Logout</button>
        </form>


    @endguest
</body>
</html>
