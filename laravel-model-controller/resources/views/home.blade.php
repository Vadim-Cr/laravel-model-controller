@extends("layouts.main-layout")
@section("content")

    <h1>BEST MOVIES</h1>

    <ul>
        @foreach ($movies as $movie)
        <li class="border bg-secondary text-light">
            {{$movie -> title}} <br> 
            {{$movie -> original_title}} <br> 
            {{$movie -> vote}}
        </li>
        <!-- <li>
            {{$movie -> original_title}}
        </li> -->
        @endforeach
    </ul>

@endsection