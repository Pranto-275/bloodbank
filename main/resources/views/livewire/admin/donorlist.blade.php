<div>

    @if (session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Successfully Disabled</strong>
        </div>

        <script>
          $(".alert").alert();
        </script>
    @endif

    @if (session()->has('successfullyactivated'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>Successfully Activated</strong>
      </div>

      <script>
        $(".alert").alert();
      </script>
    @endif


<div class="card">
    <div class="card-header text-center mb-3">
        <h4> Listed blood Group</h4>

    </div>
    <div class="card-body p-2">
        <!-- data table -->
        <table id="example" class="table table-striped table-bordered " style="width:100%">
            <thead>
                <tr>
                    <th>S No</th>
                    <th>Name</th>
                    <th>Mobile No</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Blood Group</th>
                    <th>Address</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
               @foreach ($data as $item)
               <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->fullname }}</td>
                <td>{{ $item->mobile }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->age }}</td>
                <td>{{ $item->gender }}</td>
                <td>{{ $item->blood_group }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->message }}</td>
                <td>
                    @if ($item->status==0)
                    Hidden
                    @else
                    Show
                    @endif
                </td>
                <td class="text-center">
                   @if ($item->status==1)
                   <button type="button" class="btn btn-success" wire:click='inactivestatus({{ $item->id }})'>    <i class="fas fa-eye"></i>

                   </button>
                   @else
                   <button type="button" class="btn btn-warning" wire:click='activestatus({{ $item->id }})'><i class='fas fa-low-vision'></i>
                   </button>
                   @endif
                </td>
            </tr>
               @endforeach


            </tbody>
        </table>
    </div>

    <!-- END data table -->

</div>
</div>
