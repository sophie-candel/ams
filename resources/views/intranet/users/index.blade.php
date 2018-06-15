@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns">
  <div class="column">
    <h1 class="title">Gestion des utilisateurs</h1>
  </div>
  <div class="column has-text-right">
    <a href="{{ route('users.create') }}" class="button is-primary">Nouveau</a>
  </div>
</div>
<hr>

<div class="card">
  <div class="card-content">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th>Email</th>
          <th>Date de création</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <th>{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->created_at->toFormattedDateString()}}</td>
          <td>
            <a href="{{route('users.show', $user->id)}}" class="button is-outlined">
                <span class="icon">
                    <i class="far fa-eye"></i>
                  </span>
              Voir
            </a>
            <a href="{{route('users.edit', $user->id)}}" class="button is-outlined">
              <span class="icon">
                <i class="fas fa-pencil-alt"></i>
              </span>
              Modifier
            </a>
            <a href="{{route('users.edit', $user->id)}}" class="button is-outlined">
              <span class="icon">
                <i class="fas fa-trash-alt"></i>
              </span>
              Supprimer
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

{{$users->links()}}
@endsection