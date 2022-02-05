<div>
    <style>
        .imagesize{
            width: 100%;
            height: 300px;
            object-fit:cover;
        }
    </style>
    <div class="container">
        <div class="headertext mb-4  p-4 text-light bg-secondary">
            <h2>
                Search <b>Donor</b>
            </h2>
        </div>
        <div id="headline">
            <form wire:submit.prevent='searchvalue()'>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 p-2">



                        <div>
                            <label class="form-label">Blood Group</label>
                            <select class="form-select" wire:model='bloodgroup' >
                                <option value="">Select</option>
                                <option value="a+">A+</option>
                                <option value="a-">A-</option>
                                <option value="b+">B+</option>
                                <option value="b-">B-</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Search</button>
            </form>


            @if (session()->has('message'))
            <div class="container">
                <div class="row">

                   @foreach ($data as $item)
                   <div class="col-12 col-sm-6 col-md-4 py-5">
                    <div class="card">
                        <img src=" {{ $item->image }}" class="card-img-top imagesize"  alt="...">
                        <div class="card-body">
                            <h5 class="card-title ">{{ $item->fullname }}</h5>
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
            </div>
            @endif




            {{-- <div class="container">
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
                            <h6 style="display: inline-block;">Blood Group0:</h6> <span> {{ $item->blood_group }}</span><br>
                        </div>
                    </div>
                </div>

                   @endforeach
                </div>
            </div> --}}
        </div>
    </div>
</div>
