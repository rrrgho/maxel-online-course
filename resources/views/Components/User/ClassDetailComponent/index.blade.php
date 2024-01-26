<section class="category-style-1 mt-5">
    <div class="container">

        @if (\Session::has('error'))
            <div class="row mt-2">
                <div class="col-12">
                    <div class="alert alert-danger">
                        <ul>
                            <li>{!! \Session::get('error') !!}</li>
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        {{-- @component('Components.BasicClassPriceList.index', compact('pricelist'))
        
    @endcomponent --}}


        <div class="row mt-3">
            <div class="col-4">
                <div class="col">
                    <img src={{ asset('assets/uploaded/images/classes/' . $data->image) }} class="img-fluid rounded"
                        alt="...">
                </div>

                {{-- Conditional for the Basic Class --}}
                @if (!$admin)
                    @if ($data->type === 1)
                        @if ($data->your_class === 'APPROVED')
                            @if (count($data->class_leassons_relation) > 0)
                                <div class="col">
                                    <a class="btn btn-success mt-3 btn-large w-100"
                                        href="{{ url('/user/leasson/' . $data->id . '/' . $data->class_leassons_relation[0]->id) }}">Go
                                        to
                                        Lesson List</a>
                                </div>
                            @endif
                        @else
                            {{-- Check if user has booked this class, but admin still not approved yet --}}
                            @if ($data->your_class !== false)
                                <div class="mt-4">
                                    @if ($data->your_class === 'REJECTED')
                                        <small class="text-secondary"><i>You have booked this class, but your payment is
                                                <span
                                                    class="text-danger"><b>{{ $data->your_class }}</b></span></i></small>
                                        <br>
                                        <a href=""
                                            class="btn btn-block w-100 mt-2 text-white btn-danger">RECONFIRM
                                            PAYMENT</a>
                                    @else
                                        <small class="text-secondary"><i>You have booked this class, your booking status
                                                is
                                                <span
                                                    class="text-warning"><b>{{ $data->your_class }}</b></span></i></small>
                                        <br>
                                    @endif
                                </div>
                            @else
                                <div class="col">
                                    <a class="btn btn-primary mt-3 btn-large w-100" href="#">Buy This
                                        Class</a>
                                </div>
                            @endif

                        @endif
                    @else
                        @if (Auth::check())
                            @if (Auth::user()->basic_user)
                                @if (count($data->class_leassons_relation) > 0)
                                    <div class="col">
                                        <a class="btn btn-success mt-3 btn-large w-100"
                                            href="{{ url('/user/leasson/' . $data->id . '/' . $data->class_leassons_relation[0]->id) }}">Go
                                            to
                                            Lesson List</a>
                                    </div>
                                @endif
                            @else
                                <div class="col">
                                    <a class="btn btn-primary mt-3 btn-large w-100" href="#">Buy This Class</a>
                                </div>
                            @endif
                        @endif
                    @endif
                @endif

                {{-- Conditional for the Special Class --}}

            </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header bg-white">
                        <h3>
                            {{ $data->title }}
                        </h3>
                        <h5>
                            {{ $data->subtitle }}
                        </h5>

                    </div>
                </div>

                <div class="col mt-3" id="tabGroup">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Description
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {!! $data->description !!}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Lesson
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="list-group">
                                        @foreach ($data->class_leassons_relation as $class_leasson)
                                            @if (!$admin)
                                                <a href="{{ url('user/leasson/' . $class_leasson->class_id . '/' . $class_leasson->id) }}"
                                                    class="list-group-item list-group-item-action" aria-current="true">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h6 class="mb-1 bold text-info">{{ $class_leasson->title }}</h6>
                                                        {{-- @if ($class_leasson->completed)
                                                            <small class="text-success">Completed</small>
                                                        @endif --}}
                                                    </div>
                                                    <small>{{ $class_leasson->subtitle }}</small>
                                                </a>
                                            @else
                                                <a href="{{ url('admin/leasson/' . $class_leasson->class_id . '/' . $class_leasson->id) }}"
                                                    class="list-group-item list-group-item-action" aria-current="true">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h6 class="mb-1 bold text-info">{{ $class_leasson->title }}
                                                        </h6>
                                                    </div>
                                                    <small>{{ $class_leasson->subtitle }}</small>
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Teacher
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="https://img.freepik.com/free-psd/3d-illustration-person-with-sunglasses_23-2149436188.jpg"
                                                class="img-thumbnail" alt="...">
                                        </div>
                                        <div class="col-10">
                                            <div class="row">
                                                <h5>{{ $data->teacher_name }}</h5>
                                                {{-- <p>{{ $data->class_teacher_relation->specialist }}</p> --}}
                                                <small>
                                                    {{ $data->teacher_bio }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Reviews
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="alert alert-success" role="alert">
                                        <h4 class="alert-heading">Sorry !</h4>
                                        <p>Aww yeah, this feature will be comming soon, we are trying to develop this
                                            feature faster for you, please wait!.</p>
                                        <hr>
                                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep
                                            things nice and tidy.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
