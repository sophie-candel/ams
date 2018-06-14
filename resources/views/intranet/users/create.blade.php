@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="flex-container">
    <div class="columns m-t-10">
        <div class="column">
            <h1 class="title">Create new User</h1>
        </div>
    </div>
    <hr class="m-t-10">

    <div class="columns">
        <div class="column">
            <form action="{{route('users.store')}}" method="POST">
                    {{ csrf_field() }}
                <div class="field">
                    <label for="name" class="label">Name</label>
                    <p class="control">
                        <input type="text" class="input" name="name" id="name">
                    </p>
                </div>
                <div class="field">
                    <label for="email" class="label">email</label>
                    <p class="control">
                        <input type="text" class="input" name="email" id="email">
                    </p>
                </div>
                <div class="field">
                    <label for="password" class="label">password</label>
                    <p class="control">
                        <input type="text" class="input" name="password" id="password" v-if="!auto_password">
                        <b-checkbox name="auto_generate" class="m-t-15" :checked="true" v-model="auto_password">Auto Generate Password<b-checkbox>
                    </p>

                    <label class="checkbox">
                            <input type="checkbox">
                            Remember me
                          </label>
                </div>
                <button class="button is-success">Créer</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    var app = new Vue({
        el: '#app',
        data {
            auto_password: true
        }
    });
</script>
@endsection