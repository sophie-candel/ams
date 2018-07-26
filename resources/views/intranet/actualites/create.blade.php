@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns">
  <div class="column">
    <h1 class="title">Ecrire un article</h1>
  </div>
</div>
<hr>@if($errors->any())
<article class="message is-danger">
  <div class="message-header">
    Erreur
  </div>
  <div class="message-body">
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
  </div>
</article>
@endif


<form action="{{route('actualites.store')}}" method="POST">
  {{ csrf_field() }}

  <div class="columns">
    <div class="column">
      <div class="card">
        <div class="card-content">
          <div class="field">
            <label for="title" class="label">Titre</label>
            <p class="control">
              <input type="text" class="input" name="title" id="title">
            </p>
          </div>
          <div class="field">
            <label for="content" class="label">Contenu</label>
            <p class="control">
              {{-- <textarea type="text" class="input" name="content" id="content" rows="10"></textarea> --}}
              <textarea class="textarea" name="content" id="content" rows="10"></textarea>
            </p>
          </div>
        </div>
      </div>

    </div>
    <div class="column is-one-quarter">
      <div class="card">
        <div class="card-content">
          {{Auth::user()->prenom}} {{Auth::user()->nom}}
          <hr>
          <div class="m-t-20">
            <div class="control">
              <label class="radio">
                <input type="radio" name="status" value="1">
                Publier l'article
              </label>
              <label class="radio">
                <input type="radio" name="status" value="0">
                Garder comme brouillon
              </label>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div class="columns">
    <div class="column">
      <div class="field is-grouped">
        <p class="control">
          <a href="{{route('actualites.index')}}" class="button is-danger  is-fullwidth">
                <span class="icon is-small">
                    <i class="fas fa-ban"></i>
                </span>
                <span>Annuler</span>
                </a>
        </p>
        <p class="control">
          <button class="button is-success is-fullwidth">
                    <span class="icon is-small">
                        <i class="fas fa-check"></i>
                    </span>
                    <span>Enregistrer</span>
                </button>
        </p>
      </div>
    </div>
    <div class="column is-one-quarter"></div>
  </div>


</form>
@endsection
 
@section('scripts')
@endsection