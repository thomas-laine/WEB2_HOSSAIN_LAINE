@extends('layouts.app')

@section('content')
    <h1>Formulaire de contact </h1>

    {!! Form::open(['route' => 'projets.store', 'method' => 'POST']) !!}
    <div class="form-group">
        <h3>Titre:</h3><br/>{!! Form::text('title', null, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        <h3>Nom du commanditaire:</h3><br/>{!! Form::text('name', null, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        <h3>Adresse:</h3><br/>{!! Form::text('adresse', null, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        <h3>E-mail:</h3><br/>{!! Form::text('email', null, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        <h3>Telephone:</h3><br/>{!! Form::text('tel', null, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        <h3>Fiche d'identité:</h3><br/>{!! Form::text('ficheID', null, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        <h3>Type de projet:</h3><br/>{!! Form::text('typeProjet', null, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        <h3>Contexte:</h3><br/>{!! Form::text('contexte', null, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        <h3>Demande:</h3><br/>{!! Form::text('demande', null, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        <h3>Objectifs:</h3><br/>{!! Form::text('objectifs', null, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        <h3>Contraintes:</h3><br/>{!! Form::text('contraintes', null, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Envoyer', ['class'=> 'btn btn-block']) !!}
    </div>
    {!! Form::close() !!}
    @if($errors)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

@endsection