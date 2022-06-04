@extends('admin.master')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-4 text-gray-800"> Add New Category</h1>
        <a href=" {{ route('admin.categories.index') }}" class="btn btn-outline-dark">Return Back</a>
    </div>
    @include('admin.errors')
    <form action="{{ route('admin.categories.store') }}" method="POSt" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Name <span style="color:red">*</span></label>
            <input type="text" class="form-control" name="name" placeholder="Name">
        </div>

        <div class="mb-3">
            <label>Image <span style="color:red">*</span></label>
            <input type="file" class="form-control " name="image">
        </div>

        <div class="mb-3">
            <label>content</label>
            <textarea  class="form-control" name="content" placeholder="Excerpt" rows="4">
            </textarea>
        </div>
 <button class="btn btn-success px-5">ADD</button>
    </form>
@endsection
