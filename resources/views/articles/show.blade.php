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