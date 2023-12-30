<div class="row justify-between mt-4">
    @foreach ($data as $class)
        <div class="col-3 mt-4">
            <a class="link-opacity-10 text-dark" href="{{ url('/user/class/' . $class->id) }}">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('assets/uploaded/images/classes/' . $class->image) }}" height="300px"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $class->title }}</h5>
                        {{-- <p class="card-text">{!! $class->description !!}</p> --}}
                        {{-- <a href="#" class="btn btn-block {{ $class->your_class ? 'btn-success' : 'btn-warning' }} mt-3">{{ $class->your_class ? 'Go to Class' : 'Buy Class' }}</a> --}}

                        @if ($class->your_class !== false && $class->your_class !== 'APPROVED')
                            @if ($class->your_class === 'REJECTED')
                                <small class="text-secondary"><i>You have booked this class, but your payment is <span
                                            class="text-danger"><b>{{ $class->your_class }}</b></span></i></small> <br>
                                <a href="" class="btn btn-block w-100 mt-2 text-white btn-danger">RECONFIRM
                                    PAYMENT</a>
                            @else
                                <small class="text-secondary"><i>You have booked this class, your booking status is <span
                                            class="text-warning"><b>{{ $class->your_class }}</b></span></i></small> <br>
                            @endif
                        @endif

                        @if ($class->your_class === false)
                            <a href="#" class="btn btn-block btn-warning w-100 text-white mt-3">BUY CLASS</a>
                        @endif
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
