<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('becomedonor.index') }}">
            <img src="" alt="" style="width:40px;" class="rounded-pill"> BloodBank
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('whydonor') }}">Why Become Donor</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="{{ route('becomedonor.create') }}">Become A donor</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('searchdonor') }}">Search Blood</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="{{ route('contact.create') }}">Contact Us</a>
                </li>



            </ul>

            <span class="navbar-text">

                <form  action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger text-light nav-link " >Logout</button>
                </form>
              </span>



        </div>
    </div>
</nav>
