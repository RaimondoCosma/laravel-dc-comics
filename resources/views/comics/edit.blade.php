@extends('layouts.main')

@section('page-content')
    <section class="container">
        <h1 class="text-center">Modifica: {{ $comic->title }}</h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $comic->title) }}" required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    rows="3">{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Url Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                    name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo*</label>
                <input type="number" step="0.01" class="form-control  @error('price') is-invalid @enderror"
                    id="price" name="price" value="{{ old('price', $comic->price) }}" required>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data uscita*</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                    name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" required>
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipologia*</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                    value="{{ old('type', $comic->type) }}" required>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <a href="{{ route('comics.index') }}" class="btn btn-success">Torna alla Home</a>
        </form>
    </section>
@endsection
