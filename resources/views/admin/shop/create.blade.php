@extends('admin.master')
@section('title','Create-Shop-Product')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3>Add a new Product of Shop</h3>
                        <form class="form-control " action="{{route('shops.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="title">Product Name</label>
                            <input type="text" id="title" name="name" placeholder="input text only" class="form-control">
                            @error('name')
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

                            <label for="ref">Reference</label>
                            <input type="text" id="ref" name="reerence" placeholder="input text only" class="form-control">
                            @error('reerence')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                             <label for="tx">EX Tax</label>
                            <input type="text" id="tx" name="ex_tax" placeholder="input text only" class="form-control">
                            @error('ex_tax')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="br">Brands</label>
                            <input type="text" id="br" name="brand" placeholder="input text only" class="form-control">
                            @error('brand')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="cd">Product Code</label>
                            <input type="text" id="cd" name="product_code" placeholder="input text only" class="form-control">
                            @error('product_code')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="rp">Reward Points</label>
                            <input type="text" id="rp" name="reward_point" placeholder="input text only" class="form-control">
                            @error('reward_point')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="ds">Product description</label>
                            <textarea id="ds" name="description" placeholder="input text only" class="form-control"></textarea>
                            @error('description')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror


                            <label for="is">In Stock</label>
                            <input type="number" id="slisg" name="in_stock" placeholder="input text only" class="form-control">
                            @error('in_stock')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                            <br>


                            <input type="file" name="image" accept="image/png,jpg,jpeg,webp" class="form-control"><br>
                            <input type="file" name="image2" accept="image/png,jpg,jpeg,webp" class="form-control"><br>
                            <button type="submit" class="btn btn-success w-100 "> Add Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
