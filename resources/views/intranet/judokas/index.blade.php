@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns">
  <div class="column">
    <h1 class="title">Gestion des judokas</h1>
  </div>
  <div class="column has-text-right">
      <a href="{{ route('judokas.create') }}" class="button is-primary has-text-white is-size-5"><i class="fas fa-plus"></i></a>
    </div>
</div>
<hr>

<div class="card">
  <div class="card-content">
    <table class="table is-hoverable is-fullwidth">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Licence</th>
          <th>Dojo</th>
          <th>Grade</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($judokas as $judoka)
        <tr>
          <td>{{$judoka->nom}}</td>
          <td>{{$judoka->prenom}}</td>
          <td>{{$judoka->licence}}</td>
          <td>{{$judoka->dojo}}</td>
          <td>{{$judoka->grade}}</td>
          <td class="has-text-right">
            <a href="{{route('judokas.show', $judoka->id)}}" class="button is-outlined">
                <span class="icon">
                    <i class="far fa-eye"></i>
                  </span>
            </a>
            <a href="{{route('judokas.edit', $judoka->id)}}" class="button is-outlined">
              <span class="icon">
                <i class="fas fa-pencil-alt"></i>
              </span>
            </a>
            <a href="{{route('judokas.edit', $judoka->id)}}" class="button is-outlined">
              <span class="icon">
                <i class="fas fa-trash-alt"></i>
              </span>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

{{-- {{$judokas->links()}} --}}
@endsection