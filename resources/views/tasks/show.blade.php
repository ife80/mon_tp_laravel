@extends('layout')

@section('content')
<div class="container">
    <h1>Details de la Tâche</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><span style="text-decoration: underline;">Titre :</span> {{ $task->title }}</h5>
            <p class="card-text"><span style="text-decoration: underline;">Description :</span> {{ $task->description }}</p>
            <p><span style="text-decoration: underline;">Status:</span> {{ $task->status }}</p>
            <p><span style="text-decoration: underline;">Date de Réalisation de la tâche:</span> {{ $task->due_date }}</p>
            <p><span style="text-decoration: underline;">Categorie:</span> {{ $task->category->name }}</p>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Retourner à la liste des Tâches</a>
        </div>
    </div>
</div>
@endsection
