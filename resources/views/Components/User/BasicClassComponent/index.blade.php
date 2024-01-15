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

        @if (Auth::user()->basic_waiting_approved)
            <div class="row mb-10 mt-5">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>You have subscribed!</strong>
                    <span>But your subscribtion status is pending, please contact Admin to reconfirm your payment</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif


        @if (Auth::user()->basic_user)
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
                                                Your subscribtion is active and will end at
                                                {{ Auth::user()->basic_user->expired_date }}
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
        @endif


        <div class="card mt-5">
            <!-- Plan section start -->
            <section class="plan-style-2" id="plan">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-style-1 text-center">
                                <h2>Materi Kelas Basic Di Maxel</h2>
                                <p>Cocok untuk pemula dan yang ingin memperluas skill digital ! Dapatkan akses ke
                                    ratusan materi skill digital dasar. Mulai langkah Anda ke dunia digital sekarang!
                                </p>
                                {{-- <img src="../assets/images/nft/line.webp" alt="line" class="img-fluid"> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Plan section end -->
            <div class="card-body">
                @if (count($data) > 0)
                    <div class="row justify-between">
                        @foreach ($data as $class)
                            <div class="col-3 mt-4">
                                <a class="link-opacity-10 text-dark" href="{{ url('/user/class/' . $class->id) }}">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset('assets/uploaded/images/classes/' . $class->image) }}"
                                            height="300px" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h6 class="card-title">{{ $class->title }}</h6>
                                            <small>{{ $class->subtitle }}</small>
                                            {{-- <p class="card-text">{!! $class->description !!}</p> --}}
                                            {{-- <a href="#" class="btn btn-block {{ $class->your_class ? 'btn-success' : 'btn-warning' }} mt-3">{{ $class->your_class ? 'Go to Class' : 'Buy Class' }}</a> --}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-warning" role="alert">
                                <h4 class="alert-heading">Opps, Sorry !</h4>
                                <p>Aww yeah, looks like admin has not been finished preparing classes !</p>
                                <hr>
                                <p class="mb-0">No Class available.</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

@if (Auth::user()->basic_user && !Auth::user()->basic_waiting_approved)
    @component('Components.BasicClassPriceList.index', compact('pricelist'))
    @endcomponent
@endif
