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
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/basic-class')}}">Basic Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/special-class')}}">Special Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/private-class')}}">Private Class</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#plan"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#review"></a>
                    </li>
                </ul>
            </div>
            @if (!Auth::user())
                <a href="{{route('login-user')}}"
                {{-- <a href="#" --}}
                    class="btn btn-primary d-none d-md-block">Sign in
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            @else
                <a href="{{route('user-dashboard')}}"
                    class="btn btn-success d-none d-md-block">Your Dashboard
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            @endif
            
        </div>
    </nav>
</header>
