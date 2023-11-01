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
    <h1>Pokepedia</h1>

    <form action="{{route('search.index')}}" method="post">
        @csrf
        <div>
            <label for="search">Search: </label>
            <input type="text" id="search" name="search">
        </div>
        <div>
            <label for="option">Option: </label>
            <select name="option" id="option">
                <option value="name">Name</option>
                <option value="type1">Type1</option>
                <option value="type2">Type2</option>
                <option value="rgn">Region</option>
            </select>
        </div>
    </form>

    @if($pokemons != null)
        @foreach($pokemons as $pokemon)
            @if($pokemon->published == 1)
            <hr>
            <div>
                @if($pokemon->img != null)
                    <img src="{{ asset($pokemon->img) }}" alt="img">
                @endif
                @if ( $pokemon->name  != null)
                <h2> {{ $pokemon->name }}</h2>
                    @endif
                @if($pokemon->type2 != null)
                    <p>Type: {{ $pokemon->type1 }}/{{ $pokemon->type2 }}</p>
                @endif
                @if($pokemon->type2 == null)
                    <p>Type: {{ $pokemon->type1 }}</p>
                @endif
                @if ( $pokemon->rgn  != null)
                <p>Region: {{ $pokemon->rgn }}</p>
                @endif
                    @if ( $pokemon->des  != null)
                <p>Description: {{ $pokemon->des }}</p>
                    @endif
                    <p>Owner: {{ $pokemon->owner }}</p>
                @if($pokemon->owner == auth()->user()->username || auth()->user()->adminkey == 1)
                    <form action="{{route('update.index', $pokemon->id)}}" method="post">
                        @csrf
                        <button>Edit</button>
                    </form>
                    <form action="{{route('delete.index', $pokemon->id)}}" method="post">
                        @csrf
                        <button>Delete</button>
                    </form>
                @endif
            </div>
            @endif
        @endforeach
    @else
        <p>It's very empty here</p>
    @endif
</body>
</html>
