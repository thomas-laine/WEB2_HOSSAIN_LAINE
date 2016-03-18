@extends('layouts.app')

@section('content')
    <div class="panel-heading">
        Article n° {{ $article->id }} - <a href="{{route('articles.edit', $article->id)}}">Editer</a>
    </div>
    <div class="panel-body">
        <h2>{{ $article->title }}</h2>
        <h3>Auteur: {{ $article->user->name }}</h3>
        <p>{{ $article->description }}</p>
    </div>

    <form action="{{route('articles.destroy', $post->id)}}" method="POST">
        <button class="btn btn-danger">Supprimer</button>
    </form>

@endsection
