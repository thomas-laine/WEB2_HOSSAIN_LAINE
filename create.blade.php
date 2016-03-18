@extends('layouts.app')

@section('content')
    <h1>Formulaire de contact </h1>

    {!! Form::open(array('url' => route('contact.store'), 'method' => 'POST')) !!}
    <div class="form-group">
        <p>{!! Form::email('email', Auth::user()->email, array('class' => 'form-control', 'placeholder' => 'votre adresse mail')) !!}</p>
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