@extends('layouts.app')

@section('content')
<h2>Create a post</h2>
@if($errors->any())
<div class="alert alert-warning">
    <ul>
    @foreach($errors->all() as $error)
        <li>
          {{ $error}}
        </li>
    @endforeach
    </ul>
</div>
@endif
<form action="{{route('post.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" >
    </div>
    <div class="form-group">
        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" name="content" id="content" rows="3"></textarea>
        </div>
    </div>
    <div class="form-group">
      <label for="category">Categories</label>
      <select class="form-control" name="category_id" id="category_id">
        @foreach($categories as $category)
            <option  class="form-control" value="{{ $category->id}}" id="{{$category->id}}">{{ $category->name}}</option>
        @endforeach
      </select>
    </div>
    <button class="btn btn-block btn-primary">
        <i class="fa plus"></i>Submit
    </button>
</form>
@endsection