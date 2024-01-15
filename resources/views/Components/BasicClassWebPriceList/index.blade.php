<!-- Price section start -->
<section class="plan-style-3 section-b-space" id="plan">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-style-2 text-center">
                    <h2>
                        Ayo Berlangganan Sekarang !
                    </h2>
                    <p>Dapatkan semua keuntungan di Maxel Course sebelum waktu promonya habis! Kuota terbatas!</p>
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
                                                            <h5>
                                                                IDR
                                                                <s>
                                                                    @if ($item->id === 1)
                                                                        <span>450.000</span>
                                                                    @endif
                                                                    @if ($item->id === 2)
                                                                        <span>2.499.000</span>
                                                                    @endif
                                                                    @if ($item->id === 3)
                                                                        <span>900.000</span>
                                                                    @endif
                                                                </s>
                                                            </h5>
                                                        </div>
                                                        <div class="d-flex align-items-end">
                                                            <h3>IDR {{ number_format($item->price) }}</h3>
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>
                                                    @if ($item->id === 1)
                                                        <span>Tidak sampai Rp 120 per hari!</span>
                                                    @endif
                                                    @if ($item->id === 2)
                                                        <span>Paling Diminati! Paling worth it!</span>
                                                    @endif
                                                    @if ($item->id === 3)
                                                        <span>Tidak sampai Rp 300 per hari</span>
                                                    @endif
                                                </p>
                                                @if (count($item->feature) > 0)
                                                    <ul class="plan-list">
                                                        @foreach ($item->feature as $feature)
                                                            <li>
                                                                <i
                                                                    class="fa-solid {{ $feature->status ? 'fa-check' : 'fa-times text-danger' }}"></i>
                                                                <p class="txt-light">{{ $feature->label }}</span>
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
