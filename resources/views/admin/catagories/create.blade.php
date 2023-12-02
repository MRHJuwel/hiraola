@extends('admin.master')
@section('title','Create-Catagory')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 offset-md-3">
               <div class="card">
                   <div class="card-body">
                       <h3>Add a new Catagory Name</h3>
                       <form class="form-control " action="{{route('catagories.store')}}" method="post">
                           @csrf
                           <label for="cname">Catagory Name</label>
                           <input type="text" id="cname" name="name" placeholder="input text only" class="form-control">
                           @error('name')
                           <p class="text-danger"> {{$message}}</p>
                           @enderror

                           <button type="submit" class="btn btn-success w-100"> Add Now!</button>
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection
