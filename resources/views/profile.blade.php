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
    <h1>{{ auth()->user()->username }}</h1>
    <p>{{ auth()->user()->name }}</p>
    <p>{{ auth()->user()->email }}</p>

    <h2>Your pokemon:</h2>
    @if($pokemons != null)
        @foreach($pokemons as $pokemon)
            <hr>
            <div>
                @if($pokemon->img != null)
                    <img src="{{ $pokemon->img }}" alt="img">
                @endif
                <h2> {{ $pokemon->name }}</h2>
                @if($pokemon->type2 != null)
                    <p> {{ $pokemon->type1 }}/{{ $pokemon->type2 }}</p>
                @endif
                @if($pokemon->type2 == null)
                    <p> {{ $pokemon->type1 }}</p>
                @endif
                <p> {{ $pokemon->rgn }}</p>
                <p> {{ $pokemon->des }}</p>
                @if($pokemon->owner == auth()->user()->username || auth()->user()->adminkey == 1)
                    <form action="{{route('update.index', $pokemon->id)}}" method="post">
                        @csrf
                        <button>Edit</button>
                    </form>
                    <form action="{{route('delete.index', $pokemon->id)}}" method="post">
                        @csrf
                        <button>Delete</button>
                    </form>
                    @if($pokemon->published == 0)
                        <form action="{{route('publish.index', $pokemon->id,)}}" method="post">
                            @csrf
                            <button>Publish</button>
                        </form>
                    @else
                        <form action="{{route('unpublish.index', $pokemon->id)}}" method="post">
                            @csrf
                            <button>Unpublish</button>
                        </form>
                    @endif
                @endif
            </div>
        @endforeach
    @else
        <p>It's very empty here</p>
    @endif
</body>
</html>
