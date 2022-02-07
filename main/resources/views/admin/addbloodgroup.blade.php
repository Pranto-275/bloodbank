@extends('admin.layouts.app')

@section('content')
<h4 class="mb-1">Blood Group</h4>
            <hr>

            <div class="card">
                <div class="card-header text-center">
                    <h4> Add Blood Group</h4>

                </div>
                <div class="card-body text-dark">
                    <form action="">
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><b>Add Blood Group</b></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add group</button>
                        </div>


                    </form>
                </div>
            </div>



@endsection
