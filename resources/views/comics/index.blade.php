@extends('layouts.main')

@section('page-content')
    <section class="container position-relative">
        <h1 class="text-center">Lista Comics</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Disponibile dal</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Dettagli</th>
                    <th scope="col">Modifica</th>
                    <th scope="col">Cancella</th>
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
                        <td><a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Edit</a></td>
                        <td>
                            <form
                                onsubmit="return confirm('Premendo \'Si\' cancellerai definivamente l\'elemento dalla pagina. Continuare?')"
                                action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('comics.create') }}">Aggiungi fumetto</a>
    </section>
@endsection
