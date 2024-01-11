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
    @component('Components.BasicClassWebPriceList.index', compact('pricelist'))
    @endcomponent


   

    <div class="mt-5">
        @component('Components.BasicClassListWebHome.index', compact('data'))
        @endcomponent
    </div>
        
    @component('Components.CustomerFeedback.index')
    @endcomponent
@endsection
