@extends('admin.master')
@section('title','Edit-Blog')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3>Edit a  Blog post</h3>
                        <form class="form-control " action="{{route('blogs.update',$blogs->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label for="title">Blog Title</label>
                            <input type="text" id="title" name="title" value="{{$blogs->title}}" placeholder="input text only" class="form-control">
                            @error('name')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="slg">Blog Slug</label>
                            <input type="text" id="slg" name="slug" value="{{$blogs->slug}}" placeholder="input text only" class="form-control">
                            @error('slug')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                            <label for="select"> Select Catagory </label>
                            <select class="form-select" name="catagori_id" aria-label="Default select example">
{{--                                <option selected>Open this select menu</option>--}}
                                @foreach($catagories as $catagory)
                                    <option value="{{$catagory->id}}" @php if ($blogs->catagory_id == $catagory->id) { echo 'selected';}  @endphp>{{$catagory->name}}</option>
                                @endforeach

                            </select>
                            <label for="fc">Blog First Content</label>
                            <textarea name="content" id="fc"  class="form-control">{{$blogs->content}}</textarea>
                            @error('content')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="sc">Blog Second Content</label>

                            <textarea name="contents" id="sc"  class="form-control">{{$blogs->contents}}</textarea>
                            @error('contents')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <input type="file" name="image" accept="image/png,jpg,jpeg,webp" class="form-control"><br>
                            <img src="{{asset($blogs->image)}}" height="50px" width="50px" alt=""><br><br>

                            <button type="submit" class="btn btn-success w-100 "> Add Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
