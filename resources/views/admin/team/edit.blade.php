@extends('admin.master')
@section('title','Create-Team')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3>Add a new Team Member</h3>
                        <form class="form-control " action="{{route('teams.update',$team->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label for="title">Name</label>
                            <input type="text" id="title" name="name" value="{{$team->name}}" class="form-control">
                            @error('name')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="post">Post</label>
                            <input type="text" id="post" name="post" value="{{$team->post}}" class="form-control">
                            @error('post')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="Email">Email</label>
                            <input type="email" id="Email" name="email" value="{{$team->email}}" class="form-control">
                            @error('email')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror


                            <input type="file" name="image" accept="image/png,jpg,jpeg,webp" class="form-control">
                            <br>
                            <img src="{{asset($team->image)}}" height="50px" width="50px" alt="">
                            <br>
                            <br>
                            <button type="submit" class="btn btn-success w-100 "> Add Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
