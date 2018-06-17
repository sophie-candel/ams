@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns">
    <div class="column">
        <h1 class="title">Ajouter un judokas</h1>
    </div>
</div>

<hr> 

<div class="card">
    <div class="card-content">
        <form action="{{route('judokas.store')}}" method="POST">
        {{ csrf_field() }}
            <div class="columns">
                <div class="column">
                    <div class="columns">
                        <div class="column">
                            <div class="field">
                                <label for="nom" class="label">Nom</label>
                                <p class="control">
                                    <input type="text" class="input" name="nom" id="nom">
                                </p>
                            </div>

                        </div>
                        <div class="column">
                            <div class="field">
                                <label for="prenom" class="label">Prénom</label>
                                <p class="control">
                                    <input type="text" class="input" name="prenom" id="prenom">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label for="date_naissance" class="label">Date de naissance</label>
                        <p class="control">
                            <input type="text" class="input" name="date_naissance" id="date_naissance">
                        </p>
                    </div>

                    <div class="columns m-t-50">
                        <div class="column">
                            <div class="field">
                                <label for="licence" class="label">Licence</label>
                                <p class="control">
                                    <input type="text" class="input" name="licence" id="licence">
                                </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label for="dojo" class="label">Dojo</label>
                                <p class="control">
                                    <input type="text" class="input" name="dojo" id="dojo">
                                </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label for="grade" class="label">Grade</label>
                                <p class="control">
                                    <input type="text" class="input" name="grade" id="grade">
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="columns m-t-50">
                        <div class="column">
                            <div class="field">
                                <label for="telephone" class="label">Telephone</label>
                                <p class="control">
                                    <input type="text" class="input" name="telephone" id="telephone">
                                </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label for="portable" class="label">Portable</label>
                                <p class="control">
                                    <input type="text" class="input" name="portable" id="portable">
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email</label>
                        <p class="control">
                            <input type="text" class="input" name="email" id="email">
                        </p>
                    </div>

                    <div class="field m-t-50">
                        <label for="adresse_rue" class="label">Adresse</label>
                        <p class="control">
                            <input type="text" class="input" name="adresse_rue" id="adresse_rue">
                        </p>
                    </div>
                    <div class="columns">
                        <div class="column is-one-third">
                            <div class="field">
                                <label for="adresse_cp" class="label">CP</label>
                                <p class="control">
                                    <input type="text" class="input" name="adresse_cp" id="adresse_cp">
                                </p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label for="adresse_ville" class="label">Ville</label>
                                <p class="control">
                                    <input type="text" class="input" name="adresse_ville" id="adresse_ville">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column is-one-third">
                    <div class="field">
                        <div class="file is-large is-centered is-boxed has-name">
                            <label class="file-label">
                            <input class="file-input" type="file" name="resume">
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