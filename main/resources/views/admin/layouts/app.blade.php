<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">
   <link rel="stylesheet" href="{{ asset('admin/css/all.css') }}">
   <link rel="stylesheet" href="{{ asset('css/all.css') }}">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/admin.jpg);"></a>
                <ul class="list-unstyled components mb-5">

                    <li class="active">
                        <a href="dashboard.html"> <i class="fas fa-tachometer-alt pr-2"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="#blood" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-layer-group pr-2"></i> Blood Group</a>
                        <ul class="collapse list-unstyled" id="blood">
                            <li>
                                <a href="addbloodgroups.html"><i class="fas fa-plus-circle pr-2"></i> Add Blood Group</a>
                            </li>
                            <li>
                                <a href="managebloodgroup.html"><i class="fas fa-tasks pr-2"></i> Manage Blood Group</a>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="adddonor.html"><i class="fas fa-hands-helping pr-2"></i> Add Donor</a>
                    </li>


                    <li>
                        <a href="donorlist.html"><i class="fas fa-users pr-2"></i>Donor List</a>
                    </li>


                    <li>
                        <a href="mangequery.html"><i class="fas fa-users pr-2"></i>Manage Query</a>
                    </li>


                    <li>
                        <a href="mangepages.html"><i class="fas fa-question-circle pr-2"></i> Manage Page</a>
                    </li>


                    <li>
                        <a href="updatecontactinfo.html"><i class="fas fa-id-card pr-2"></i> Update Contact Info</a>

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

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <h5>Blood Donation Management System</h5>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </nav>

            <h4 class="mb-1">Dashboard</h4>
            <hr>

            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-body bg-dark text-light text-center textcolor">
                            <h4> 6 </h4>
                            <h6>LISTED BLOOD GROUPS</h6>

                        </div>
                        <div class="card-footer">
                            Full Details
                        </div>

                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-body  bg-success text-light text-center textcolor">
                            <h4> 6 </h4>
                            <h6>LISTED BLOOD GROUPS</h6>

                        </div>
                        <div class="card-footer">
                            Full Details
                        </div>

                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card">
                        <div class="card-body  bg-info text-light text-center textcolor">
                            <h4> 6 </h4>
                            <h6>LISTED BLOOD GROUPS</h6>

                        </div>
                        <div class="card-footer">
                            Full Details
                        </div>

                    </div>
                </div>


            </div>




        </div>
    </div>

    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>



</body>

</html>
