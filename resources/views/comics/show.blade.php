  
@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <h1>Dettagli fumetto: {{ $comic->name }}</h1>

            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $comic->image }}" alt="{{ $comic->name }}">
                <div class="card-body">
                  
                    @if($comic->description)
                    <p class="card-text">{{ $comic->description }}</p>
                    @endif

                    <div class="card-text">Genere: {{ $comic->genre }}</div>

                </div>
            </div>
        </div>
    </section>
@endsection