@extends('admin.layouts.app')

@section('content')
<h4 class="mb-1">Add Donor</h4>
            <hr>

            <div class="card">
                <div class="card-header text-center mb-3">
                    <h4> Donor Info</h4>

                </div>
                <div class="card-body px-5">
                    <!-- data table -->
                    <form>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 p-2">

                                <div>
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control">
                                </div>


                            </div>
                            <div class="col-12 col-sm-6 col-md-4 p-2">
                                <div>
                                    <label class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 p-2">
                                <div>
                                    <label class="form-label">Email Id</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 p-2">

                                <div>
                                    <label class="form-label">age</label>
                                    <input type="number" class="form-control">
                                </div>


                            </div>
                            <div class="col-12 col-sm-6 col-md-4 p-2">
                                <div>
                                    <label class="form-label">Gender</label>
                                    <select class="form-control">
                                        <option value="">Select</option>
                                        <option value="">Male</option>
                                        <option value="">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 p-2">
                                <div>
                                    <label class="form-label">Blood Group</label>
                                    <select class="form-control">
                                        <option value="">Select</option>
                                        <option value="">A+</option>
                                        <option value="">A-</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 p-2">

                                <div>
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" name="" id="" cols="30" rows="2"></textarea>
                                </div>


                            </div>
                            <div class="col-12 col-sm-6 col-md-8 p-2">
                                <div>
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" name="" id="" cols="30" rows="2"></textarea>
                                </div>
                            </div>

                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Update</button>
                        </div>
                    </form>
                </div>

                <!-- END data table -->

            </div>

@endsection
