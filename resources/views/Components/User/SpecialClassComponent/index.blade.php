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

        <div class="card mt-5">
            <!-- Plan section start -->
            <section class="plan-style-2" id="plan">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-style-1 text-center">
                                <h5>Choose the best price for you!</h5>
                                <h2>Our Special Class is Completely for You</h2>
                                <p>Whether it’s for work, a side project or even the next family vacation, we helps your
                                    team stay organize</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Plan section end -->
            <div class="card-body">
                <div class="row justify-between mt-4">
                    @foreach ($data as $class)
                        <div class="col-3 mt-4">

                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('assets/uploaded/images/classes/' . $class->image) }}" height="300px"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a class="link-opacity-10 text-dark" href="{{ url('/user/class/' . $class->id) }}">
                                        <h6 class="card-title text-primary">{{ $class->title }}</h6>
                                    </a>
                                    {{-- <p class="card-text">{!! $class->description !!}</p> --}}
                                    {{-- <a href="#" class="btn btn-block {{ $class->your_class ? 'btn-success' : 'btn-warning' }} mt-3">{{ $class->your_class ? 'Go to Class' : 'Buy Class' }}</a> --}}

                                    @if ($class->your_class !== false && $class->your_class !== 'APPROVED')
                                        @if ($class->your_class === 'REJECTED')
                                            <small class="text-secondary"><i>You have booked this class, but your
                                                    payment is
                                                    <span
                                                        class="text-danger"><b>{{ $class->your_class }}</b></span></i></small>
                                            <br>
                                            <a href=""
                                                class="btn btn-block w-100 mt-2 text-white btn-danger">RECONFIRM
                                                PAYMENT</a>
                                        @else
                                            <small class="text-secondary"><i>You have booked this class, your
                                                    booking status
                                                    is <span
                                                        class="text-warning"><b>{{ $class->your_class }}</b></span></i></small>
                                            <br>
                                        @endif
                                    @endif

                                    @if ($class->your_class === false)
                                        <span>
                                            Rp. {{ number_format($class->price) }}
                                        </span>
                                        <button onclick="buySpecialClass('{{ $class->id }}','{{ $class->title }}')"
                                            class="btn btn-block btn-primary w-100 text-white mt-3"
                                            data-bs-toggle="modal" data-bs-target="#buySpecialClass">BUY
                                            CLASS</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="buySpecialClass" tabindex="-1" aria-labelledby="buySpecialClassLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('user-special-class-subscribe')}}" method="POST" enctype="multipart/form-data"> @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="buySpecialClassLabel">Confirm Payment</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-header">

                    <div class="col-12">
                        <b>Payment should only be transfered to this bank account</b> <br>
                        <small><p><b>DANA/OVO: 081264346755</b></p></small> <br>
                        <small><p><b> Indah Permata Santana</b></p></small> <br>

                        {{-- <small>a.n. Maxel Course</small> --}}
                    </div>
                </div>
                <div class="modal-body">
                    <div class="col">
                        <img src="{{ asset('assets/images/image-preview.png') }}" id="preview" alt="Preview Image">
                        <br />
                        <div class="form-input">
                            <label for="" class="form-label">Masukan Bukti Pembayaran</label>
                            <div class="mb-3">
                                <input type="hidden" name="class_id" id="class_id" value="" class="form-input">
                            </div>
                            <div class="mb-3">
                                <input required name="payment_image" onchange="previewImage(event)"
                                    accept="image/png, image/jpeg, image/webp" class="form-control" type="file"
                                    id="formFile">
                                <small class="text-info">
                                    Admin will check and approve your evidence within an hour !
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    const classID = document.querySelector('#class_id');
    const titleClass = document.querySelector('#titleBuyClass');

    function buySpecialClass(id, title) {
        classID.value = id;
        titleClass.innerHTML = title;
    }

    function previewImage(event) {
        var input = event.target;
        var image = document.getElementById('preview');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                image.src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
