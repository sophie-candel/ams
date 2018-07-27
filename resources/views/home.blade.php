@extends('layouts.layouts-app.master') 
@section('content')

<section class="section parallax px-is-home">
    <div class="container">
        <h1>Arts Martiaux Schweighouse</h1>
    </div>
</section>

<section class="section">
    <div class="container">

        <div class="columns">
            <div class="column is-one-quarter has-text-centered">
                <p>Cours de judo</p>
                <p>loisir et compétition</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer aliquet nec lacus eu ornare. Maecenas sit
                    amet laoreet sem. Nam a tortor sollicitudin, tempor odio ac, gravida eros.</p>
                <a class="button is-fullwidth m-t-10" href="{{route('club.disciplines')}}">En savoir plus</a>
            </div>
            <div class="column is-one-quarter has-text-centered">
                <p>Ateliers adultes</p>
                <p>remise en forme</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer aliquet nec lacus eu ornare. Maecenas sit
                    amet laoreet sem. Nam a tortor sollicitudin, tempor odio ac, gravida eros.</p>
                <a class="button is-fullwidth m-t-10" href="{{route('club.disciplines')}}">En savoir plus</a>
            </div>
        </div>
    </div>
</section>

<section class="section has-background-primary">
    <div class="container">
        @foreach ($actualites as $actualite)
        <div class="card m-b-20">
            <div class="card-content">
                <p class="title">
                    {{$actualite->title}}
                </p>
                <p class="subtitle">
                    {{$actualite->published_at}}
                </p>
                <div class="content">
                    {{$actualite->content}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="section">

</section>
@endsection