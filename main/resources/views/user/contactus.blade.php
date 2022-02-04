@extends('user.layouts.app')

@section('content')

<section class="py-5">

    <div class="container">
        <div class="headertext mb-4 p-4 text-light bg-secondary">
            <h2>
                Contact
            </h2>
        </div>
        <div id="headline ">

            <form>

                <div class="row">
                    <div class="col-12 col-sm-6  col-md-8 ">

                        <div>
                            <label for="" class="form-label">Full Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <div>
                            <label for="" class="form-label">Phone Number</label>
                            <input type="number" class="form-control">
                        </div>

                        <div>
                            <label for="" class="form-label">Email Address</label>
                            <input type="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Message</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Send Message</button>



                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <h4>Contact Details</h4>
                        <p><i class="fas fa-file-signature"></i> pranto admin</p>
                        <p><i class="fas fa-phone"></i> 01830445326</p>
                        <p><i class="fas fa-envelope-open-text"></i> pranto@gmail.com</p>
                    </div>

                </div>

            </form>

        </div>
    </div>

</section>
@endsection
