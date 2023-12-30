@extends('Admin.Layouts.app', [
    'title' => 'Basic Class Price List',
])

@section('content')
    <div class="row">
        <div class="col-12">
            @if (Session::has('success'))
                <div class="col">
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
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
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="
                                        @if ($pricelist->id === 1) #leftPriceTag @endif
                                        @if ($pricelist->id === 2) #lifeTimePriceTag @endif
                                        @if ($pricelist->id === 3) #rightPriceTag @endif
                                        ">Edit
                                            Price</a>
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
                                    <input name="duration" required type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Duration in month only</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input name="price" required type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
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
                                    <input name="price" required type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
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
                                    <input name="duration" required type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <div id="emailHelp" class="form-text">Duration in month only</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <input name="price" required type="number" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
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
@endsection
