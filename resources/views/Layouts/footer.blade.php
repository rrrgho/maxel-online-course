<!-- Footer section start -->
<footer class="footer-style-1 mt-5 footer-style-2">
    <div class="container">
        <div class="footer-top-content">
            <div class="row gy-md-4 gy-3">
            </div>
        </div>
    </div>
    <div class="main-footer">
        <div class="container">
            <div class="row gx-xl-5 gy-md-5 gy-4 gx-4">
                <div class="col-xl-4">
                    <div class="footer-contact">
                        <a href="index.html">
                            <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="logo" />
                        </a>
                        {{-- <p>
                            Partner with us for innovative IT solutions that drive your success.
                        </p>
                        <ul>
                            <li>
                                <a href="https://www.instagram.com/doiscode/"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/doiscode/"><i class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/doiscode/"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="https://in.pinterest.com/"><i class="fa-brands fa-pinterest"></i></a>
                            </li>
                        </ul> --}}
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="footer-content">
                        <h3>Social Media</h3>
                        <ul class="footer-links">
                            <li>
                                <a href="https://instagram.com/maxel.course">
                                    <i class="fa-brands fa-instagram"></i>
                                    <span> @maxel.course </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    <span>0813-8000-4668</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4 col-6">
                    <div class="footer-content">
                        <h3>Kategori Kelas</h3>
                        <ul class="footer-links">
                            <li>
                                <a href="{{ url('/basic-class') }}">
                                    {{-- <i class="fa-solid fa-chevron-right"></i> --}}
                                    <span>Basic Class</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/special-class') }}">
                                    {{-- <i class="fa-solid fa-chevron-right"></i> --}}
                                    <span>Special Class</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/bootcamp') }}">
                                    {{-- <i class="fa-solid fa-chevron-right"></i> --}}
                                    <span>Bootcamp</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="footer-content">
                        <h3>Bantuan & Panduan</h3>
                        <ul class="footer-links">
                            <li>
                                <a href="{{ url('/basic-class') }}">
                                    {{-- <i class="fa-solid fa-chevron-right"></i> --}}
                                    <span>Syarat & Ketentuan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/special-class') }}">
                                    {{-- <i class="fa-solid fa-chevron-right"></i> --}}
                                    <span>Bantuan Penggunaan</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/bootcamp') }}">
                                    {{-- <i class="fa-solid fa-chevron-right"></i> --}}
                                    <span>Pusat Bantuan</span>
                                </a>
                            </li>
                        </ul>
                        {{-- <ul class="footer-location">
                            <li>
                                <div class="d-flex">
                                    <div class="footer-icon">
                                        <svg>
                                            <use href="{{asset('assets/svg/icon_sprite.svg#map-pin')}}"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <h6>Address :</h6>
                                        <p>Puri Mutiara - Jl. Griya Utama, RT.2/RW.5, Sunter Agung, Kec. Tj. Priok, Jkt
                                            Utara, Daerah Khusus Ibukota Jakarta 14350, Indonesia</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <div class="footer-icon">
                                        <svg>
                                            <use href="{{asset('assets/svg/icon_sprite.svg#inbox')}}"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <h6>email :</h6>
                                        <p>partner@doiscode.com</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <div class="footer-icon">
                                        <svg>
                                            <use href="./assets/svg/icon_sprite.svg#phone"></use>
                                        </svg>
                                    </div>
                                    <div>
                                        <h6>Phone/Whatsapp :</h6>
                                        <p>+62 851 86897566</p>
                                    </div>
                                </div>
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="sub-footer">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>&copy; Copyright <span id="copyright">
                            <script>
                                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                            </script>
                        </span>. Maxel Course</p>
                </div>
                {{-- <div class="col-md-6">
                    <ul class="footer-links sub-footer-links">
                        <li>
                            <a href="#">Terms</a>
                        </li>
                        <li>
                            <a href="#">Privacy</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</footer>
<!-- Footer section end -->




<script src="{{ asset('assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

<!-- swiper js -->
<script src="{{ asset('assets/js/vendors/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/custom-swiper.js') }}"></script>

<!-- font awesome js -->
<script src="{{ asset('assets/js/vendors/fontawesome/all.min.js') }}"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>
