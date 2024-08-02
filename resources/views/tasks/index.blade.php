@extends('layout')

@section('content')
<div class="container">
    <br>
    <form method="GET" action="{{ route('tasks.index') }}" class="mb-4">
        <div class="form-row">
            <div class="col">
                <label for="category">Categories</label>
                <select name="category" id="category" class="form-control">
                    <option value="">Tout</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="col">
                <label for="search">Titre</label>
                <input type="text" name="search" id="search" class="form-control" placeholder="Rechercher la tâche" value="{{ request('search') }}">
            </div>
            <div class="col">
                <label for="submit">Filtrer</label>
                <button type="submit" class="btn btn-primary form-control">Filtrer</button>
            </div>
        </div>
    </form>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Creer une Tâche</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Statut</th>
                <th>Categorie</th>
                <th>Date de Réalisation de la tache</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->category->name }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td>
                        <a href="{{ route('tasks.show', $task) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Mise à jours</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
