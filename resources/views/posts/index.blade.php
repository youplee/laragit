@extends('layouts.app')

@section('content')
<h2>Liste Posts</h2>
 <table class="table">
     <thead>
         <tr>
             <th >Tite</th>
             <th >Category</th>
             <th class="text-right">Edit</th>
             <th class="text-right">Delete</th>
         </tr>
     </thead>
     <tbody>
        @foreach($posts as $post)
         <tr>
            <td scope="row">{{ $post->title }}</td>
            <td scope="row">{{ $post->category->name }}</td>
            <td class="text-right">
                <a href="{{ route('post.edit',['id'=>$post->id]) }}" class="btn btn-warning"> <i class="fa fa-pencil"></i>Edit</a>
            <td class="text-right">
              <form action="{{ route('post.delete',['id'=>$post->id]) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger">  <i class="fa fa-trash"></i>Delete</button>
             </form>
            </td>
         </tr>
         @endforeach
     </tbody>
 </table>
@endsection