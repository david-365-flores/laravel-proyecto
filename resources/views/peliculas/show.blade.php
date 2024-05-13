<h1>Pelicula: {{ $pelicula->title }}</h1>
<p>ID: {{ $pelicula->id }}</p>
<p>Year: {{ $pelicula->year }}</p>

<h2>Reviews</h2>
<ul>
    @foreach ($reviews as $review)
        <li>
            <p>{{ $review->user->name }} said:</p>
            <p>{{ $review->content }}</p>
        </li>
    @endforeach
</ul>

<a href="{{ route('pelicula.index') }}">Back to peliculas</a>
