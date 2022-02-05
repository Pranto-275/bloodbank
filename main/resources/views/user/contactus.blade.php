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

            @if (session()->has('success'))
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>{{ session('success') }}</strong>  please wait for action!
              </div>

            @endif
            <script>
              var alertList = document.querySelectorAll('.alert');
              alertList.forEach(function (alert) {
                new bootstrap.Alert(alert)
              })
            </script>


            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12 col-sm-6  col-md-8 ">

                        <div>
                            <label for="" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="fullname">
                            <span style="color: red">
                                @error('fullname')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div>
                            <label for="" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" name="mobile">
                            <span style="color: red">
                                @error('mobile')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div>
                            <label for="" class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email">
                            <span style="color: red">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="" cols="30" rows="5"></textarea>
                            <span style="color: red">
                                @error('message')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <button type="submit" class="btn btn-primary">Send Message</button>



                    </div>
                    <div class="col-12 col-sm-6 col-md-4">
                        <h4>Contact Details</h4>
                        <p><i class="fas fa-id-card"></i> {{ $data->name }}</p>
                        <p><i class="fas fa-phone"></i> 01830445326</p>
                        <p><i class="fas fa-envelope-open-text"></i> {{ $data->email }}</p>
                    </div>

                </div>

            </form>

        </div>
    </div>

</section>
@endsection
