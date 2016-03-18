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

<<<<<<< HEAD
    <form action="{{route('articles.destroy', $post->id)}}" method="POST">
        <button class="btn btn-danger">Supprimer</button>
    </form>

@endsection
=======

    <form action="{{route('articles.destroy', $article->id)}}" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input value="supprimer" type="submit" class="form-control">
    </form>

    <div class="panel-heading">Commentaires
        {!! Form::open(['url' => action('CommentsController@store')])  !!}
        {{ csrf_field() }}
        {!! Form::text('commentaire') !!}
    </div>


@endsection
>>>>>>> 42a49bc865f8cd2c32bbe1c3b3ba6f2e78e72c2b
