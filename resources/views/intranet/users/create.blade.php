@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns">
    <div class="column">
        <h1 class="title">Nouvel utilisateur</h1>
    </div>
</div>
<hr> {{--
<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Create new User</h1>
        </div>
    </div>
    <hr class="m-t-10"> --}}

    <div class="card">
        <div class="card-content">
            <form action="{{route('users.store')}}" method="POST">
                {{ csrf_field() }}
                <div class="field">
                    <label for="name" class="label">Nom</label>
                    <p class="control">
                        <input type="text" class="input" name="name" id="name" >
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

                <div class="field is-grouped">
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

                
                {{-- <a href="{{route('users.index')}}" class="button is-danger"><i class="fas fa-ban m-r-5"></i>Annuler</a>
                <button class="button is-success"><i class="fas fa-check m-r-5"></i>Enregistrer</button> --}}
            </form>
        </div>
    </div>
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