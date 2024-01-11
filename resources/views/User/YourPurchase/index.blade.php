@extends('User.Layouts.app', [
    'title' => 'Your Purchase',
])

@section('content')
    <section class="category-style-1 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="display-5">Basic Class Ongoing Purchase</h4>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <table class="table table-striped">
                     <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Evidence</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if (count($data) > 0)
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center">No ongoing purchase</td>
                            </tr>
                        @endif
                     </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section class="category-style-1 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="display-5">Basic Class Expired Subscription</h4>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <table class="table table-striped">
                     <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Evidence</th>
                            <th>Status</th>
                            <th>Expired Date</th>
                        </tr>
                     </thead>
                     <tbody>
                        @if (count($expired_basic) > 0)
                            @foreach ($expired_basic as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{\Carbon\Carbon::parse($item->expired_date)->format('d/m/Y')}}</td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center">No Expired Subscription</td>
                            </tr>
                        @endif
                     </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
