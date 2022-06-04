@extends('admin.master')

@section('content')
 <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-4 text-gray-800"> All Posts </h1>
    <a href=" {{route('admin.posts.create')}}"class="btn btn-outline-success">Add New post</a>
 </div>
    <table class="table">
        <tr class="table-primary">
            <th>id</th>
            <th>title</th>
            <th>image</th>
            <th>content</th>
            <th>excerpt</th>
            <th>action</th>
        </tr>
        <tr>
            @foreach ($posts as $post )
            <tr>
                <th>{{$post->id}}</th>
                <th>{{$post->title}}</th>
                <th><img width="100" src="{{asset('uploads/'.$post->image)}}" alt="" srcset=""></th>
                <th>{{$post->content}}</th>
                <th>{{$post->excerpt}}</th>
                <th>
                    <a  href="{{route('admin.posts.edit',$post->id)}}" class="btn btn-primary btn-sm"><i class=" fas fa-edit "> Edit</i></a>

                    <form class="d-inline " method="POST" action="{{route('admin.posts.destroy',$post->id)}}">
                        @csrf
                        @method('delete')
                        <button  onclick="return confirm('Are you sure to delete post ?')"class="btn btn-danger btn-sm"><i class=" fas fa-trash"> Delete</i></button>

                    </form>
                </th>
            </tr>
        @endforeach






    </table>
@endsection
