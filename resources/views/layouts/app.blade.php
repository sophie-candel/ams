<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class=" has-background-white-ter">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AMS</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="has-navbar-fixed-top">
    <div id="app">
        <nav class="navbar is-fixed-top">
            <div class="navbar-brand">
                <a href="{{route('welcome')}}" class="navbar-item">
                Accueil
                </a>
            </div>
            <div class="navbar-menu">

                
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Club
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            Présentation
                        </a>
                        <a class="navbar-item">
                            Equipe
                        </a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Horaires & Tarifs
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            Horaires
                        </a>
                        <a class="navbar-item">
                            Tarifs
                        </a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Compétitions
                    </a>
                    <div class="navbar-dropdown">
                        <a class="navbar-item">
                            Calendriers
                        </a>
                        <a class="navbar-item">
                            Résultats
                        </a>
                    </div>
                </div>
                <a href="" class="navbar-item">
                    Galerie
                </a>
                <a href="" class="navbar-item">
                    Contact
                </a>
               
                @if (Auth::guest())
                    <a href="{{ route('login') }}" class="navbar-item">Connexion</a>
                @else
                    <a href="" class="navbar-item">Panneau d'administration</a>
                @endif

            </div>
        </nav>
        @yield('content')
    </div>

     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
