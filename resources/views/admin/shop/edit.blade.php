@extends('admin.master')
@section('title','Edit-Shop-Product')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h3>Edit Product of Shop</h3>
                        <form class="form-control " action="{{route('shops.update',$shop->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label for="title">Product Name</label>
                            <input type="text" id="title" name="name"  value="{{$shop->name}}" class="form-control">
                            @error('name')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="select"> Select Catagory </label>
                            <select class="form-select" name="catagori_id" aria-label="Default select example">
                                {{--                                <option selected>Open this select menu</option>--}}
                                @foreach($catagories as $catagory)
                                    <option value="{{$catagory->id}}" @php if ($shop->catagory_id == $catagory->id) { echo 'selected';}  @endphp>{{$catagory->name}}</option>
                                @endforeach

                            </select>

                            <label for="ref">Reference</label>
                            <input type="text" id="ref" name="reerence" value="{{$shop->reerence}}" class="form-control">
                            @error('reerence')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="tx">EX Tax</label>
                            <input type="text" id="tx" name="ex_tax" value="{{$shop->ex_tax}}" class="form-control">
                            @error('ex_tax')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="br">Brands</label>
                            <input type="text" id="br" name="brand" value="{{$shop->brand}}" class="form-control">
                            @error('brand')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="cd">Product Code</label>
                            <input type="text" id="cd" name="product_code" value="{{$shop->product_code}}" class="form-control">
                            @error('product_code')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="rp">Reward Points</label>
                            <input type="text" id="rp" name="reward_point" value="{{$shop->reward_point}}" class="form-control">
                            @error('reward_point')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror

                            <label for="rp">Product description</label>
                            <input type="text" id="rp" name="description" value="{{$shop->description}}" class="form-control">
                            @error('description')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror


                            <label for="is">In Stock</label>
                            <input type="number" id="slisg" name="in_stock" value="{{$shop->in_stock}}" class="form-control">
                            @error('in_stock')
                            <p class="text-danger"> {{$message}}</p>
                            @enderror
                            <br>


                            <input type="file" name="image" accept="image/png,jpg,jpeg,webp" class="form-control"><br>
                            <img src="{{asset($shop->image)}}" width="50px" height="50px" alt="">

                            <input type="file" name="image2" accept="image/png,jpg,jpeg,webp" class="form-control"><br>
                            <img src="{{asset($shop->image2)}}" width="50px" height="50px" alt="">
                            <button type="submit" class="btn btn-success w-100 "> Update Now!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
