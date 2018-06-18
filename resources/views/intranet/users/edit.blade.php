@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns">
    <div class="column">
        <h1 class="title">Modifier</h1>
    </div>
</div>
<hr>
<div class="card">
    <div class="card-content">
        <form action="{{route('users.update', $user->id)}}" method="POST">
            {{method_field('PUT')}} {{csrf_field()}}
            <div class="field">
                <label for="name" class="label">Nom</label>
                <p class="control">
                    <input type="text" class="input" name="name" id="name" value="{{$user->name}}">
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
                    {{-- <div class="field">
                        <b-radio v-model="password_options" native-value="auto">Générer automatiquement</b-radio>
                    </div> --}}
                    <div class="field">
                        <b-radio v-model="password_options" native-value="manual">Générer manuellement</b-radio>
                        <p class="control">
                            <input type="text" class="input" name="password" id="password" v-if="password_options == 'manual'">
                        </p>
                    </div>

            </div>

            <div class="column">
                <label for="roles" class="label">Roles:</label>
                <input type="hidden" name="roles" :value="rolesSelected" />
    
                @foreach ($roles as $role)
                <div class="field">
                    <b-checkbox v-model="rolesSelected" :native-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
                </div>
                @endforeach
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
        password_options: 'keep',
        rolesSelected: {!! $user->roles->pluck('id') !!}
      }
    });
</script>
@endsection