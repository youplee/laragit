@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ route('tags.store') }}" method="POST">

  @csrf

  <div class="form-group">
    <label for="name">Name</label>
    <input type="name" class="form-control" name="name" required>
  </div>

  <div class="checkbox">
    <label><input type="checkbox" name="active">Active</label>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>

</form>

</div>

@endsection