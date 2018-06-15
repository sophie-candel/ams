@extends('layouts.master') 
@section('body')

<body class="has-navbar-fixed-top" id="app">
  @include('layouts.layouts-intranet.nav')
  @include('layouts.layouts-intranet.menu')

  <main id="app">
    @yield('content')
  </main>
  @yield('scripts')
  <script src="{{ asset('/js/app.js') }}"></script>
</body>
@endsection