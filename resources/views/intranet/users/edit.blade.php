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
                <b-radio-group v-model="password_options">
                    <div class="field">
                        <b-radio value="keep">Ne pas changer</b-radio>
                    </div>
                    <div class="field">
                        <b-radio value="auto">Générer automatiquement</b-radio>
                    </div>
                    <div class="field">
                        <b-radio value="manual">Générer manuellement</b-radio>
                        <p class="control">
                            <input type="text" class="input" name="password" id="password" v-if="password_options == 'manual'">
                        </p>
                    </div>
                </b-radio-group>

            </div>
            <a href="{{route('users.index')}}" class="button is-danger">Annuler</a>
            <button class="button is-success">Enregistrer</button>
        </form>
    </div>
</div>
{{-- </div> --}}
@endsection
 
@section('scripts')
<script>
    var app = new Vue({
        el: '#app',
        data {
            password_options: 'keep'
        }
    });

</script>
@endsection