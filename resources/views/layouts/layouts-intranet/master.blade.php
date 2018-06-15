@extends('layouts.master') 
@section('body')

<body class="has-navbar-fixed-top">
  @include('layouts.layouts-intranet.nav')
  @include('layouts.layouts-intranet.menu')

  <main>
    @yield('content')
  </main>
  @yield('scripts')
</body>
@endsection