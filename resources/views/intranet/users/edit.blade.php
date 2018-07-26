@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns">
    <div class="column">
        <h1 class="title">Modifier</h1>
    </div>
</div>
<hr>
<form action="{{route('users.update', $user->id)}}" method="POST">
    {{method_field('PUT')}} {{csrf_field()}}
    <div class="columns">
        <div class="column">
            <div class="card">
                <div class="card-content">
                    <div class="field">
                        <label for="prenom" class="label">Prenom</label>
                        <p class="control">
                            <input type="text" class="input" name="prenom" id="prenom" value="{{$user->prenom}}">
                        </p>
                    </div>
                    <div class="field">
                        <label for="nom" class="label">Nom</label>
                        <p class="control">
                            <input type="text" class="input" name="nom" id="nom" value="{{$user->nom}}">
                        </p>
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email</label>
                        <p class="control">
                            <input type="text" class="input" name="email" id="email" value="{{$user->email}}">
                        </p>
                    </div>
                    <div class="field">
                        <label for="password" class="label">Mot de passe</label>
                        <div class="field">
                            <b-radio v-model="password_options" native-value="keep">Ne pas changer</b-radio>
                        </div>
                        <div class="field">
                            <b-radio v-model="password_options" native-value="manual">Générer manuellement</b-radio>
                            <p class="control">
                                <input type="text" class="input" name="password" id="password" v-if="password_options == 'manual'">
                            </p>
                        </div>
                    </div>

                    <div class="column">
                        <label for="roles" class="label">Roles:</label>
                        <input type="hidden" name="roles" :value="rolesSelected" /> @foreach ($roles as $role)
                        <div class="field">
                            <b-checkbox v-model="rolesSelected" :native-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <div class="column is-one-quarter">
            <div class="card">
                <div class="card-content">
                    <figure class="image is-2by3 avatar">
                        <img src="{{asset('storage/assets/photos/judokas/'.$user->photo) }}">
                    </figure>
                </div>
            </div>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <div class="field is-grouped">
                <p class="control">
                    <a href="{{route('judokas.index')}}" class="button is-danger  is-fullwidth">
                        
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
<script>
    var app = new Vue({
      el: '#app',
      data: {
        password_options: 'keep',
        rolesSelected: {!! $user->roles->pluck('id') !!}
      }
    });

</script>
@endsection