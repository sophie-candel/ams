@extends('layouts.layouts-intranet.master') 
@section('content')
<div class="container">
  <div class="columns">
    <div class="column">
      <h1 class="title">Manage Users</h1>
    </div>
    <div class="column">
      <a href="{{ route('users.create') }}" class="button is-primary">Create user</a>
    </div>
  </div>
    <hr>

    <div class="card">
        <div class="card-content">
            <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date created</th>
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
                      <td><a href="{{route('users.edit', $user->id)}}" class="button is-outlined">Edit</a></td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>

  {{$users->links()}}
</div>
@endsection