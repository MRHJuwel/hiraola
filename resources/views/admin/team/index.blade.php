@extends('admin.master')
@section('title','Team-Index')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h3>All Team Member List</h3>
                        <table class="table table-striped table-bordered table-hover table-active">
                            <tr >
                                <th> Sr No. </th>
                                <th>Name</th>
                                <th>Post</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            @foreach($teams as $team)
                                <tr class="table-content">

                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $team->name }}</td>
                                    <td>{{ $team->post }}</td>
                                    <td>{{ $team->email }}</td>

                                    <td><img src="{{$team->image}}" width="50px" height="50px" alt=""></td>
                                    <td>
                                        @php if ($team->status == 1) {echo 'Active';} else { echo 'Inactive'; }  @endphp
                                    </td>
                                    <td>
                                        @if($team->status == 1)
                                            <a href="{{route('teams.show',$team->id)}}" onclick="return confirm('Are you sure to Inactive? ')" class="btn btn-danger">Inactive</a>
                                        @else
                                            <a href="{{route('teams.show',$team->id)}}" onclick="return confirm('Are you sure to Active? ')" class="btn btn-success">Active</a>
                                        @endif

                                        <a href="{{route('teams.edit',$team->id)}}" onclick="return confirm('Are you sure to Edit? ')" class="btn btn-success">Edit</a>
                                        <form action="{{route('teams.destroy',$team->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{$team->id}}">
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
