<div class="wrapper d-flex align-items-stretch">
<nav id="sidebar">
    <div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/admin.jpg);"></a>
        <ul class="list-unstyled components mb-5">

            <li class="active">
                <a href="{{ route('adminhome') }}"> <i class="fas fa-tachometer-alt pr-2"></i> Dashboard</a>
            </li>

            <li>
                <a href="#blood" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-layer-group pr-2"></i> Blood Group</a>
                <ul class="collapse list-unstyled" id="blood">
                    <li>
                        <a href="{{ route('addbloodgroup') }}"><i class="fas fa-plus-circle pr-2"></i> Add Blood Group</a>
                    </li>
                    <li>
                        <a href="{{ route('managebloodgroup') }}"><i class="fas fa-tasks pr-2"></i> Manage Blood Group</a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="{{ route('adddonor') }}"><i class="fas fa-hands-helping pr-2"></i> Add Donor</a>
            </li>


            <li>
                <a href="{{ route('donorlist') }}"><i class="fas fa-users pr-2"></i>Donor List</a>
            </li>


            <li>
                <a href="{{ route('managequery') }}"><i class="fas fa-users pr-2"></i>Manage Query</a>
            </li>


            <li>
                <a href="{{ route('managepage') }}"><i class="fas fa-question-circle pr-2"></i> Manage Page</a>
            </li>


            <li>
                <a href="{{ route('updatecontact') }}"><i class="fas fa-id-card pr-2"></i> Update Contact Info</a>

            </li>
            <li class="mt-5">


                 <form  action="{{ route('logout') }}" method="POST">
                  @csrf
                    <button type="submit" class="btn btn-danger btn-sm btn-block">Logout</button>
                 </form>






            </li>
        </ul>


    </div>
</nav>
