@extends('admin.master')

@section('content')
 <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-4 text-gray-800"> All Products </h1>
    <a href=" {{route('admin.products.create')}}"class="btn btn-outline-success">Add New Product</a>
 </div>
 @include('admin.message')
    <table class="table">
        <tr class="table-primary">
            <th>id</th>
            <th>name</th>
            <th>catogery</th>
            <th>image</th>
            <th>price</th>
            <th>quantity</th>
            <th>Excerpt</th>
            <th>action</th>
        </tr>
        @foreach ($product as $pro )
            <tr>
                <th>{{$pro->id}}</th>
                <th>{{$pro->name}}</th>
                <th></th>

                {{-- <th>{{$pro->category->id}}</th> --}}
                <th><img width="100" src="{{asset('uploads/'.$pro->image)}}" alt="" srcset=""></th>
                <th>{{$pro->price .'$'}}</th>
                <th>{{$pro->quantity}}</th>
                <th>{{$pro->excerpt}}</th>
                <th>
                    <a href="{{route('admin.products.edit',$pro->id)}}" class="btn btn-primary btn-sm"><i class=" fas fa-edit"> Edit</i></a>
                    <form class="d-inline" method="POST" action="{{route('admin.products.destroy',$pro->id)}}">
                        @csrf
                        @method('delete')
                        <button  onclick="return confirm('Are you sure to delete this product ?')"class="btn btn-danger btn-sm"><i class=" fas fa-trash"> Delete</i></button>

                    </form>
                </th>
            </tr>
        @endforeach




    </table>
@endsection
