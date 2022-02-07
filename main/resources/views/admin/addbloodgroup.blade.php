@extends('admin.layouts.app')

@section('content')
<h4 class="mb-1">Blood Group</h4>
            <hr>

            @if(session()->has('success'))
             <div class="alert alert-success alert-dismissible fade show" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
               <strong>Blood Group Added</strong> Please See list!!😄
             </div>

             <script>
               $(".alert").alert();
             </script>
            @endif
            <div class="card">
                <div class="card-header text-center">
                    <h4> Add Blood Group</h4>

                </div>
                <div class="card-body text-dark">
                    <form action="{{ route('bloodgroup.store') }}" method="POST">
                        @csrf
                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label"><b>Add Blood Group</b></label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="bloodgroup" value="{{ old('bloodgroup') }}">
                            </div>
                            @error('bloodgroup')
                            <span style="color: red">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Add group</button>
                        </div>


                    </form>
                </div>
            </div>



@endsection
