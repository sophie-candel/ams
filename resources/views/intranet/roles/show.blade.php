@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns">
  <div class="column">
    <h1 class="title">
        {{$role->display_name}}
        <small class="m-l-25">
            <em>
                {{$role->name}}
            </em>
        </small>
    </h1>
  </div>
  <div class="column has-text-right">
    <a href="{{ route('roles.edit', $role->id) }}" class="button is-primary has-text-white is-size-5"><i class="fas fa-pen-alt"></i>Modifier</a>
  </div>
</div>
<hr>

<div class="columns">
    <div class="column">
        <div class="box">
            <article class="media">
                <div class="media-content">
                    <div class="content">
                        <h2 class="title">Permissions:</h1>
                        <ul>
                            @foreach ($role->permissions as $r)
                            <li>{{$r->display_name}} <em class="m-l-15">({{$r->description}})</em></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>

@endsection