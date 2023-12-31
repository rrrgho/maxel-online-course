@extends('Layouts.app', [
    'title' => 'Class Detail',
])

@section('content')
    @component('Components.ClassDetailComponentWeb.index', ['data' => $data, 'admin' => false, 'pricelist' => $pricelist])
        
    @endcomponent
@endsection