@extends("layouts.mainLayout")

@section("title", "Movies")

@section("main-content")
    <section class="cards-container container">

        @forelse ($movies as $movie)
        <div class="movie-card">
            <h3>
                Title: {{ $movie->title }} - {{ $movie->date }}
            </h3>
            <h4>
                Original title: {{ $movie->original_title }}
            </h4>
            <h4>
                Vote: {{ $movie->vote }}
            </h4>

        </div>

        @empty
            <h4>There are no movies</h4>
        @endforelse

    </section>
   
@endsection