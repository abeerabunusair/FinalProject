@extends('admin.master')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-4 text-gray-800"> Add New Post</h1>
        <a href=" {{ route('admin.posts.index') }}" class="btn btn-outline-dark">Return Back</a>
    </div>
    @include('admin.errors')
    <form action="{{ route('admin.posts.store') }}" method="POSt" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Title <span style="color:red">*</span></label>
            <input type="text" class="form-control" name="title" placeholder="Title">
        </div>


        <div class="mb-3">
            <label>Image <span style="color:red">*</span></label>
            <input type="file" class="form-control " name="image">
        </div>
        <div class="mb-3">
            <label>Content <span style="color:red">*</span></label>
            <textarea  class="form-control" name="content" placeholder="Content" rows="4">
            </textarea>
        </div>
        <div class="mb-3">
            <label>Excerpt</label>
            <textarea  class="form-control" name="excerpt" placeholder="Excerpt" rows="2">
            </textarea>
        </div>
 <button class="btn btn-success px-5">ADD</button>
    </form>
@endsection
