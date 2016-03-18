@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mon Profil</div>
                    <div class="panel-body">
                        <h2>{{ $user->name }}</h2>
                        <a class="btn btn-success" href="{{url('/profile/edit')}}">Modifier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

