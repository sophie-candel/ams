@extends('layouts.app') 
@section('content') {{--
<div>
    @if (Route::has('login'))
    <div>
        @auth
        <a href="{{ url('/home') }}">Home</a> @else
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a> @endauth
    </div>
    @endif
</div> --}}

<section class="section">

</section>

<section class="section">
    <div class="container">

        <div class="columns">
            <div class="column is-one-quarter has-text-centered">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer aliquet nec lacus eu ornare. Maecenas sit amet laoreet sem.
                Nam a tortor sollicitudin, tempor odio ac, gravida eros.
            </div>
            <div class="column is-one-quarter has-text-centered">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer aliquet nec lacus eu ornare. Maecenas sit amet laoreet sem.
                Nam a tortor sollicitudin, tempor odio ac, gravida eros.
            </div>
        </div>
    </div>
</section>

<section class="section has-background-primary">
    <div class="container">
        <div class="columns">
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <p class="title">
                            Title
                        </p>
                        <p class="subtitle">
                            10.01.2019
                        </p>
                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer aliquet nec lacus eu ornare. Maecenas sit amet laoreet sem.
                            Nam a tortor sollicitudin, tempor odio ac, gravida eros.
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <p class="title">
                            Title
                        </p>
                        <p class="subtitle">
                            10.01.2019
                        </p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <p class="title">
                            Title
                        </p>
                        <p class="subtitle">
                            10.01.2019
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">

</section>
@endsection