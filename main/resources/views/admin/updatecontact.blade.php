@extends('admin.layouts.app')

@section('content')


<h4 class="mb-1">Update Contact Info</h4>
<hr>

<div class="card">
    <div class="card-header text-center mb-3">
        <h4> Input Field</h4>

    </div>
    <div class="card-body p-2 px-5">
        <form action="">



            <div class="mb-3 row">
                <div class="col-sm-2">
                    <label class="form-label">Address</label>
                </div>
                <div class="col-sm-10">
                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                </div>
            </div>


            <div class="mb-3 row">
                <div class="col-sm-2">
                    <label class="form-label">Email</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-sm-2">
                    <label class="form-label">Contact Number</label>
                </div>
                <div class="col-sm-10">
                    <input type="number" class="form-control">
                </div>
            </div>


            <div class="text-center">
                <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Update</button>
            </div>
        </form>

    </div>


</div>

@endsection
