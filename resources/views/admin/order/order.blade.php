@extends('admin.master')
@section('title','Customer Order Lists')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h3>All Order List</h3>
                        <table class="table table-striped table-bordered table-hover table-active">
                            <tr >
                                <th> Sr No. </th>
                                <th>Full Name</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Bill</th>
                                <th>Action</th>
                            </tr>
                            @foreach($orders as $order)
                                <tr class="table-content">

                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $order->fullname }}</td>
                                    <td> {{ $order->phone }}</td>
                                    <td> {{ substr($order->address,0,40) }}... </td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->bill }}</td>

                                    <td>
                                        @if($order->status == 'pending')
                                            <a href="{{route('order.pending',$order->id)}}" onclick="return confirm('Product has been deliver? ')" class="btn btn-danger"> Pending </a>
                                        @else
                                            <a href="{{route('order.pending',$order->id)}}" onclick="return confirm('Product has not been deliver? ')" class="btn btn-success">Completed</a>
                                        @endif

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
