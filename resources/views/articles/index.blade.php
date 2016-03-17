@extends('layouts.app')

@section('content')
    <div class="panel-heading">Les articles</div>
    <div class="panel-body">
        @foreach($posts as $post)
            <h2>{{ $post->title  }}</h2>
            <p>{{ $post->description}}</p>
            <a href="{{route('articles.show', $post->id)}}">
                <button class="btn">
                    Voir l'article
                </button>
            </a>
            @if(Auth::check() && Auth::user()->id == $post->user_id)
                <a href="{{route('articles.edit', $post->id)}}">
                    <button class="btn">
                        Editer l'article
                    </button>
                </a>
                <form action="{{route('articles.destroy', $post->id)}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger">Supprimer</button>
                </form>
            @endif
        @endforeach
    </div>
@endsection