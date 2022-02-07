@extends('admin.layouts.app')

@section('content')

<h4 class="mb-1">Manage Blood Group</h4>
<hr>

@if(session()->has('success'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <strong>Deleted</strong>
</div>

<script>
  $(".alert").alert();
</script>
@endif

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
                    <th>Blood Group</th>
                    <th>Creation Date</th>

                    <th>Action</th>

                </tr>
            </thead>
            <tbody>


                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->blood_group }}</td>
                    <td>{{ $item->created_at }}</td>


                    <td class="text-center">
                      <form action="{{ route('bloodgroup.destroy',$item->id) }}" method="POST">
                        @csrf
                        @method('Delete')
                        <button type="submit" class="btn btn-danger"> <i class="fas fa-trash-alt"></i>
                        </button>
                      </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <!-- END data table -->

</div>



@endsection
