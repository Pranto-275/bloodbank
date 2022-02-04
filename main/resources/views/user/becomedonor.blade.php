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
                            <select class="form-select">
                                <option value="">Select</option>
                                <option value="">Male</option>
                                <option value="">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 p-2">
                        <div>
                            <label class="form-label">Blood Group</label>
                            <select class="form-select">
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
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
    </div>

</section>
@endsection
