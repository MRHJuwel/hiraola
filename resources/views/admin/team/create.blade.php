@extends('admin.master')
@section('title','Create-Team')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3>Add a new Team Member</h3>
                        <form class="form-control " action="{{route('teams.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="title">Name</label>
                            <input type="text" id="title" name="name" placeholder="input text only" class="form-control">
                            @error('name')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="post">Post</label>
                            <input type="text" id="post" name="post" placeholder="input text only" class="form-control">
                            @error('post')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="Email">Email</label>
                            <input type="email" id="Email" name="email" placeholder="input email only" class="form-control">
                            @error('email')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror


                            <input type="file" name="image" accept="image/png,jpg,jpeg,webp" class="form-control"><br>
                            <button type="submit" class="btn btn-success w-100 "> Add Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
