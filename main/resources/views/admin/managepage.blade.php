@extends('admin.layouts.app')

@section('content')

<h4 class="mb-1">Manage Pages</h4>
<hr>

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <strong>Added</strong> Page Details successfully added!!
</div>
@endif

<div class="card">
    <div class="card-header text-center mb-3">
        <h4> Page info adding form</h4>

    </div>
    <div class="card-body p-2 px-5">
        <form action="{{ route('managepage.store') }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label class="form-label">Select Page</label>
                <div class="col-sm-10">
                    <select class="form-control" name="page">
                        <option value="">Select</option>
                        <option value="aboutpage">About Page</option>
                        <option value="whydonorpage">Why donor</option>
                    </select>
                </div>
                <span style="color: red">
                    @error('page')
                        {{ $message }}
                    @enderror
                </span>
            </div>


            <div class="mb-3 row">
                <label class="form-label">Page Details</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="details" id="" cols="30" rows="5">{{ old('details') }} </textarea>
                </div>
                <span style="color: red">
                    @error('details')
                        {{ $message }}
                    @enderror
                </span>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add group</button>
            </div>
        </form>

    </div>


</div>



@endsection
