@extends('admin.master')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-4 text-gray-800">About </h1>
        <a href=" {{ route('admin.about.create') }}" class="btn btn-outline-success">Add About</a>
    </div>
    <table class="table">


        @foreach ($about as $ab)
            <tr>
                <th>Facebook</th>
                <th>{{ $ab->Facebook }}</th>
            </tr>
            <tr>
                <th>LinkedIn</th>
                <th>{{ $ab->LinkedIn }}</th>

            </tr>
            <tr>
                <th>Twitter</th>
                <th>{{ $ab->Twitter }}</th>
            </tr>
            <tr>
                <th>pintrest</th>
                <th>{{ $ab->pint }}</th>
            </tr>
            <tr>
                <th>Email</th>
                <th>{{ $ab->email }}</th>
            </tr>
            <tr>
                <th>Mobile</th>
                <th>{{ $ab->mobile }}</th>
            </tr>
            <tr>
                <th>address</th>
                <th>{{ $ab->address }}</th>
            </tr>
            <tr>
                <th>open time</th>
                <th>{{ $ab->opentime }}</th>
            </tr>
            <tr>
                <th>action</th>
                <th>

                    <form class="d-inline" method="POST" action="{{route('admin.about.destroy',$ab->id)}}">
                        @csrf
                        @method('delete')
                        <button  onclick="return confirm('Are you sure to delete this catogery ?')"class="btn btn-danger btn-sm"><i class=" fas fa-trash"> Delete</i></button>

                    </form>
                      </th>
        @endforeach




    </table>
@endsection
