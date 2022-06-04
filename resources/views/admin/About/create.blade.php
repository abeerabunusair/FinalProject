@extends('admin.master')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-4 text-gray-800"> ADD About</h1>
        <a href=" {{ route('admin.about.index') }}" class="btn btn-outline-dark">Return Back</a>
    </div>
    @include('admin.errors')
    <form action="{{ route('admin.about.store') }}" method="POSt" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Facebook <span style="color:red">*</span></label>
            <input type="url" class="form-control" name="Facebook" placeholder="https://www.facebook.com/username/">
        </div>
        <div class="mb-3">
            <label>Twitter <span style="color:red">*</span></label>
            <input type="url" class="form-control" name="Twitter" placeholder="https://twitter.com/username">

        </div>
        <div class="mb-3">
            <label>LinkedIn <span style="color:red">*</span></label>
            <input type="url" class="form-control" name="LinkedIn" placeholder="https://linkedin.com/username">
        </div>
        <div class="mb-3">
            <label>Pintrest <span style="color:red">*</span></label>
            <input type="url" class="form-control " name="pint" placeholder="https://pintrest.com/username">
        </div>
        <div class="mb-3">
            <label>Mobile <span style="color:red">*</span></label>
            <input type="tel" class="form-control " name="mobile" placeholder="+65 11.188.888">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input  type="email" class="form-control" name="email" placeholder="website@domain.com" >

        </div>
        <div class="mb-3">
            <label>Address</label>
            <textarea  class="form-control" name="address" placeholder="address"  rows="2">
            </textarea>
        </div>
        <div class="mb-3">
            <label>open time<span style="color:red">*</span></label>
            <input type="time" class="form-control " name="opentime" >
        </div>
        <button class="btn btn-success px-5">ADD</button>
    </form>
@endsection
