@extends('admin.master')
@section('title','Catagory-Index')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
             <div class="card">
                 <div class="card-body">
                     <h3>All Catagories List</h3>
                     <table class="table table-striped table-bordered table-hover table-active">
                         <tr >
                         <th> Sr No. </th>
                         <th>Name</th>
                         <th>Status</th>
                         <th>Action</th>
                         </tr>
                         @foreach($catagories as $catagory)
                         <tr class="table-content">

                             <td>{{ $loop->iteration }}</td>
                             <td> {{ $catagory->name }}</td>
                             <td>
                              @php if ($catagory->status == 1) {echo 'Active';} else { echo 'Inactive'; }  @endphp
                             </td>
                             <td>
                                @if($catagory->status == 1)
                                     <a href="{{route('catagories.show',$catagory->id)}}" onclick="return confirm('Are you sure to Inactive? ')" class="btn btn-danger">Inactive</a>
                                 @else
                                     <a href="{{route('catagories.show',$catagory->id)}}" onclick="return confirm('Are you sure to Active? ')" class="btn btn-success">Active</a>
                                 @endif

                                 <a href="{{route('catagories.edit',$catagory->id)}}" onclick="return confirm('Are you sure to Edit? ')" class="btn btn-success">Edit</a>
                                    <form action="{{route('catagories.destroy',$catagory->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{$catagory->id}}">
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
