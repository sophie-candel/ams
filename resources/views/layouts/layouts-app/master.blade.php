@extends('layouts.master') 
@section('body')

<body class="has-navbar-fixed-top">
    @include('layouts.layouts-app.nav')
    <div id="app">
        @yield('content')
    </div>

    <footer class="m-t-100 has-background-grey parallax px-is-footer">
        <div class="container has-text-centered">
            @if (Auth::guest())
            <a href="{{ route('login') }}">Connexion</a> @else
            <a href="{{ route('intranet.dashboard') }}">Intranet</a> @endif
            <p>Mentions légales</p>
            {{--
            <p>© Arts Martiaux Schweighouse 2018</p> --}}
        </div>
    </footer>
    @yield('scripts')
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
@endsection