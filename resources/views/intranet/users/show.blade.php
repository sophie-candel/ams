@extends('layouts.layouts-intranet.master') 
@section('content')
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">View user details</h1>
        </div>
        <div class="column">
            <a href="{{route('users.edit', $user->id)}}" class="button is-primary is-pulled-right">Edit</a>
        </div>
    </div>
    <hr class="m-t-10">

    <div class="columns">
        <div class="column">
            <div class="field">
                <label for="name" class="label">Name</label>
                <pre>{{$user->name}}</pre>
            </div>
            <div class="field">
                <label for="name" class="label">Email</label>
                <pre>{{$user->email}}</pre>
            </div>
            
        </div>
    </div>


</div>
@endsection