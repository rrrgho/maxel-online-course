@extends('Layouts.app', [
    'title' => 'Login',
])

@section('content')
    @component('Components.UserLogin.index')
    @endcomponent
@endsection