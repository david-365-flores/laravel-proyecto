<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Pelicula') }}
        </h2>
    </x-slot>

    <div class="container-fluid py-12">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form method="POST" action="{{ route('pelicula.update', ['pelicula' => $pelicula->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $pelicula->title) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="year">Year</label>
                            <input type="number" name="year" id="year" class="form-control" value="{{ old('year', $pelicula->year) }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Pelicula</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>