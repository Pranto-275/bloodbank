@extends('user.layouts.app')

@section('content')

<section class="py-5">

    <div class="container">
        <div class="headertext mb-4 p-4 text-light bg-secondary">
            <h2>
                {{ $data->page_name  }}
            </h2>
        </div>
        <div id="headline ">
            <div class="row ">

                <div class="col-12" style="text-align: justify;">
                    {{ $data->page_details  }}
                </div>



            </div>
        </div>
    </div>

</section>

@endsection
