{{-- <nav class="navbar navbar-expand-lg bg-warning rounded mt-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/user/dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/user/special-class">Special Class</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/user/basic-class">Basic Class</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/user/bootcamp">Bootcamp</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <ul>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Account
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="{{route('logout-user')}}">Log out</a></li>
                </ul>
            </li>
        </ul>
      </form>
    </div>
  </div>
</nav> --}}

<!-- Header start -->
<header class="header-absolute header-3">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="custom-container container">
            <a class="navbar-brand m-0" href="index.html">
                <img src="{{asset('assets/images/logo/logo.png')}}" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/user/dashboard')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/user/basic-class')}}">Basic Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('user/special-class')}}">Special Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-secondary" href="{{url('user/your-purchase')}}">
                          <i class="fa-solid me-2 fa-cart-shopping"></i>
                          Your Purchase
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#review"></a>
                    </li>
                </ul>
            </div>
            <a href="{{route('logout-user')}}"
                class="btn btn-danger d-none d-md-block">Log out
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </nav>
</header>
