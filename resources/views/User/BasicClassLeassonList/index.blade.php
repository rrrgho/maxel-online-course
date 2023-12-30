@extends('User.Layouts.app', [
    'title' => 'Leasson List',
])

@section('content')
    <section class="category-style-1 mt-5">
        <div class="container">
            @component('Components.User.BasicClassLeassonListComponent.index', [
                'class' => $class,
                'leasson' => $leasson,
                'leasson_completed' => $leasson_completed,
            ])
            @endcomponent
        </div>
    </section>
@endsection
