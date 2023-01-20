@extends('layouts.main')

@section('page-content')
    <section class="container">
        <h1 class="text-center">Modifica: {{ $comic->title }}</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ $comic->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Url Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo*</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price"
                    value="{{ $comic->price }}" required>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data uscita*</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipologia*</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="{{ route('comics.index') }}" class="btn btn-success">Torna alla Home</a>
        </form>
    </section>
@endsection
