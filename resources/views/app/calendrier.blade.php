@extends('layouts.layouts-app.master') 
@section('content')
<div class="container">
    <section class="section">
        <h1 class="title">Calendrier</h1>
    </section>
    <section class="section">
        <div class="columns">
            <div class="column is-one-third">
                <div class="control has-icons-left has-icons-right">
                    <input class="input" type="text" placeholder="Rechercher ...">
                    <span class="icon is-small is-left">
                            <i class="fas fa-search"></i>
                        </span>
                </div>
            </div>


            <div class="column">
                <div class="card m-b-20">
                    <div class="card-content">
                        <div class="columns is-mobile">
                            <div class="column has-text-centered is-2">
                                <p class="title is-2">11</p>
                                <p class="subtitle">février</p>
                            </div>
                            <div class="column is-10">
                                <p class="subtitle">Championnat du Grand-Est
                                    <span class="tag is-success is-rounded m-l-5">
                                        <span class="icon m-r-2"><i class="fas fa-star"></i></span>                                    qualificatif
                                    </span>
                                    <span class="tag is-danger is-rounded m-l-5">
                                        <span class="icon m-r-2"><i class="fas fa-exclamation-circle"></i></span>                                    sur sélection
                                    </span>
                                </p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="columns is-mobile">
                            <div class="column has-text-centered is-2">
                                <p class="title is-2">28</p>
                                <p class="subtitle">février</p>
                            </div>
                            <div class="column is-10">
                                <p class="subtitle">Tournoi de Lauterbourg
                                </p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection