@extends('admin.master')

@section('content')
 <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-4 text-gray-800"> All categories </h1>
    <a href=" {{route('admin.categories.create')}}"class="btn btn-outline-success">Add New category</a>
 </div>
 @include('admin.message')
    <table class="table">
        <tr class="table-primary">
            <th>id</th>
            <th>name</th>
            <th>image</th>
            <th>content</th>
            <th>action</th>
        </tr>
        @foreach ($category as $cat )
            <tr>
                <th>{{$cat->id}}</th>
                <th>{{$cat->name}}</th>
                <th><img width="100" src="{{asset('uploads/'.$cat->image)}}" alt="" srcset=""></th>
                <th>{{$cat->content}}</th>
                <th>
                    <a href="{{route('admin.categories.edit',$cat->id)}}" class="btn btn-primary btn-sm"><i class=" fas fa-edit"> Edit</i></a>

                    <form class="d-inline" method="POST" action="{{route('admin.categories.destroy',$cat->id)}}">
                        @csrf
                        @method('delete')
                        <button  onclick="return confirm('Are you sure to delete this catogery ?')"class="btn btn-danger btn-sm"><i class=" fas fa-trash"> Delete</i></button>

                    </form>
                </th>
            </tr>
        @endforeach





    </table>
@endsection
