@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns">
  <div class="column">
    <h1 class="title">Show</h1>
  </div>
  <div class="column has-text-right">
    <a href="{{route('actualites.edit', $actualite->id)}}" class="button is-primary is-pulled-right">
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
        <div class="field">
          <label for="title" class="label">Titre</label>
          <pre>{{$actualite->title}}</pre>
        </div>
        <div class="field">
          <label for="content" class="label">Contenu</label>
          <pre>{{$actualite->content}}</pre>
        </div>
      </div>
    </div>

  </div>
  <div class="column is-one-quarter">
    <div class="card">
      <div class="card-content">
        {{$actualite->author_id}}
        <hr>
        <div class="m-t-20">
          {{$actualite->status}}
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
 
@section('scripts')
@endsection