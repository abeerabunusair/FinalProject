@extends('admin.master')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-4 text-gray-800"> Edit Post : <span class="text-danger">{{$post->title}}</span> </h1>
        <a href=" {{ route('admin.posts.index') }}" class="btn btn-outline-dark">Return Back</a>
    </div>
    @include('admin.errors')
    <form action="{{ route('admin.posts.update', $post->id) }}" method="POSt" enctype="multipart/form-data">
        @csrf
        @method('Put')
        <div class="mb-3">
            <label>Title  <span style="color:red">*</span></label>
            <input type="text" class="form-control" name="title" placeholder="Title " value="{{old('Title ',$post->title)}}">
        </div>

        <div class="mb-3">
            <label>Image <span style="color:red">*</span></label>
            <input type="file" class="form-control " name="image">
            <img width="200" src="{{asset('uploads/'.$post->image)}}" alt="" srcset="">

        </div>

        <div class="mb-3">
            <label>content</label>
            <textarea  class="form-control" name="content" placeholder="content" rows="4">
                {{old('name',$post->content)}}
            </textarea>
        </div>
        <div class="mb-3">
            <label>Excerpt</label>
            <textarea  class="form-control" name="excerpt" placeholder="Excerpt" rows="2">
                {{old('name',$post->excerpt)}}
            </textarea>
        </div>
         <button class="btn btn-success px-5">Save</button>
    </form>
@endsection
