@extends('admin.layouts.app')

@section('content')


<h4 class="mb-1">Manage Blood Group</h4>
<hr>

<div class="card">
    <div class="card-header text-center mb-3">
        <h4> Listed blood Group</h4>

    </div>
    <div class="card-body p-2">
        <!-- data table -->
        <table id="example" class="table table-striped table-bordered " style="width:100%">
            <thead>
                <tr>
                    <th>S No</th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Added By</th>
                    <th>Date</th>


                </tr>
            </thead>
            <tbody>


               @foreach ($data as $item)
               <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->fullname }}</td>
                <td>{{ $item->mobile }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->message }}</td>
                <td>{{ $item->addby }}</td>
                <td>{{ $item->created_at }}</td>
            </tr>
`
               @endforeach
            </tbody>
        </table>
    </div>

    <!-- END data table -->

</div>



@endsection
