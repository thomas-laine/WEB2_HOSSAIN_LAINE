@extends('layouts.app')

@section('content')
    <div class="panel-heading">
        Article n° {{ $projet->id }} - <a href="{{route('projets.edit', $projet->id)}}">Editer</a>
    </div>
    <div class="panel-body">
        <h3>Nom du projet:</h3><br/><p>{{ $projet->title }}</p>
        <h3>Nom du commanditaire:</h3><br/><p>{{ $projet->name }}</p>
        <h3>Adresse:</h3><br/><p>{{ $projet->adresse }}</p>
        <h3>E-mail du commanditaire:</h3><br/><p>{{ $projet->email }}</p>
        <h3>Telephone du commanditaire:</h3><br/><p>{{ $projet->tel }}</p>
        <h3>Fiche d'identité</h3><br/><p>{{ $projet->ficheID }}</p>
        <h3>Type de projet:</h3><br/><p>{{ $projet->typeProjet }}</p>
        <h3>Contexte:</h3><br/><p>{{ $projet->contexte }}</p>
        <h3>Demande:</h3><br/><p>{{ $projet->demande }}</p>
        <h3>Objectifs:</h3><br/><p>{{ $projet->objectifs }}</p>
        <h3>Contraintes:</h3><br/><p>{{ $projet->contraintes }}</p>
    </div>

    <form action="{{route('projets.destroy', $projet->id)}}" method="POST">
        <button class="btn btn-danger">Supprimer</button>
    </form>

@endsection