@extends('layouts.app')

@section('content')

<div class="container">

  <a href="{{ route('tags.create') }}" class="btn btn-primary mb-2">Add product</a>

  <h2>Tags</h2>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Active</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tags as $tag)
      <tr>
        <td>{{ $tag->name }}</td>
        <td>{{ $tag->active ? 'Actif' : 'Inactif' }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection