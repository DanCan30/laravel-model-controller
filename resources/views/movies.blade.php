@extends("layouts.mainLayout")

@section("title", "Movies")

@section("main-content")
    <section class="cards-container container">

        @forelse ($movies as $movie)
        <div class="movie-card">

            <div class="movie-cover-container">
                <img src="{{ $movie->cover }}" alt="Movie cover placeholder">
            </div>
            <h3>
                {{ $movie->title }}
            </h3>
            <h4>
                Original title: {{ $movie->original_title }}
            </h4>
            <h4>
                Year: {{ $movie->date }}
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