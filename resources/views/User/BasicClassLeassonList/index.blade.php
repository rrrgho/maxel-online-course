@extends(!$admin ? 'User.Layouts.app' : 'Admin.Layouts.app', [
    'title' => 'Leasson List',
])

@section('content')
    <section class="category-style-1 @if (!$admin) mt-5 @endif">
        <div class="container">
            @component('Components.User.BasicClassLeassonListComponent.index', [
                'class' => $class,
                'leasson' => $leasson,
                'leasson_completed' => $leasson_completed,
                'admin' => $admin,
            ])
            @endcomponent
        </div>
    </section>
@endsection
