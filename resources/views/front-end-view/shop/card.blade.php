@extends('front-end-view.master')
@section('title','Card')
@section('content')
    <!-- Begin Hiraola's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Other</h2>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Cart</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Hiraola's Breadcrumb Area End Here -->
    <!-- Begin Hiraola's Cart Area -->
    <div class="hiraola-cart-area">
        <div class="container">
            <div class="row">
                <div class="col-12">

                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="hiraola-product-remove">remove</th>
                                    <th class="hiraola-product-thumbnail">images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="hiraola-product-price">Unit Price</th>
                                    <th class="hiraola-product-quantity">Quantity</th>
                                    <th class="hiraola-product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($updateCards as $updateCard )


                                <tr>


                                    <td class="hiraola-product-remove">
                                            <form action="{{route('cardUpdates.destroy',$updateCard->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('are you sure to delete it?')"><i class="fa fa-trash" title="Remove"></i></button>
                                            </form>
                                           </td>
                                    <td class="hiraola-product-thumbnail"><a href=""><img width="50px" height="50px" src="{{asset($updateCard->image)}}" alt="Hiraola's Cart Thumbnail"></a></td>
                                    <td class="hiraola-product-name"><a href="">{{$updateCard->name}}</a></td>
                                    <td class="hiraola-product-price"><span class="amount">{{$updateCard->ex_tax}}</span></td>
                                    <td class="quantity">
                                        <form action="{{route('cardUpdates.update',$updateCard->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="id" value="{{$updateCard->id}}">
                                            <input type="hidden" name="productId" value="{{$updateCard->productId}}">
                                            <input type="hidden" name="image" value="{{$updateCard->image}}">
                                            <input type="hidden" name="name" value="{{$updateCard->name}}">
                                            <input type="hidden" name="ex_tax" value="{{$updateCard->ex_tax}}">
                                            <input type="hidden" name="userId" value="{{$updateCard->userId}}">

                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" name="quantity" value="{{$updateCard->quantity}}" type="text" >
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>

                                            <input class="cart-plus-minus-box" name="totals" value="{{$updateCard->totals}}" type="hidden" >
                                            <input class="button"  value="Update carts" type="submit">

                                        </form>
                                    </td>

                                     <td class="product-subtotal"><span class="">{{$updateCard->totals}}</span></td>

                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="coupon-all">
{{--                                    <div class="coupon">--}}
{{--                                        <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">--}}
{{--                                        <input class="button" name="apply_coupon" value="Apply coupon" type="submit">--}}
{{--                                    </div>--}}
                                    <div class="coupon2">
{{--                                        <input class="button"  value="Update carts" type="submit">--}}
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 ml-auto ">
                                <div class="cart-page-total ">
                                    <h2>Cart totals</h2>
                                    <ul>


                                        @php $i=0;
                                       foreach ($updateCards as $updateCard)
                                        {
                                            $i+=$updateCard->totals; @endphp
                                            <li>{{$updateCard->name}} <span>{{$i}}</span></li> @php
                                        }

                                        @endphp
                                            <li class="bg-success text-white">Total <span> = ${{ $i }}</span></li>

                                    </ul>


                                </div>
                            </div>
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Percess Details</h2>

                                    <form action="{{route('stripe')}}"  >

                                        @foreach($updateCards as $updateCard)
                                        <input type="hidden" name="userId" value="{{$updateCard->userId}}">

                                        <input type="hidden" name="productId" value="{{$updateCard->productId}}">
                                        @endforeach
                                        <input type="hidden" name="bill" value="{{$i}}">
                                        <label for="Address">Address</label>
                                        <textarea  id="Address" name="address" class="form-control" required> </textarea>
                                        <label for="fname">Full Name</label>
                                        <input type="text" id="fname" name="fullname" class="form-control" required>
                                        <label for="phone">Phone</label>
                                        <input type="text" id="phone" name="phone" class="form-control" required>
                                        <br>
                                        <input type="submit" class="btn btn-success form-control" value="Proceed to checkout">
                                    </form>


                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Hiraola's Cart Area End Here -->
@endsection
