@extends('admin.master')
@section('title','Slider-Index')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h3>All Blogs List</h3>
                        <table class="table table-striped table-bordered table-hover table-active">
                            <tr >
                                <th> Sr No. </th>
                                <th>Offer Time</th>
                                <th>Title</th>
                                <th>Title-2</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($sliders as $slider)
                                <tr class="table-content">

                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $slider->offer_time }}</td>
                                    <td> {{ $slider->title }}</td>
                                    <td> {{ $slider->title_2 }}</td>
                                    <td> {{ $slider->price }}</td>

                                    <td><img src="{{$slider->image}}" width="50px" height="50px" alt=""></td>
                                    <td>
                                        @php if ($slider->status == 1) {echo 'Active';} else { echo 'Inactive'; }  @endphp
                                    </td>
                                    <td>
                                        @if($slider->status == 1)
                                            <a href="{{route('sliders.show',$slider->id)}}" onclick="return confirm('Are you sure to Inactive? ')" class="btn btn-danger">Inactive</a>
                                        @else
                                            <a href="{{route('sliders.show',$slider->id)}}" onclick="return confirm('Are you sure to Active? ')" class="btn btn-success">Active</a>
                                        @endif

                                        <a href="{{route('sliders.edit',$slider->id)}}" onclick="return confirm('Are you sure to Edit? ')" class="btn btn-success">Edit</a>
                                        <form action="{{route('sliders.destroy',$slider->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{$slider->id}}">
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
