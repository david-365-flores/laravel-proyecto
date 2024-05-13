<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Review') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <h1>Nueva review</h1>
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
            </div>
        </div>
    </div>
</x-app-layout>
    