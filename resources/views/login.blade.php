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
<a href="/">return</a>
<h1>register</h1>
<form method="POST" action="{{route('login.index')}}">
    @csrf
    <div>
        <label for="email"> E-mail </label>
        <input class="" type="email" name="email" id="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password"> Password </label>
        <input class="" type="password" name="password" id="password" required>
    </div>

    @error('password')
    <p>{{ $message }}</p>
    @enderror
    @error('email')
    <p>{{ $message }}</p>
    @enderror
    <div>
        <button type="submit"> Submit </button>
    </div>

</form>
</body>
</html>
