@extends('layouts.master') 
@section('body')

<body>
  @include('layouts.layouts-intranet.nav')

  <div id="app">
    @yield('content')
  </div>
  @yield('scripts')
</body>
@endsection