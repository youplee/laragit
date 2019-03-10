@extends('layouts.site')
@section('content')
<div class="row">
    <div class="col-md-8">
        @foreach($posts as $post)
            <div class="card mb-3">
            <img class="card-img-top" src="https://picsum.photos/1089/180/?image={{ $post->id }}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        @endforeach
    </div>
    <div class="col-md-4">
        <h4>Categories</h4>
        <ul>
            @foreach($categories as $category)
                <li><a href="#">{{ $category->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
@endsection