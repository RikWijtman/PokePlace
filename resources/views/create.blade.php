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
    <h1>Add pokemon:</h1>

    <form action="{{route('create.index')}}" method="POST">
        @csrf
        <div>
            <label for="name"> Name </label>
            <input class="" type="text" name="name" id="name" value="{{ old('name') }}">
            @error('name')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="type1"> Type - 1 </label>
            <input class="" type="text" name="type1" id="type1" value="{{ old('type1') }}">
            @error('type1')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="type2"> Type - 2 </label>
            <input class="" type="text" name="type2" id="type2" value="{{ old('type2') }}">
            @error('type2')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="img"> Image </label>
            <input class="" type="file" name="img" id="img" value="{{ old('img') }}">
            @error('img')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="rgn"> Region </label>
            <input class="" type="text" name="rgn" id="rgn" value="{{ old('rgn') }}">
            @error('rgn')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="des"> Description </label>
            <input class="" type="text" name="des" id="des" value="{{ old('des') }}">
            @error('des')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Add</button>
    </form>
</body>
</html>
