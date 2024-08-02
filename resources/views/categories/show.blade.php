@extends('layout')

@section('content')
<div class="container">
    <h1>Details de la Catégorie</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $category->name }}</h5>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Retour</a>
        </div>
    </div>
</div>
@endsection
