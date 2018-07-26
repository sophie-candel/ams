@extends('layouts.layouts-intranet.master') 
@section('content')


<div class="columns">
    <div class="column is-one-quarter">
        <div class="card">
            <div class="card-content">
                {{--
                <div class="avatar-round"><img src="{{asset('storage/assets/photos/users/'.{{Auth::user()->photo}}) }}"></div> --}} Bienvenue, {{Auth::user()->prenom}}
                !
            </div>
        </div>
    </div>
    <div class="column"></div>
</div>

<hr>

<div class="columns">

    <div class="column is-one-quarter">
        <div class="card">
            <div class="card-content">
                <p class="title">
                    {{$judokas}}
                </p>
                <p class="subtitle">
                    licenciés
                </p>
            </div>
        </div>
    </div>

    <div class="column is-one-quarter">
        <div class="card">
            <div class="card-content">
                <p class="title">
                    {{$users}}
                </p>
                <p class="subtitle">
                    utilisateurs
                </p>
            </div>
        </div>
    </div>

    <div class="column is-narrow">
        <div class="card">
            <div class="card-content">
                <p class="title">
                    {{$lastjudoka->nom}} {{$lastjudoka->prenom}}
                </p>
                <p class="subtitle">
                    {{$lastjudoka->licence}}
                </p>
            </div>
        </div>
    </div>




</div>
@endsection