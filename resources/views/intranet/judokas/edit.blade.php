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
            <form action="{{route('judokas.update', $judoka->id)}}" method="POST">
                    {{method_field('PUT')}} {{csrf_field()}}
        <div class="columns">
            <div class="column">
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label for="nom" class="label">Nom</label>
                            <p class="control">
                                <input type="text" class="input" name="nom" id="nom" value="{{$judoka->nom}}">
                            </p>
                        </div>

                    </div>
                    <div class="column">
                        <div class="field">
                            <label for="prenom" class="label">Prénom</label>
                            <p class="control">
                                <input type="text" class="input" name="prenom" id="prenom" value="{{$judoka->prenom}}">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="date_naissance" class="label">Date de naissance</label>
                    <p class="control">
                        <input type="text" class="input" name="date_naissance" id="date_naissance" value="{{$judoka->date_naissance}}">
                    </p>
                </div>

                <div class="columns m-t-50">
                    <div class="column">
                        <div class="field">
                            <label for="licence" class="label">Licence</label>
                            <p class="control">
                                <input type="text" class="input" name="licence" id="licence" value="{{$judoka->licence}}">
                            </p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label for="dojo" class="label">Dojo</label>
                            <p class="control">
                                <input type="text" class="input" name="dojo" id="dojo" value="{{$judoka->dojo}}">
                            </p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label for="grade" class="label">Grade</label>
                            <p class="control">
                                <input type="text" class="input" name="grade" id="grade" value="{{$judoka->grade}}">
                            </p>
                        </div>
                    </div>
                </div>

                <div class="columns m-t-50">
                    <div class="column">
                        <div class="field">
                            <label for="telephone" class="label">Telephone</label>
                            <p class="control">
                                <input type="text" class="input" name="telephone" id="telephone" value="{{$judoka->telephone}}">
                            </p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label for="portable" class="label">Portable</label>
                            <p class="control">
                                <input type="text" class="input" name="portable" id="portable" value="{{$judoka->portable}}">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="email" class="label">Email</label>
                    <p class="control">
                        <input type="text" class="input" name="email" id="email" value="{{$judoka->email}}">
                    </p>
                </div>

                <div class="field m-t-50">
                    <label for="adresse_rue" class="label">Adresse</label>
                    <p class="control">
                        <input type="text" class="input" name="adresse_rue" id="adresse_rue" value="{{$judoka->adresse_rue}}">
                    </p>
                </div>
                <div class="columns">
                    <div class="column is-one-third">
                        <div class="field">
                            <label for="adresse_cp" class="label">CP</label>
                            <p class="control">
                                <input type="text" class="input" name="adresse_cp" id="adresse_cp" value="{{$judoka->adresse_cp}}">
                            </p>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label for="adresse_ville" class="label">Ville</label>
                            <p class="control">
                                <input type="text" class="input" name="adresse_ville" id="adresse_ville" value="{{$judoka->adresse_ville}}">
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column is-one-third">
                <figure class="image is-2by3">
                    <img src="http://md1.libe.com/photo/878128-dans-l-ombre-de-teddy-riner.jpg?modified_at=1463757892&width=960">
                    {{-- <img src="https://bulma.io/images/placeholders/320x480.png"> --}}
                </figure>
            </div>
        </div>

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

            </form>

    </div>
</div>

@endsection