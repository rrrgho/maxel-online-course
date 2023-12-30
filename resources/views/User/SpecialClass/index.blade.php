@extends('User.Layouts.app', [
    'title' => 'Special Class',
])

@section('content')
    @component('Components.User.SpecialClassComponent.index', ['data' => $data])
        
    @endcomponent
@endsection