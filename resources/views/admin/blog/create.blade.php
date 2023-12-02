@extends('admin.master')
@section('title','Create-Blog')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3>Add a new Blog post</h3>
                        <form class="form-control " action="{{route('blogs.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="title">Blog Title</label>
                            <input type="text" id="title" name="title" placeholder="input text only" class="form-control">
                            @error('title')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="slg">Blog Slug</label>
                            <input type="text" id="slg" name="slug" placeholder="input text only" class="form-control">
                            @error('slug')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                            <label for="select"> Select Catagory </label>
                            <select class="form-select" name="catagori_id" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                               @foreach($catagories as $catagory)
                                <option value="{{$catagory->id}}">{{$catagory->name}}</option>
                                @endforeach
                                @error('catagori_id')
                                <p class="text-danger"> {{$message}}</p>
                                @enderror
                            </select>

                            <label for="fc">Blog First Content</label>
                            <textarea name="content" id="fc"  class="form-control"></textarea>
                            @error('content')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="sc">Blog Second Content</label>

                            <textarea name="contents" id="sc"  class="form-control"></textarea>
                            @error('contents')
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
