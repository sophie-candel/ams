@extends('layouts.master') 
@section('body')

<body class="has-navbar-fixed-top">

  @include('layouts.layouts-intranet.nav')
  @include('layouts.layouts-intranet.menu')

  <div id="app" class="main">
    @yield('content')
  </div>
  <script src="{{ asset('/js/app.js') }}"></script>
  @yield('scripts')
  
</body>
@endsection