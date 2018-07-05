@extends('layouts.layouts-intranet.master') 
@section('content')

<div class="columns is-mobile">
  <div class="column">
    <h1 class="title">Gestion des utilisateurs</h1>
  </div>
  <div class="column has-text-right is-one-quarter">
    <a href="{{ route('users.create') }}" class="button is-primary has-text-white is-size-5"><i class="fas fa-plus"></i></a>
  </div>
</div>
<hr>

<div class="card">
  <div class="card-content">
    <table class="table is-hoverable is-fullwidth">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nom</th>
          <th class="is-hidden-mobile">Email</th>
          <th class="is-hidden-mobile">Date de création</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <th>{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td class="is-hidden-mobile">{{$user->email}}</td>
          <td class="is-hidden-mobile">{{$user->created_at->toFormattedDateString()}}</td>
          <td class="has-text-right">
            <a href="{{route('users.show', $user->id)}}" class="button is-outlined">
                <span class="icon">
                    <i class="far fa-eye"></i>
                  </span>
            </a>

            <a href="{{route('users.edit', $user->id)}}" class="button is-outlined is-hidden-mobile">
              <span class="icon">
                <i class="fas fa-pencil-alt"></i>
              </span>
              
            </a> {{--
            <form action="{{route('users.destroy', $user->id)}}" method="post">
              <p>{{method_field('DELETE')}} {{ csrf_field() }}
                <button type="submit">
                  <span class="icon">
                    <i class="fas fa-trash-alt"></i>
                  </span>
                </button>
              </p>
            </form> --}}


            <a href="{{route('users.destroy', $user->id)}}" class="button is-outlined is-hidden-mobile">
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

{{$users->links('vendor.pagination.default')}}
@endsection