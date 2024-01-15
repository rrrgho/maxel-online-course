@extends('Layouts.app', [
    'title' => 'Sign Up',
])

@section('content')
    <!-- Price section start -->
    <section class="plan-style-3 section-b-space" id="plan">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    {{-- <div class="title-style-2 text-center">
                        <h2>
                            From getting started
                        </h2>
                        <p>Start working with Cuba CSS that can provide everything you need to generate awareness,
                            drive traffic, connect.</p>
                    </div> --}}
                </div>
            </div>


            <!-- Lifetime Form -->
            <section class="solution-style-1">
                <div class="custom-container container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-6">
                            <form action="" method="POST" enctype="multipart/form-data"> @csrf
                                <div class="mb-3">
                                    <div class="title-style-1">
                                        <h5>Join us</h5>
                                        <h2 id="titleClass">Yuk daftar dan maksimalkan potensimu!</h2>
                                        <p id="subtitleClass">Dapatkan akses ke ratusan materi dan benefit lainnya</p>
                                    </div>
                                </div>
                                @if (Session::has('success'))
                                    <div class="col">
                                        <div class="alert alert-success" role="alert">
                                            {{ Session::get('success') }}
                                        </div>
                                    </div>
                                @endif
                                @if (Session::has('error'))
                                    <div class="col">
                                        <div class="alert alert-danger" role="alert">
                                            {{ Session::get('error') }}
                                        </div>
                                    </div>
                                @endif
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                    <input name="name" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nomor Handphone / Whatsapp</label>
                                    <input type="number" class="form-control" name="phone">
                                    <div id="emailHelp" class="form-text">Kami tidak akan membagikan nomor anda.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Kami tidak akan membagikan email anda.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kata Sandi</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Solution section end -->
        </div>
    </section>
    <!-- Price section end -->
@endsection
