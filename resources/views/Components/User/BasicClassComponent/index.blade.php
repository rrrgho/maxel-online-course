<section class="category-style-1 mt-5">
    <div class="container">

        @if (Session::has('success'))
            <div class="row mb-10 mt-5">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Thank you!</strong> {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        <!-- Banner section start -->
        <section class="banner-style-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="banner-box">
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="banner-content">
                                        <h3>Thank you for becoming our Subscriber !</h3>
                                        <p class="txt-light">
                                            Your subscribtion is active and will end at {{Auth::user()->basic_user->expired_date}}
                                        </p>
                                        {{-- <ul class="banner-list">
                                            <li>
                                                <div class="list-box">
                                                    <svg>
                                                        <use href="../assets/svg/icon_sprite.svg#pen"></use>
                                                    </svg>
                                                    <span class="txt-light">Resume writing</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-box">
                                                    <svg>
                                                        <use href="../assets/svg/icon_sprite.svg#applicant"></use>
                                                    </svg>
                                                    <span class="txt-light">Priority applicant</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list-box">
                                                    <svg>
                                                        <use href="../assets/svg/icon_sprite.svg#resume"></use>
                                                    </svg>
                                                    <span class="txt-light">Resume display</span>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                                            </li>
                                        </ul> --}}
                                        <img class="img-fluid right-image" src="../assets/images/job/banner.webp"
                                            alt="vector" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner section end -->

        <div class="card mt-5">
            <!-- Plan section start -->
            <section class="plan-style-2 section-b-space" id="plan">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-style-1 text-center">
                                <h5>Choose from our affordable 3 packages!</h5>
                                <h2>Make the wise decision for your career</h2>
                                <p>Whether it’s for work, a side project or even the next family vacation, we helps your
                                    team stay organize</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Plan section end -->
            <div class="card-body">
                <div class="row justify-between">
                    @foreach ($data as $class)
                        <div class="col-3 mt-4">
                            <a class="link-opacity-10 text-dark" href="{{ url('/user/class/' . $class->id) }}">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('assets/uploaded/images/classes/' . $class->image) }}"
                                        height="300px" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $class->title }}</h5>
                                        {{-- <p class="card-text">{!! $class->description !!}</p> --}}
                                        {{-- <a href="#" class="btn btn-block {{ $class->your_class ? 'btn-success' : 'btn-warning' }} mt-3">{{ $class->your_class ? 'Go to Class' : 'Buy Class' }}</a> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@if (!Auth::user()->basic_user)
    @component('Components.BasicClassPriceList.index', compact('pricelist'))
    @endcomponent
@endif
