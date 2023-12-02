@extends('admin.master')
@section('title','Edit-Catagory')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3> Edit Catagory</h3>
                        <form class="form-control " action="{{route('catagories.update',$catagory->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$catagory->id}}">
                            <label for="cname">Catagory Name</label>
                            <input type="text" id="cname" name="name" value="{{$catagory->name}}" placeholder="input text only" class="form-control">
                            @error('name')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <button type="submit" class="btn btn-success w-100"> Update Now! </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
