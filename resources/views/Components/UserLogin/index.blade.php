<section class="newsletter-style">
    <div class="bg-blur-color"></div>
    <div class="container newsletter" data-aos="zoom-in">
        <div class="title-style-4 row">
            <div class="col-md-12 text-center">
                <h2>Join Our<span class="txt-success"> Creative Community</span></h2>
                <p>Sign in to access or your premium class, gain more benefit by upgrading your class category</p>
                <img src="../assets/images/nft/line.webp" alt="line" class="img-fluid">
            </div>
        </div>

        <form action="{{route('user-authenticate')}}" method="POST"> @csrf
            <div class="row justify-content-center mt-5">
                <div class="col-sm-12 col-md-7">
                    <h3 class="text-dark">Please Login !</h3>
                    <p>Make sure you have purchased class to login!</p>
                </div>
                <div class="col-sm-12 col-md-7 mt-3">
                    <input type="email" name="email" class="form-control bg-light text-dark" placeholder="Email" aria-label="Email"
                aria-describedby="basic-addon4" required>
                </div>
                <div class="col-sm-12 col-md-7 mt-3">
                    <input type="password" name="password" class="form-control bg-light text-dark" placeholder="Password" aria-label="Password"
                aria-describedby="basic-addon4" required>
                </div>
                <div class="col-sm-12 col-md-7 mt-3">
                    @foreach ($errors->all() as $error)

                    <span class="text-danger">{{ $error }}</span>

                    @endforeach
                </div>
                <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <span>Don't have account?</span>
                                    <a class="" href="{{ route('user-signup') }}">
                                        {{ __('Create account!') }}
                                    </a>
                            </div>
                        </div>
                <div class="col-sm-12 col-md-7 justify-content-center">
                    <button type="submit" class="input-group-text mt-4" id="basic-addon4">Login<i class="fa-solid fa-arrow-right ms-2"></i></button>
                </div>
            </div>
        </form>


    </div>
</section>
