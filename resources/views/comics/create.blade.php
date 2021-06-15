@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <h1>Crea un nuovo fumetto</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Create form --}}
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
                </div>

                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="type">Genere</label>
                    <input type="text" class="form-control" name="genre" id="genre" value="{{ old('genre') }}">
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" name="image" id="image" value="{{ old('image') }}">
                </div>

                

                <input type="submit" class="btn btn-primary" value="Salva nuovo fumetto">
            </form>
            {{-- End create form --}}
        </div>
    </section>
@endsection