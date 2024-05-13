<h1>Nueva review para {{ $pelicula->title }}</h1>
<form action="{{ route('review.store') }}" method="POST">
        @csrf
        <label for="calificacion">Calificación:</label>
        <input name="calificacion">
        <br>
        <label for="review">Review</label><br>
        <textarea  name="review" cols="30" rows="5">{{ old('review') }}</textarea>
        <br>
        <button type="submit">Guardar</button>
    </form>
    