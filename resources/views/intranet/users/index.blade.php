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
</div>
@endsection