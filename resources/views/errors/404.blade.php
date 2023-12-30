@extends('Layouts.app', [
    'title' => 'Page not found'
])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <img class="img-fluid" src="{{asset('assets/images/app/404.jpg')}}" alt="Not Found Image" title="Image by vectorpouch on Freepik" srcset="">
            </div>
        </div>
    </div>
@endsection
