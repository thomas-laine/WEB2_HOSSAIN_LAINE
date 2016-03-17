@extends('layouts.app')

@section('content')
    <h1>Formulaire de contact </h1>

    {!! Form::open(['route' => 'articles.store', 'method' => 'POST']) !!}
    <div class="form-group">
        {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::text('title', null, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('description', null, ['class' => 'form-control'])  !!}
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