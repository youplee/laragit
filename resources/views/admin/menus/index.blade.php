@extends('layouts.app')

@section('content')

  <table class="table table-bordered">
      <thead>
          <tr>
              <th>name</th>
              <th>lien</th>
          </tr>
      </thead>
      <tbody>
        @foreach($menus as $menu)
          <tr>
              <td scope="row">{{ $menu->name }}</td>
              <td>{{ $menu->lien }}</td>
          </tr>
        @endforeach
      </tbody>
  </table>

  <div class="row">
        <div class="col-md-6 mx-auto">
            {{ $menus->links() }}
        </div>
    </div>

@stop
