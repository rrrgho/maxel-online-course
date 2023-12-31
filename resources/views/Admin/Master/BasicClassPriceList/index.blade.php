@extends('Admin.Layouts.app', [
    'title' => 'Basic Class Price List',
])

@section('content')
    <div class="row">
        <div class="col-12">
            @if (Session::has('success'))
                <div class="col">
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Class Price List</h4>
                    <p>You can only edit this data !</p>
                </div>
                <div class="card-body">
                    <div class="row justify-content-between">
                        @foreach ($data as $pricelist)
                            <div class="col-sm-12 col-md-4">
                                <div class="card">
                                    <div class="col p-3">
                                        <div class="display-4">
                                            @if ($pricelist->id === 1)
                                                LEFT
                                            @endif
                                            @if ($pricelist->id === 2)
                                                MIDDLE
                                            @endif
                                            @if ($pricelist->id === 3)
                                                RIGHT
                                            @endif
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{ $pricelist->duration ?? 'Lifetime' }}
                                            @if ($pricelist->duration)
                                                MONTHS
                                            @endif
                                        </h5>
                                        <p class="card-text">Rp. {{ number_format($pricelist->price) }}</p>

                                        <div class="col">
                                            <ul>
                                            @foreach ($features as $feature )
                                                @if ($feature->pricelist_id === $pricelist->id)
                                                    <li class="{{$feature->status ? 'text-success' : 'text-danger'}}"> {{$feature->label}}
                                                    <a href="{{url('admin/master/basic-class/pricelist/feature-delete/'.$feature->id)}}">
                                                        <i class="fa fa-trash text-danger"></i>
                                                    </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                            </ul>
                                        </div>

                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="
                                        @if ($pricelist->id === 1) #leftPriceTag @endif
                                        @if ($pricelist->id === 2) #lifeTimePriceTag @endif
                                        @if ($pricelist->id === 3) #rightPriceTag @endif
                                        ">Edit
                                            Price</a>
                                        <a href="#" class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="
                                        @if ($pricelist->id === 1) #addFeatureLeft @endif
                                        @if ($pricelist->id === 2) #addFeatureMiddle @endif
                                        @if ($pricelist->id === 3) #addFeatureRight @endif
                                        ">Add
                                            Feature</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Left Modal -->
    <div class="modal fade" id="leftPriceTag" tabindex="-1" aria-labelledby="leftPriceTag" aria-hidden="true">
        <div class="modal-dialog">
            <form action="" method="POST"> @csrf
                <input hidden name="id" type="number" value="1">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="leftPriceTag">LEFT PRICE TAG</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="duration" class="form-label">Duration</label>
                                    <input name="duration" required type="number" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Duration in month only</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input name="price" required type="number" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Duration in IDR only</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- Middle Modal -->
    <div class="modal fade" id="lifeTimePriceTag" tabindex="-1" aria-labelledby="lifeTimePriceTag" aria-hidden="true">
        <div class="modal-dialog">
            <form action="" method="POST"> @csrf
                <input hidden name="id" type="number" value="2">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="leftPriceTag">MIDDLE PRICE TAG</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            {{-- <div class="col-6">
                                <div class="mb-3">
                                    <label for="duration" class="form-label">Duration</label>
                                    <input name="duration" type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Duration in month only</div>
                                </div>
                            </div> --}}
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input name="price" required type="number" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Duration in IDR only</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Right Modal -->
    <div class="modal fade" id="rightPriceTag" tabindex="-1" aria-labelledby="rightPriceTag" aria-hidden="true">
        <div class="modal-dialog">
            <form action="" method="POST"> @csrf
                <input hidden name="id" type="number" value="3">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="leftPriceTag">RIGHT PRICE TAG</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="duration" class="form-label">Duration</label>
                                    <input name="duration" required type="number" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Duration in month only</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input name="price" required type="number" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Duration in IDR only</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    {{-- Add Feature Left --}}
    <div class="modal fade" id="addFeatureLeft" tabindex="-1" aria-labelledby="addFeatureLeftLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('admin-basic-class-pricelist-feature-add')}}" method="POST"> @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addFeatureLeftLabel">Left</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12">
                            <input type="hidden" name="pricelist_id" value="1">
                            <div class="mb-3">
                                <label for="price" class="form-label">Feature Name</label>
                                <input name="label" required type="text" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                {{-- <div id="emailHelp" class="form-text">Duration in IDR only</div> --}}
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Activate this feature</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Add Feature Middle --}}
    <div class="modal fade" id="addFeatureMiddle" tabindex="-1" aria-labelledby="addFeatureMiddleLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('admin-basic-class-pricelist-feature-add')}}" method="POST"> @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addFeatureMiddleLabel">Middle / Lifetime</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12">
                            <input type="hidden" name="pricelist_id" value="2">
                            <div class="mb-3">
                                <label for="price" class="form-label">Feature Name</label>
                                <input name="label" required type="text" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                {{-- <div id="emailHelp" class="form-text">Duration in IDR only</div> --}}
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Activate this feature</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Add Feature Left --}}
    <div class="modal fade" id="addFeatureRight" tabindex="-1" aria-labelledby="addFeatureRightLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('admin-basic-class-pricelist-feature-add')}}" method="POST"> @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addFeatureRightLabel">Right</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-12">
                            <input type="hidden" name="pricelist_id" value="3">
                            <div class="mb-3">
                                <label for="price" class="form-label">Feature Name</label>
                                <input name="label" required type="text" class="form-control"
                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                {{-- <div id="emailHelp" class="form-text">Duration in IDR only</div> --}}
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Activate this feature</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
