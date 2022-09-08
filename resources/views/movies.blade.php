@extends("layouts.mainLayout")

@section("main-content")

    @forelse ($movies as $movie)
    
        {{ $movie->title }}

    @empty
        schiatta
    @endforelse

@endsection