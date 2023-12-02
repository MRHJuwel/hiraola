@extends('admin.master')
@section('title','Catagory-Index')
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
                                <th>Title</th>
                                <th>Catagory</th>
                                <th>Content-1</th>
                                <th>Content-2</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($blogs as $blog)
                                <tr class="table-content">

                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $blog->title }}</td>
                                    <td>{{ $blog->catagory->name }}</td>

                                    <td>{{substr( $blog->content,0,40)}}...</td>
                                    <td>{{substr( $blog->contents,0,40)}}...</td>

                                    <td><img src="{{$blog->image}}" width="50px" height="50px" alt=""></td>
                                    <td>
                                        @php if ($blog->status == 1) {echo 'Active';} else { echo 'Inactive'; }  @endphp
                                    </td>
                                    <td>
                                        @if($blog->status == 1)
                                            <a href="{{route('blogs.show',$blog->id)}}" onclick="return confirm('Are you sure to Inactive? ')" class="btn btn-danger">Inactive</a>
                                        @else
                                            <a href="{{route('blogs.show',$blog->id)}}" onclick="return confirm('Are you sure to Active? ')" class="btn btn-success">Active</a>
                                        @endif

                                        <a href="{{route('blogs.edit',$blog->id)}}" onclick="return confirm('Are you sure to Edit? ')" class="btn btn-success">Edit</a>
                                        <form action="{{route('blogs.destroy',$blog->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{$blog->id}}">
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
