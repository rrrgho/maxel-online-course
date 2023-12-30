@extends('User.Layouts.app', [
    'title' => 'Your name',
])

@section('content')
    <section class="category-style-1 mt-5">
        <div class="container">
            <!-- Process section start -->
            <section class="process-style-1">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 d-xl-block d-none">
                            <div class="process-left-image">
                                <img class="img-fluid" src="../assets/images/job/work/1.webp" alt="vector">
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="title-style-2">
                                <h2>
                                    Welcome, {{Auth::user()->name}}
                                </h2>
                                <p>Monitor your progress through this dashboard, maximum your subscribtion, and get more benefit from us.</p>
                            </div>
                            <div class="process-main-wrapper">
                                <div class="process-wrapper">
                                    <div class="process-wrap">
                                        <img src="../assets/images/job/work/shadow.webp" class="img-fluid shadow-img"
                                            alt="">
                                        <div class="process-box">
                                            <div>
                                                <svg>
                                                    <use href="../assets/svg/icon_sprite.svg#stroke-resume"></use>
                                                </svg>
                                                <h3>Buy Package</h3>
                                            </div>
                                        </div>
                                        <img class="bg-shape" src="../assets/images/job/work/shape/2.webp" alt="shape">
                                        <img class="line-shape" src="../assets/images/job/work/lines/2.webp" alt="shape">
                                    </div>
                                    <div class="step-content">
                                        <span class="badge badge-light-2">Step 1</span>
                                        <p class="txt-light">Choose best offer of our package</p>
                                    </div>
                                </div>
                                <div class="process-wrapper">
                                    <div class="process-wrap">
                                        <img src="../assets/images/job/work/shadow.webp" class="img-fluid shadow-img"
                                            alt="">
                                        <div class="process-box">
                                            <div>
                                                <svg>
                                                    <use href="../assets/svg/icon_sprite.svg#stroke-job"></use>
                                                </svg>
                                                <h3>Confirm Payment</h3>
                                            </div>
                                        </div>
                                        <img class="bg-shape" src="../assets/images/job/work/shape/3.webp" alt="shape">
                                        <img class="line-shape" src="../assets/images/job/work/lines/3.webp" alt="shape">
                                    </div>
                                    <div class="step-content">
                                        <span class="badge badge-light-3">Step 2</span>
                                        <p class="txt-light">Admin approve your payment</p>
                                    </div>
                                </div>
                                <div class="process-wrapper">
                                    <div class="process-wrap">
                                        <img src="../assets/images/job/work/shadow.webp" class="img-fluid shadow-img"
                                            alt="">
                                        <div class="process-box">
                                            <div>
                                                <svg>
                                                    <use href="../assets/svg/icon_sprite.svg#stroke-apply"></use>
                                                </svg>
                                                <h3>Get Leassons</h3>
                                            </div>
                                        </div>
                                        <img class="bg-shape" src="../assets/images/job/work/shape/4.webp" alt="shape">
                                    </div>
                                    <div class="step-content">
                                        <span class="badge badge-light-4">Step 3</span>
                                        <p class="txt-light">Enjoy your leasson joyfully</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Process section end -->
        </div>
    </section>
@endsection
