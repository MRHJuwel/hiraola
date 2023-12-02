@extends('admin.master')
@section('title','Contact lists')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h3>All Contacts List</h3>
                        <table class="table table-striped table-bordered table-hover table-active">
                            <tr >
                                <th> Sr No. </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Status</th>


                            </tr>
                            @foreach($contacts as $contact)
                                <tr class="table-content">

                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $contact->con_name }}</td>
                                    <td> {{ $contact->con_email }}</td>
                                    <td> {{ $contact->con_subject }}</td>
                                    <td> {{ $contact->con_message }}</td>
                                    <td>
                                        @php if ($contact->status == 1) {echo 'Active';} else { echo 'Inactive'; }  @endphp
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
