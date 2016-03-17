@extends('layouts.app')

@section('content')
    <h1>Edit article n° {{$post->id}}</h1>
    {!! Form::open(['route' => ['articles.update', $post->id], 'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::select('user_id', $users, $post->user_id, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::text('title', $post->title, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('description', $post->description, ['class' => 'form-control'])  !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Envoyer', ['class'=> 'btn btn-block']) !!}
    </div>
    {!! Form::close() !!}
@endsection