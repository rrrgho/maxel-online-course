@extends('User.Layouts.app', [
    'title' => 'Your Purchase',
])

@section('content')
    <section class="category-style-1 mt-5">
        <div class="container">
            <div class="row">
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
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->created_at}}</td>
                            </tr>
                        @endforeach
                     </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
