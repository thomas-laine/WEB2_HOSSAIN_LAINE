@extends('layouts.app')

@section('content')
    <div class="panel-heading">Les projets</div>
    <div class="panel-body">
        @foreach($projets as $projet)
            <h2>{{ $projet->title  }}</h2>
            <h3>{{ $projet->name}}</h3>
            <p>{{ $projet->ficheID}}</p>
            <p>{{ $projet->demande}}</p>
            <a href="{{route('projets.show', $projet->id)}}">
                <button class="btn">
                    Voir le projet
                </button>
            </a>
            @if(Auth::check() && Auth::user()->id == $projet->user_id)
                <a href="{{route('projets.edit', $projet->id)}}">
                    <button class="btn">
                        Editer le projet
                    </button>
                </a>
                <form action="{{route('projets.destroy', $projet->id)}}" method="POST">
                    <button class="btn btn-danger">Supprimer</button>
                </form>
            @endif
        @endforeach
    </div>
@endsection