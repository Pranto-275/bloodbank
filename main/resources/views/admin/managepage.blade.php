@extends('admin.layouts.app')

@section('content')

<h4 class="mb-1">Manage Pages</h4>
<hr>

<div class="card">
    <div class="card-header text-center mb-3">
        <h4> Page info adding form</h4>

    </div>
    <div class="card-body p-2 px-5">
        <form action="">

            <div class="mb-3 row">
                <label class="form-label">Select Page</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <option value="">Select</option>
                        <option value="">About Page</option>
                        <option value="">Why donor</option>
                    </select>
                </div>
            </div>


            <div class="mb-3 row">
                <label class="form-label">Page Details</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add group</button>
            </div>
        </form>

    </div>


</div>



@endsection
