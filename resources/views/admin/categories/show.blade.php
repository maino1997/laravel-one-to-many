@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Nome Categoria: {{ $category->name }}</h2>
                <h4>Colore: {{ $category->color }}</h4>
            </div>
            <a class="btn btn-warning mr-3" href="{{ route('admin.categories.edit', $category->id) }}">Modifica</a>
            <a class="btn btn-secondary" href="{{ route('admin.categories.index') }}">Indietro</a>
        </div>
    </div>
@endsection
