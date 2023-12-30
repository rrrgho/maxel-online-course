@extends('Layouts.app', [
    'title' => 'About',
])

@section('content')
    @component('Components.BannerAbout.index')
    @endcomponent
    @component('Components.ValueAbout.index')
    @endcomponent
    <div class="pt-5 pb-5">
        @component('Components.Accelerate.index')
        @endcomponent
    </div>
@endsection
