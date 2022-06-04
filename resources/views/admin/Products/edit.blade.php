@extends('admin.master')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-4 text-gray-800"> Edit Product : <span class="text-danger">{{$product->name}}</span> </h1>
        <a href=" {{ route('admin.products.index') }}" class="btn btn-outline-dark">Return Back</a>
    </div>
    @include('admin.errors')
    <form action="{{ route('admin.products.update', $product->id) }}" method="POSt" enctype="multipart/form-data">
        @csrf
        @method('Put')
        <div class="mb-3">
            <label>Name <span style="color:red">*</span></label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name',$product->name)}}">
        </div>
        <div class="mb-3">
            <label>Quantity <span style="color:red">*</span></label>
            <input type="number" class="form-control" name="quantity" placeholder="Quantity" value="{{old('quantity',$product->quantity)}}">
        </div>
        <div class="mb-3">
            <label>Price <span style="color:red">*</span></label>
            <input type="number" class="form-control" name="price" placeholder="Price" value="{{old('price',$product->price)}}">
        </div>

        <div class="mb-3">
            <label>Image <span style="color:red">*</span></label>
            <input type="file" class="form-control " name="image">
            <img width="200" src="{{asset('uploads/'.$product->image)}}" alt="" srcset="">

        </div>
        <div class="mb-3">

            <label for="category">Choose a Category:</label>
            <select name="category" id="category">
                <option value=""></option>
                @foreach ( $category as $cat )
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>

        </div>

        <div class="mb-3">
            <label>Excerpt</label>
            <textarea  class="form-control" name="excerpt" placeholder="Excerpt" rows="2">
                {{old('name',$product->excerpt)}}
            </textarea>
        </div>
         <button class="btn btn-success px-5">Save</button>
    </form>
@endsection
