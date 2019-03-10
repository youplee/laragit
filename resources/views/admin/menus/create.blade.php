@extends('layouts.app')

@section('content')

    <h2>Create a Menu</h2>

    @if($errors->any())
    <div class="alert alert-warning">
      <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <form action="{{ route('menu.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" name="name" type="text" class="form-control input-lg" placeholder="Create new name">
        </div>
        <div class="form-group">
                <label for="lien">Lien</label>
                <input id="lien" name="lien" type="text" class="form-control input-lg" placeholder="Create new lien">
            </div>
        <button class="btn btn-block btn-primary">
            <i class="fa fa-plus"></i> Submit
        </button>
    </form>

@endsection
