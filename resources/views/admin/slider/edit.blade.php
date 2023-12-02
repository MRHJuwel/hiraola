@extends('admin.master')
@section('title','Edit-Slider')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3>Add a new Slider</h3>
                        <form class="form-control " action="{{route('sliders.update',$slider->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label for="title">Offer time</label>
                            <input type="text" id="title" name="offer_time" value="{{$slider->offer_time}}" class="form-control">
                            @error('offer_time')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="slg">Title</label>
                            <input type="text" id="slg" name="title" value="{{$slider->title}}" class="form-control">
                            @error('title')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="tl">Title-2</label>
                            <input type="text" id="tl" name="title_2" value="{{$slider->title_2}}" class="form-control">
                            @error('title_2')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="pr">Price</label>
                            <input type="text" id="pr" name="price" value="{{$slider->price}}" class="form-control">
                            @error('price')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror <br>

                            <input type="file" name="image" accept="image/png,jpg,jpeg,webp" class="form-control"><br>
                            <img src="{{asset($slider->image)}}" width="50px" height="50px" alt=""> <br/> <br/>
                            <button type="submit" class="btn btn-success w-100 "> Update Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
