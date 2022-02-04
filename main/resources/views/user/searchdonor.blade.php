@extends('user.layouts.app')

@section('content')
<section class="py-5">

    <div class="container">
        <div class="headertext mb-4  p-4 text-light bg-secondary">
            <h2>
                Search <b>Donor</b>
            </h2>
        </div>
        <div id="headline">
            <form>
                <div class="row">
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
                    <div class="col-12 col-sm-6 col-md-4 p-2">

                        <div>
                            <label class="form-label">Address</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="2"></textarea>
                        </div>

                    </div>

                </div>
                <button class="btn btn-success" type="submit">Search</button>
            </form>


            <div class="container">
                <div class="row">

                    <div class="col-12 col-sm-6 col-md-4 py-5">
                        <div class="card">
                            <img src="images/admin.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 style="display: inline-block;">Mobile:</h6> <span> 01830445326</span><br>
                                <h6 style="display: inline-block;">Email:</h6> <span> pranto@gmail.com</span><br>
                                <h6 style="display: inline-block;">Gender:</h6> <span> male</span><br>
                                <h6 style="display: inline-block;">Address:</h6> <span> kashimpur</span><br>
                                <h6 style="display: inline-block;">Blood Group0:</h6> <span> B+</span><br>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 py-5">
                        <div class="card ">
                            <img src="images/admin.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 style="display: inline-block;">Mobile:</h6> <span> 01830445326</span><br>
                                <h6 style="display: inline-block;">Email:</h6> <span> pranto@gmail.com</span><br>
                                <h6 style="display: inline-block;">Gender:</h6> <span> male</span><br>
                                <h6 style="display: inline-block;">Address:</h6> <span> kashimpur</span><br>
                                <h6 style="display: inline-block;">Blood Group0:</h6> <span> B+</span><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 py-5">
                        <div class="card">
                            <img src="images/admin.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <h6 style="display: inline-block;">Mobile:</h6> <span> 01830445326</span><br>
                                <h6 style="display: inline-block;">Email:</h6> <span> pranto@gmail.com</span><br>
                                <h6 style="display: inline-block;">Gender:</h6> <span> male</span><br>
                                <h6 style="display: inline-block;">Address:</h6> <span> kashimpur</span><br>
                                <h6 style="display: inline-block;">Blood Group0:</h6> <span> B+</span><br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

@endsection
