@extends('admin.master')
@section('title','Shop-Index')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card w-100">
                    <div class="card-body w-100">
                        <h3>All Blogs List</h3>
                        <table class="table table-striped table-bordered table-hover table-active">
                            <tr >
                                <th> Sr No. </th>
                                <th>Name</th>
                                <th>Cata.</th>
                                <th>Ref.</th>
                                <th>EX Tax</th>
                                <th>Brands</th>
                                <th>Pro. Code</th>
                                <th>Re. Points</th>
                                <th>Desc.</th>
                                <th>In Stock</th>
                                <th>Image</th>
                                <th>Image2</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($shops as $shop)
                                <tr class="table-content">

                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $shop->name }}</td>
                                    <td> {{ $shop->catagoriShop->name }}</td>
                                    <td> {{ $shop->reerence }}</td>
                                    <td> {{ $shop->ex_tax }}</td>
                                    <td> {{ $shop->brand }}</td>
                                    <td> {{ $shop->product_code }}</td>
                                    <td> {{ $shop->reward_point }}</td>
                                    <td> {{ substr($shop->description,0,30)}}..</td>
                                    <td> @php if ($shop->in_stock != 0) { echo $shop->in_stock; } else { echo 'Stock Out';} @endphp </td>

                                    <td><img src="{{$shop->image}}" width="50px" height="50px" alt=""></td>
                                    <td><img src="{{$shop->image2}}" width="50px" height="50px" alt=""></td>
                                    <td>
                                        @php if ($shop->status == 1) {echo 'Active';} else { echo 'Inactive'; }  @endphp
                                    </td>
                                    <td>
                                        @if($shop->status == 1)
                                            <a href="{{route('shops.show',$shop->id)}}" onclick="return confirm('Are you sure to Inactive? ')" class="btn btn-danger">Inactive</a>
                                        @else
                                            <a href="{{route('shops.show',$shop->id)}}" onclick="return confirm('Are you sure to Active? ')" class="btn btn-success">Active</a>
                                        @endif

                                        <a href="{{route('shops.edit',$shop->id)}}" onclick="return confirm('Are you sure to Edit? ')" class="btn btn-success">Edit</a>
                                        <form action="{{route('shops.destroy',$shop->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{$shop->id}}">
                                            <input type="submit" class="btn btn-dark" value="Delete" onclick="return confirm('Are you sure to delete? ')">
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
