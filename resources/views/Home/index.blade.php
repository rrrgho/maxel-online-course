@extends('Layouts.app', [
    'title' => 'Home',
])

@section('content')
    @component('Components.HomeBanner.index')
    @endcomponent
    @component('Components.AboutUs.index')
    @endcomponent
    @component('Components.WhyChoseUs.index')
    @endcomponent
    {{-- @component('Components.PriceList.index')
    @endcomponent --}}
    @component('Components.CustomerFeedback.index')
    @endcomponent
@endsection
