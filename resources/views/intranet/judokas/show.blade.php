@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns">
    <div class="column">
        <h1 class="title">Fiche individuelle</h1>
    </div>
    <div class="column has-text-right">
        <a href="{{route('judokas.edit', $judoka->id)}}" class="button is-primary is-pulled-right">
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
            <header class="card-header">
                <p class="card-header-title">
                    Informations générales
                </p>
            </header>
            <div class="card-content">
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label for="nom" class="label">Nom</label>
                            <pre>{{$judoka->nom}}</pre>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label for="prenom" class="label">Prénom</label>
                            <pre>{{$judoka->prenom}}</pre>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="date_naissance" class="label">Date de naissance</label>
                    <pre>{{$judoka->date_naissance}}</pre>
                </div>
            </div>
        </div>

        <div class="card m-t-20">
            <header class="card-header">
                <p class="card-header-title">
                    Informations club
                </p>
            </header>
            <div class="card-content">
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label for="licence" class="label">Licence</label>
                            <pre>{{$judoka->licence}}</pre>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label for="dojo" class="label">Dojo</label>
                            <pre>{{$judoka->dojo}}</pre>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label for="grade" class="label">Grade</label>
                            <pre>{{$judoka->grade}}</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card m-t-20">
            <header class="card-header">
                <p class="card-header-title">
                    Contact
                </p>
            </header>
            <div class="card-content">
                <div class="columns">
                    <div class="column">
                        <div class="field">
                            <label for="telephone" class="label">Telephone</label>
                            <pre>{{$judoka->telephone}}</pre>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label for="portable" class="label">Portable</label>
                            <pre>{{$judoka->portable}}</pre>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label for="email" class="label">Email</label>
                    <pre>{{$judoka->email}}</pre>
                </div>

                <div class="field">
                    <label for="adresse_rue" class="label">Adresse</label>
                    <pre>{{$judoka->adresse_rue}}</pre>
                </div>
                <div class="columns">
                    <div class="column is-one-third">
                        <div class="field">
                            <label for="adresse_cp" class="label">CP</label>
                            <pre>{{$judoka->adresse_cp}}</pre>
                        </div>
                    </div>
                    <div class="column">
                        <div class="field">
                            <label for="adresse_ville" class="label">Ville</label>
                            <pre>{{$judoka->adresse_ville}}</pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card m-t-20">
            <header class="card-header">
                <p class="card-header-title">Résultats en compétition</p>
            </header>
            <div class="card-content"></div>
        </div>
    </div>

    <div class="column is-one-quarter">
        <div class="card">
            <div class="card-content">
                <figure class="image is-2by3 avatar">
                    <img src="{{asset('storage/assets/photos/judokas/'.$judoka->photo) }}">
                </figure>
            </div>
        </div>
    </div>
</div>
@endsection