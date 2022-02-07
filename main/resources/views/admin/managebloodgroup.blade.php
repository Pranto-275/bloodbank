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
                    <th>Blood Group</th>
                    <th>Creation Date</th>

                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td class="text-center">
                        <button class="btn btn-danger"> <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>

                    <td class="text-center">
                        <button class="btn btn-danger"> <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>pxon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>

                    <td class="text-center">
                        <button class="btn btn-danger"> <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- END data table -->

</div>



@endsection
