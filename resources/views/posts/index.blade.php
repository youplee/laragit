@extends('layouts.app')

@section('content')
<a href="{{ route('post.create') }}" class="btn btn-primary mb-2">Add Post</a>
<h2>Liste Posts</h2>
 <table class="table">
     <thead>
         <tr>
             <th >Tite</th>
             <th >Category</th>
             <th >Stat</th>
         </tr>
     </thead>
     <tbody>
        @foreach($posts as $post)
         <tr>
            <td scope="row">{{ $post->title }}</td>
            <td scope="row">{{ $post->category->name }}</td>
            <td>
            @if($post->active)
                <span class="badge badge-success">Actif</span>
            @else
                <span class="badge badge-danger">Inactif</span>
            @endif
            </td>
         </tr>
         @endforeach
     </tbody>
 </table>
@endsection

