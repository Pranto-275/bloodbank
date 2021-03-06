@extends('admin.layouts.app')

@section('content')
<h4 class="mb-1">Add Donor</h4>
            <hr>

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Donor Added</strong> Please wait for the admin approval!
            </div>
            @endif

            <div class="card">
                <div class="card-header text-center mb-3">
                    <h4> Donor Info</h4>

                </div>
                <div class="card-body px-5">
                    <!-- data table -->
                    <form action="{{ route('adddonor.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 p-2">

                                <div>
                                    <label class="form-label">Full Name</label>
                                    <input type="text" class="form-control" name="fullname">
                                    <span style="color: red">
                                        @error('fullname')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>


                            </div>
                            <div class="col-12 col-sm-6 col-md-4 p-2">
                                <div>
                                    <label class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile">
                                    <span style="color: red">
                                        @error('mobile')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 p-2">
                                <div>
                                    <label class="form-label">Email Id</label>
                                    <input type="email" class="form-control" name="email">
                                    <span style="color: red">
                                        @error('email')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 p-2">

                                <div>
                                    <label class="form-label">age</label>
                                    <input type="number" class="form-control" name="age">
                                    <span style="color: red">
                                        @error('age')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>


                            </div>
                            <div class="col-12 col-sm-6 col-md-4 p-2">
                                <div>
                                    <label class="form-label">Gender</label>
                                    <select class="form-select" name="gender">
                                        <option value="">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    <span style="color: red">
                                        @error('gender')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 p-2">
                                <div>
                                    <label class="form-label">Blood Group</label>
                                    <select class="form-select" name="bloodgroup">
                                        <option value="">Select</option>
                                        <option value="a+">A+</option>
                                        <option value="a-">A-</option>
                                        <option value="b+">B+</option>
                                        <option value="b-">B-</option>
                                    </select>
                                    <span style="color: red">
                                        @error('bloodgroup')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 p-2">

                                <div>
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" name="address" id="" cols="30" rows="2"></textarea>
                                    <span style="color: red">
                                        @error('address')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>


                            </div>
                            <div class="col-12 col-sm-6 col-md-4 p-2">
                                <div>
                                    <label class="form-label">Message</label>
                                    <textarea class="form-control" name="message" id="" cols="30" rows="2"></textarea>
                                    <span style="color: red">
                                        @error('message')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-md-4 p-2">
                                <div>
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                    <span style="color: red">
                                        @error('image')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                        </div>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </form>
                </div>

                <!-- END data table -->

            </div>

@endsection
