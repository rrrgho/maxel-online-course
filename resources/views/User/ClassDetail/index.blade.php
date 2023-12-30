@extends('User.Layouts.app', [
    'title' => 'Basic Class Detail',
])

@section('content')
    @component('Components.User.ClassDetailComponent.index', ['data' => $data, 'admin' => false, 'pricelist' => $pricelist])
        
    @endcomponent
@endsection