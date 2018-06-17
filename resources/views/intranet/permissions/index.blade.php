@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns">
  <div class="column">
    <h1 class="title">Gestion des permissions</h1>
  </div>
  <div class="column has-text-right">
    <a href="{{ route('permissions.create') }}" class="button is-primary has-text-white is-size-5"><i class="fas fa-plus"></i></a>
  </div>
</div>
<hr>

<div class="card">
  <div class="card-content">
    <table class="table is-hoverable is-fullwidth">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Slug</th>
          <th>Description</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($permissions as $permission)
        <tr>
          <td>{{$permission->display_name}}</td>
          <td>{{$permission->name}}</td>
          <td>{{$permission->description}}</td>
          <td class="has-text-right">
            <a href="{{route('permissions.show', $permission->id)}}" class="button is-outlined">
                <span class="icon">
                    <i class="far fa-eye"></i>
                  </span>
            </a>

            <a href="{{route('permissions.edit', $permission->id)}}" class="button is-outlined">
              <span class="icon">
                <i class="fas fa-pencil-alt"></i>
              </span>
              
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

{{-- {{$permissions->links('vendor.pagination.default')}} --}}
@endsection