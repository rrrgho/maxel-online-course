@extends('Layouts.app', [
    'title' => 'Special Class',
])

@section('content')
    <div class="mt-5">
        @component('Components.SpecialClassListWeb.index', compact('data'))
        @endcomponent
    </div>
@endsection