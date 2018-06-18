@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns">
  <div class="column">
    <h1 class="title">Gestion des roles</h1>
  </div>
  <div class="column has-text-right">
    <a href="{{ route('roles.create') }}" class="button is-primary has-text-white is-size-5"><i class="fas fa-plus"></i></a>
  </div>
</div>
<hr>

<div class="columns is-multiline">
    @foreach ($roles as $role)
    <div class="column is-one-quarter">
        <div class="box">
            <article class="media">
                <div class="media-content">
                    <div class="content">
                        <h3 class="title">{{$role->display_name}}</h3>
                        <h4 class="subtitle"><em>{{$role->name}}</em></h4>
                        <p>
                            {{$role->description}}
                        </p>
                    </div>

                    <div class="columns is-mobile">
                        <div class="column is-one-half">
                            <a href="{{route('roles.show', $role->id)}}" class="button is-primary is-fullwidth">Details</a>
                        </div>
                        <div class="column is-one-half">
                            <a href="{{route('roles.edit', $role->id)}}" class="button is-fullwidth">Edit</a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
    @endforeach
</div>

@endsection