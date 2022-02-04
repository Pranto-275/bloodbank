<section>
    <div class="headertext text-center text-dark my-4">
        <h2>
            Donor List
        </h2>
    </div>
    <div class="container">
        <div class="row">

            @foreach ($data as $item)
            <div class="col-12 col-sm-6 col-md-4 py-5">
                <div class="card">
                    <img src="images/admin.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->fullname }}</h5>
                        <h6 style="display: inline-block;">Mobile:</h6> <span> {{ $item->mobile }}</span><br>
                        <h6 style="display: inline-block;">Email:</h6> <span> {{ $item->email }}</span><br>
                        <h6 style="display: inline-block;">Gender:</h6> <span> {{ $item->gender }}</span><br>
                        <h6 style="display: inline-block;">Address:</h6> <span> {{ $item->address }}</span><br>
                        <h6 style="display: inline-block;">Blood Group:</h6> <span> {{ $item->blood_group }}</span><br>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
        {{ $data->links('pagination::bootstrap-4') }}
    </div>
</section>
