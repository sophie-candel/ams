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

<div class="columns">
    <div class="column">
        <div class="card">
            <div class="card-content">
                <div class="columns">
                    <div class="column field">
                        <label for="prenom" class="label">Prenom</label>
                        <pre>{{$user->prenom}}</pre>
                    </div>
                    <div class="column field">
                        <label for="nom" class="label">Nom</label>
                        <pre>{{$user->nom}}</pre>
                    </div>
                </div>
                <div class="field">
                    <label for="email" class="label">Email</label>
                    <pre>{{$user->email}}</pre>
                </div>
                <div class="field">
                    <label for="password" class="label">Password</label>
                    <pre>{{$user->password}}</pre>
                </div>

                <div class="field">
                    <label class="label">Roles</label>
                    <ul>
                        {{$user->roles->count() == 0 ? 'This user has not been assigned any roles yet' : ''}} @foreach ($user->roles as $role)
                        <li>{{$role->display_name}} ({{$role->description}})</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="column is-one-quarter">
        <div class="card">
            <div class="card-content">
                <figure class="image is-2by3 avatar">
                    <img src="{{asset('storage/assets/photos/judokas/'.$user->photo) }}">
                </figure>
            </div>
        </div>
    </div>
</div>
@endsection