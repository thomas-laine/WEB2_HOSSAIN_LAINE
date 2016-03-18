@extends('layouts.app')

@section('content')

                <div class="panel panel-default">
                    <div class="panel-heading">Mon Profil</div>
                    <div class="panel-body">
                        <h2>{{ $user->name }}</h2>
                        <a class="btn btn-success" href="{{url('/profile/edit')}}">Modifier</a>
                    </div>
                </div>

@endsection

