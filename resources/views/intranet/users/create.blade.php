@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns">
    <div class="column">
        <h1 class="title">Nouvel utilisateur</h1>
    </div>
</div>
<hr>
<form action="{{route('users.store')}}" method="POST">
    {{ csrf_field() }}

    <div class="columns">
        <div class="column">
            <div class="card">
                <div class="card-content">
                    <div class="field">
                        <label for="prenom" class="label">Prenom</label>
                        <p class="control">
                            <input type="text" class="input" name="prenom" id="prenom">
                        </p>
                    </div>
                    <div class="field">
                        <label for="nom" class="label">Nom</label>
                        <p class="control">
                            <input type="text" class="input" name="nom" id="nom">
                        </p>
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email</label>
                        <p class="control">
                            <input type="text" class="input" name="email" id="email">
                        </p>
                    </div>

                    <div class="field">
                        <label for="password" class="label">Mot de passe</label>
                        <p class="control">
                            <input type="text" class="input" name="password" id="password" v-if="!auto_password">
                            <b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password">Générer un mot de passe aléatoire</b-checkbox>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="column is-one-quarter">
            <div class="card">
                <div class="card-content">
                    <div class="field">
                        <div class="file is-centered is-boxed has-name">
                            <label for="file" class="file-label">
                                <input class="file-input" type="file" name="file" id="file">
                                <span class="file-cta">
                                    <span class="file-icon">
                                    <i class="fas fa-upload"></i>
                                    </span>
                                    <span class="file-label">
                                    Importer une photo...
                                    </span>
                                </span>
                                <span class="file-name">
                                    Screen Shot 2017-07-29 at 15.54.25.png
                                </span>
                                </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="columns">
        <div class="column">
            <div class="field is-grouped m-t-15">
                <p class="control">
                    <a href="{{route('users.index')}}" class="button is-danger  is-fullwidth">
                    
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
{{-- </div> --}}
@endsection
 
@section('scripts')
<script>
    var app = new Vue({
      el: '#app',
      data: {
        auto_password: false
      }
    });

</script>
@endsection