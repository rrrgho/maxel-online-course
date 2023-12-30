@extends('User.Layouts.app', [
    'title' => 'Basic Class',
])

@section('content')
    @component('Components.User.BasicClassComponent.index', ['data' => $data, 'pricelist' => $pricelist])
        
    @endcomponent
@endsection