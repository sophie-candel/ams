@extends('layouts.master') 
@section('body')

<body class="has-navbar-fixed-top">
  @include('layouts.layouts-intranet.nav')

  <div id="app">
    @yield('content')
  </div>
</body>
@endsection