<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 py-lg-2">
      <div class="container"><a class="navbar-brand py-3 d-flex align-items-center" href="#"><img src="{{ asset('frontend/img/logo/police-logo.png') }}" alt="" width="30"><span class="text-uppercase text-small font-weight-bold text-dark ml-2 mb-0">ZAlert</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                  <!-- Navbar link--><a class="nav-link" href="{{ route('home') }}">home page</a>
            </li>
            <li class="nav-item">
                  <!-- Navbar link--><a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
                  <!-- Navbar link--><a class="nav-link" href="{{ route('expatriate') }}">Expert Help</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">service</a>
              <div class="dropdown-menu mt-lg-3">
                <a class="dropdown-item" href="{{ route('general.diary') }}">General diary</a>
                <a class="dropdown-item" href="{{ route('complaint') }}">complaint</a>
                <a class="dropdown-item" href="{{ route('casestatus') }}">Status of the case</a>
                <a class="dropdown-item" href="{{ route('policestation') }}">police station</a>
                <a class="dropdown-item" href="{{ route('helpline') }}">All help lines</a>
                {{-- <a class="dropdown-item" href="detail.html">Detail</a> --}}
            </div>
            </li>
            {{-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
              <div class="dropdown-menu mt-lg-3">
                <a class="dropdown-item" href="index.html">Login</a>
                <a class="dropdown-item" href="category.html">Create Account</a>

            </div>
            </li> --}}
            {{-- <li class="nav-item ml-lg-2 py-2 py-lg-0"><a class="btn btn-primary" href="#listingModal" data-toggle="modal">Add listing</a></li> --}}
          </ul>
        </div>
      </div>
    </nav>
  </header>
