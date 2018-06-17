@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns">
    <div class="column">
        <h1 class="title">Détails</h1>
    </div>
    <div class="column has-text-right">
        <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right">
            <span class="icon is-small">
                <i class="fas fa-pencil-alt"></i>
            </span>
            <span>Modifier</span>
        </a>
    </div>
</div>

<hr> 

<div class="card">
    <div class="card-content">
        <div class="field">
            <label for="name" class="label">Nom</label>
            <pre>{{$user->name}}</pre>
        </div>
        <div class="field">
            <label for="name" class="label">Email</label>
            <pre>{{$user->email}}</pre>
        </div>
        <div class="field">
            <label for="name" class="label">Password</label>
            <pre>{{$user->password}}</pre>
        </div>

    </div>
</div>

@endsection