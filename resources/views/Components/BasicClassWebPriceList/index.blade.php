<!-- Price section start -->
<section class="plan-style-3 section-b-space" id="plan">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-style-2 text-center">
                    <h2>
                        Ayo Berlangganan Sekarang !
                    </h2>
                    <p>Start working with Cuba CSS that can provide everything you need to generate awareness,
                        drive traffic, connect.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="plan-slider-wrapper">
                    <div class="swiper ">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row">
                                    @foreach ($pricelist as $item)
                                        <div class="col-sm-12 col-md-4">
                                            <div class="plan-card">
                                                <div class="plan-price">
                                                    <img class="img-fluid"
                                                        src="{{ asset('assets/images/job/price.webp') }}"
                                                        alt="shape">
                                                    <div>
                                                        <h6>
                                                            @if ($item->id !== 2)
                                                                {{ $item->duration }} Months
                                                            @else
                                                                Lifetime
                                                            @endif
                                                        </h6>
                                                        <div class="d-flex align-items-end">
                                                            <h3>IDR {{ number_format($item->price) }}</h3>
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>From its medieval origins to the digital era, learn everything there.
                                                </p>
                                                @if (count($item->feature) > 0)
                                                    <ul class="plan-list">
                                                        @foreach ($item->feature as $feature)
                                                            <li>
                                                                <i class="fa-solid {{$feature->status ? 'fa-check' : 'fa-times text-danger'}}"></i>
                                                                <p class="txt-light">{{$feature->label}}</span>
                                                                </p>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                <a href="{{ route('user-signup') }}" class="btn btn-light-primary"
                                                    onclick="setBasicClassDuration({{ $item->duration }})">
                                                    Choose Plan
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Price section end -->
