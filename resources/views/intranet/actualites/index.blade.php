@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns is-mobile">
  <div class="column">
    <h1 class="title">Index</h1>
  </div>
  <div class="column has-text-right is-one-quarter">
    <a href="{{ route('actualites.create') }}" class="button is-primary has-text-white is-size-5"><i class="fas fa-plus"></i></a>
  </div>
</div>
<hr>

<div class="card">
  <div class="card-content">
    <table class="table is-hoverable is-fullwidth">
      <thead>
        <tr>
          <th>ID</th>
          <th>Titre</th>
          <th>Auteur</th>
          <th>Date de publication</th>
          <th>Statut</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($actualites as $actualite)
        <tr>

          <th>{{$actualite->id}}</th>
          <td>{{$actualite->title}}</td>
          <td>{{$actualite->author_id}}</td>
          <td>{{$actualite->published_at}}</td>
          <td>
            {{$actualite->status}}
          </td>

          <td class="has-text-right">
            <a href="{{route('actualites.show', $actualite->id)}}" class="button is-outlined">
                  <span class="icon">
                      <i class="far fa-eye"></i>
                    </span>
              </a>

            <a href="{{route('actualites.edit', $actualite->id)}}" class="button is-outlined is-hidden-mobile">
                <span class="icon">
                  <i class="fas fa-pencil-alt"></i>
                </span>
                
              </a> @role('superadministrator')
            <a href="{{route('actualites.destroy', $actualite->id)}}" class="button is-outlined is-hidden-mobile">
                <span class="icon">
                  <i class="fas fa-trash-alt"></i>
                </span>
              </a> @endrole
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

{{$actualites->links('vendor.pagination.default')}}
@endsection