@extends('layouts.app')

@section('content')
    <div class="panel-heading">Mon profil</div>

    <div class="panel-body">
        {{ Form::model($user, array('route' => array('profile.update', $user->id), 'method' => 'PUT')) }}
        <div class="form-group">

            <div class="form-group">
        <p>{{ Form::text('name', $user->name, array('class' => 'form-control', 'placeholder' => 'Votre nom')) }}</p>
            </div>
            <div class="form-group">
        <p>{{ Form::email('email', $user->email, array('class' => 'form-control', 'placeholder' => 'Votre mail')) }}</p>
        <h3>Changer mon mot de passe</h3>
            </div>


        <p>{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Votre nouveau mot de passe')) }}</p>
        {!! Form::submit('Editer', array('class' => 'form-control btn btn-success')) !!}
        {{ Form::close() }}

        @if($errors)
            <div class="errors">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <p class="error-log">{{$error}}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
