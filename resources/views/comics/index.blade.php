@extends('layouts.main')

@section('page-content')
    <section class="container">
        <h1 class="text-center">Lista Comics</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Disponibile dal</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">link</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->price }}€</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success">Vai</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('comics.create') }}">Aggiungi fumetto</a>
    </section>
@endsection
