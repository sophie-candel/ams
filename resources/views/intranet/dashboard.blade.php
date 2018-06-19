@extends('layouts.layouts-intranet.master') 
@section('content')
<h1 class="title">
    Dashboard Bienvenue, {{Auth::user()->name}} !
</h1>

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