@extends('Layouts.app', [
    'title' => 'Basic Class',
])

@section('content')
    <div class="mt-5">
        @component('Components.BasicClassListWeb.index', compact('data'))
        @endcomponent
    </div>
    @component('Components.CustomerFeedback.index')
    @endcomponent
    @component('Components.BasicClassWebPriceList.index', compact('pricelist'))
    @endcomponent
@endsection
