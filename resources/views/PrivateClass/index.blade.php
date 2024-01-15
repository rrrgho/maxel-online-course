@extends('Layouts.app', [
    'title' => 'Private Class',
])


@section('content')
    <!-- About section start -->
    <section class="about-style-3 mt-5" id="about-us">
        <div class="container">
            <div class="row justify-content-between gy-sm-4 gy-3 align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="about-image-wrapper">
                        <img class="img-fluid" src="{{asset('assets/images/app/web/private1.jpg')}}" alt="about" />
                        {{-- <img class="img-fluid left-image" src="../assets/images/job/about/2.webp" alt="card" /> --}}
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content">
                        <div class="title-style-2">
                            <h2>
                                Maksimalkan Potensi Digital kamu!
                            </h2>
                        </div>
                        <p>
                            Kembangkan potensi penuh bisnismu melalui pelatihan digital marketing yang eksklusif! Kami
                            menawarkan sesi pelatihan dari dasar untuk pribadi, sangat cocok untuk individu, bisnis, atau
                            perusahaan.
                        </p>
                        <p>
                            Kami siap membantu Anda mencapai tujuan pemasaran online Anda. Tingkatkan keahlian digital Anda sekarang! Hubungi kami untuk konsultasi dan jadwalkan pelatihan sesuai kebutuhan Anda. Optimalkan online presence bisnismu hari ini!"
                        </p>
                        {{-- <a href="#">Explore More <i class="fa-solid fa-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About section end -->
    
    <!-- About section start -->
    <section class="about-style-3" id="about-us">
        <div class="container">
            <div class="row justify-content-between gy-sm-4 gy-3 align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content">
                        <div class="title-style-2">
                            <h2>
                                Fokus pada praktek!
                            </h2>
                        </div>
                        <p>
                            Kami menawarkan pengalaman belajar yang dapat disesuaikan sepenuhnya, baik itu offline atau online, dengan berbagai topik dan durasi yang bisa disesuaikan dengan kebutuhan Anda. Fokus utama kami adalah pada pendekatan praktis, memastikan bahwa setiap konsep yang dipelajari dapat segera diimplementasikan dalam situasi dunia nyata.
                        </p>
                        {{-- <a href="#">Explore More <i class="fa-solid fa-arrow-right"></i></a> --}}
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="about-image-wrapper">
                        <img class="img-fluid" src="{{asset('assets/images/app/web/private2.jpg')}}" alt="about" />
                        {{-- <img class="img-fluid left-image" src="../assets/images/job/about/2.webp" alt="card" /> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- About section end -->

     <div class="mb-5">
        @component('Components.Client.index')
    @endcomponent
     </div>

    <!-- Subscription section start -->
        <section class="subscribe-style-1 mt-5">
            <div class="custom-container container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="subscribe-box text-center">
                            <div class="subscribe-content">
                                <h3>Hubungi kami untuk bekerja sama!</h3>
                                <p>Tim kami siap membantu kebutuhan anda kapanpun </p>
                                {{-- <form>
                                    <div class="input-group mb-3">
                                        <input type="email" class="form-control" placeholder="Type your e-mail"
                                            aria-label="Type your e-mail" aria-describedby="basic-addon2" required>
                                        <button type="submit" class="input-group-text btn-dark" id="basic-addon2">Start
                                            Subscription <i class="fa-solid fa-arrow-right ms-2"></i></button>
                                    </div>
                                </form> --}}
                                <div class="home-details">
                                    <ul>
                                        <li>
                                            <a target="_blank" href="https://wa.me/+6281380004668/?text=Hi,MaxelCourse" class="input-group-text btn-success text-white" id="basic-addon2">
                                                <i class="fa-brands fa-whatsapp me-3 text-white"></i>
                                                Whatsapp
                                                <i class="fa-solid fa-arrow-right ms-2"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="decore">
                                <img class="img-fluid left-image" src="../assets/images/sass/subscribe/1.webp"
                                    alt="men vector">
                                <img class="img-fluid right-image" src="../assets/images/sass/subscribe/2.webp"
                                    alt="graph card">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Subscription section end -->
@endsection
