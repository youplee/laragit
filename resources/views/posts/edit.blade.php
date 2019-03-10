@extends('layouts.app')

@section('content')
<h2>Edit a post</h2>
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
<form action="{{route('post.update',['id'=>$post->id])}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" value="{{$post->title}}" name="title" id="title" class="form-control" >
    </div>
    <div class="form-group">
        <div class="form-group">
          <label for="content">Content</label>
          <textarea class="form-control" value="{{$post->content}}" name="content" id="content" rows="3">{{$post->content}}</textarea>
        </div>
    </div>
    <div class="form-group">
      <label for="category">Categories</label>
      <select class="form-control" name="category_id"  id="category_id">

        @foreach($categories as $category)

            <option  class="form-control"  @if($category->id == $post->category_id) selected @endif
             value="{{$category->id}}" id="{{$category->id}}">{{ $category->name}}</option>

        @endforeach
      </select>
    </div>
    <button class="btn btn-block btn-primary">
        <i class="fa plus"></i>Update
    </button>
</form>
@endsection