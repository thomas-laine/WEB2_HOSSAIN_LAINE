@extends('layouts.app')

@section('content')
    <h1>Edit projet n° {{$projet->id}}</h1>
    {!! Form::open(['route' => ['projets.update', $projet->id], 'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::select('id', $projet->id, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::text('title', $projet->title, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::text('name', $projet->name, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('adresse', $projet->adresse, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::mail('email', $projet->email, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::phone('tel', $projet->tel, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('ficheID', $projet->ficheID, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::textearea('typeProjet', $projet->typeProjet, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('contexte', $projet->contexte, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('demande', $projet->demande, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('objectifs', $projet->objectifs, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('contraintes', $projet->contraintes, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Envoyer', ['class'=> 'btn btn-block']) !!}
    </div>
    {!! Form::close() !!}
@endsection