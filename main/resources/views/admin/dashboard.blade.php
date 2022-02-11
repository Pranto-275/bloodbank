@extends('admin.layouts.app')

@section('content')
<h4 class="mb-1">Dashboard</h4>
<hr>

<div class="row">
    <div class="col-12 col-sm-6 col-md-4">
        <div class="card">
            <div class="card-body bg-dark text-light text-center textcolor">
                <h4> {{ $group }} </h4>
                <h6>LISTED BLOOD GROUPS</h6>

            </div>

        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4">
        <div class="card">
            <div class="card-body  bg-success text-light text-center textcolor">
                <h4> {{ $donor }} </h4>
                <h6>LISTED Donor</h6>

            </div>


        </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4">
        <div class="card">
            <div class="card-body  bg-info text-light text-center textcolor">
                <h4> {{ $query }} </h4>
                <h6>Totall Query</h6>

            </div>


        </div>
    </div>


</div>


@endsection
