@extends('admin.master')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-4 text-gray-800"> Edit Category : <span class="text-danger">{{$category->name}}</span> </h1>
        <a href=" {{ route('admin.categories.index') }}" class="btn btn-outline-dark">Return Back</a>
    </div>
    @include('admin.errors')
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POSt" enctype="multipart/form-data">
        @csrf
        @method('Put')
        <div class="mb-3">
            <label>Name <span style="color:red">*</span></label>
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name',$category->name)}}">
        </div>

        <div class="mb-3">
            <label>Image <span style="color:red">*</span></label>
            <input type="file" class="form-control " name="image">
            <img width="200" src="{{asset('uploads/'.$category->image)}}" alt="" srcset="">

        </div>

        <div class="mb-3">
            <label>content</label>
            <textarea  class="form-control" name="content" placeholder="content" rows="4">
                {{old('name',$category->content)}}
            </textarea>
        </div>
         <button class="btn btn-success px-5">Save</button>
    </form>
@endsection
