@extends('layouts.main')

@section('page-content')
    <section class="container">
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla Home</a>
            </div>
        </div>
    </section>
@endsection
