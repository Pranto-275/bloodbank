@extends('user.layouts.app')



@section('content')


<section class="py-5">

    <div class="container">
        <div class="headertext mb-4  p-4 text-light bg-secondary">
            <h2>
                Become a <b>Donor</b>
            </h2>
        </div>
        <div id="headline ">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Donor Added</strong> Please wait for the admin approval!
            </div>
            @endif

            <form action="{{ route('becomedonor.store') }}" method="POST">
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
                    <div class="col-12 col-sm-6 col-md-8 p-2">
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

                </div>
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
    </div>

</section>
@endsection