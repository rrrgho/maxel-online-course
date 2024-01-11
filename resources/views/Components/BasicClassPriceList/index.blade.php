<!-- Price section start -->
<section class="plan-style-3 section-b-space" id="plan">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-style-2 text-center">
                    <h2>
                        From getting started
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
                                                <ul class="plan-list">
                                                    <li>
                                                        <i class="fa-solid fa-check"></i>
                                                        <p class="txt-light">Get started with <span>messaging</span></p>
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-check"></i>
                                                        <p class="txt-light">Flexible <span>team meetings</span></p>
                                                    </li>
                                                    <li>
                                                        <i class="fa-solid fa-check"></i>
                                                        <p class="txt-light"><span>5 TB</span> cloud storage</p>
                                                    </li>
                                                </ul>
                                                <button href="#" class="btn btn-light-primary"
                                                    onclick="setBasicClassDuration({{ $item->duration }})">
                                                    Choose Plan
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </button>
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

        <!-- Lifetime Form -->
        <section class="solution-style-1">
            <div class="custom-container container">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="title-style-1">
                            <h5>Our Solution</h5>
                            <h2 id="titleClass">Lifetime Class Period</h2>
                            <p id="subtitleClass">Pay once, access with no limited time.</p>
                        </div>
                        <ul class="solution-content">
                            <li>
                                <div class="d-flex bg-light-primary">
                                    <div class="solution-icon">
                                        <img src="../assets/images/sass/icons/1.webp" alt="vector icon">
                                    </div>
                                    <div>
                                        <h3>Appointments</h3>
                                        <p>Many desktop publican packages and web page editors now use for them.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bg-light-success">
                                    <div class="solution-icon">
                                        <img src="../assets/images/sass/icons/2.webp" alt="vector icon">
                                    </div>
                                    <div>
                                        <h3>Class Bookings</h3>
                                        <p>Reporting & Omni-channel Solution To Empower Your Agents</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bg-light-danger">
                                    <div class="solution-icon">
                                        <img src="../assets/images/sass/icons/3.webp" alt="vector icon">
                                    </div>
                                    <div>
                                        <h3>Fast Support</h3>
                                        <p>We Are Here To Help You Find A Solution That Suits Your Business Need.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="solution-content p-0">
                            <li>
                                <div class="d-flex bg-light-success w-100">
                                    <div class="solution-icon">
                                        <img src="../assets/images/sass/icons/2.webp" alt="vector icon">
                                    </div>
                                    <div>
                                        <h3>Payment Information</h3>
                                        <p>Please send your payment only to this account number</p>
                                        <p><b>DANA/OVO: 081264346755</b></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <form action="{{ route('user-basic-class-subscribe') }}" method="POST"
                            enctype="multipart/form-data"> @csrf
                            <div class="mb-3">
                                <input hidden type="text" id="duration" name="duration" value="0"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Phone / Whatsapp</label>
                                <input type="number" class="form-control" name="phone">
                                <div id="emailHelp" class="form-text">We'll never share your phone with anyone else.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2Disabled"
                                    style="height: 100px">I have made payment, please check !</textarea>
                                <label for="floatingTextarea2Disabled">Comments</label>
                            </div>
                            <div class="col">
                                <img src="{{ asset('assets/images/image-preview.png') }}" id="preview"
                                    alt="Preview Image">
                                <br />
                                <div class="form-input">
                                    <label for="" class="form-label">Payment Evidence</label>
                                    <div class="mb-3">
                                        <input required name="payment_image" onchange="previewImage(event)"
                                            accept="image/png, image/jpeg, image/webp" class="form-control"
                                            type="file" id="formFile">
                                        <small class="text-info">
                                            Admin will check and approve your evidence within an hour !
                                        </small>
                                    </div>
                                </div>


                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Solution section end -->
    </div>
</section>
<!-- Price section end -->
