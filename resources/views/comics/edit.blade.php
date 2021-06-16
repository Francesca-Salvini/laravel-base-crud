@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <h1>Modifica fumetto: {{ $comic->name }}</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

           <!-- Edit form -->
            <form action=" {{ route('comics.update', [ 
                'comic' => $comic->id 
            ]) }}" method="post">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $comic->name }}">
                </div>

                <div class="form-group">
                    <label for="description">Descrizione</label>
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ $comic->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="type">Genere</label>
                    <input type="text" class="form-control" name="genre" id="genre" value="{{ $comic->genre }}">
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="text" class="form-control" name="image" id="image" value="{{ $comic->image }}">
                    <img style="max-height:150px" src="{{ $comic->image }}" alt="">
                </div>


                <input type="submit" class="btn btn-primary" value="Modifica">
            </form>
            <!-- End Edit form -->
        </div>
    </section>
@endsection