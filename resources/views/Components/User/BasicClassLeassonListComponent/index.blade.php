<div class="row mt-5">
    <div class="col-12">
        <div class="jumbotron">
            <a class="text-secondary" href="{{url('user/class/'.$class->id)}}">
                <h1 class="display-4">{{ $class->title }}</h1>
            </a>
            <p class="lead">{{ $class->subtitle }}</p>
            <div class="row">
                {{-- <div class="col-12 text-end">
                    {{$leasson_completed}}/{{count($class->class_leassons_relation)}} Leassons completed
                </div> --}}
            </div>
            <hr class="my-4">
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="list-group">
            @foreach ($class->class_leassons_relation as $class_leasson)
                <a href="{{ url('/user/leasson/' . $class->id . '/' . $class_leasson->id) }}#list-item-{{ $class_leasson->id }}"
                    class="list-group-item list-group-item-action border-0 border-bottom p-3 {{$class_leasson->id === $leasson->id ? 'bg-warning' : 'bg-white'}}" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-1 bold text-dark">{{ $class_leasson->title }}</h6>
                        @if ($class_leasson->completed)
                            <small class="{{$class_leasson->id === $leasson->id ? 'text-white' : 'text-success'}}">Completed</small>
                        @endif
                    </div>
                    <small class="text-secondary">{{ $class_leasson->subtitle }}</small>
                </a>
            @endforeach
        </div>
    </div>
    <div class="col-8">
        @if ($leasson->completed)
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Well done!</h4>
                <p>Aww yeah, you successfully completed this Session, go to the next step or stay here to remember what
                    you have done!</p>
                <hr>
                <p class="mb-0">Congrats from us to you because completed this session 🔥.</p>
            </div>
        @endif
        @if (!$leasson->completed)
            <div class="row justify-content-end mb-3">
                <div class="col-sm-12 col-md-3">
                    <form action="{{ route('complete-basic-leasson') }}" method="POST">@csrf
                        <input type="text" hidden name="leasson_id" value="{{ $leasson->id }}">
                        {{-- <button type="submit" class="btn btn-success">
                            Mark as complete
                        </button> --}}
                    </form>
                </div>
            </div>
        @endif
        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example"
            tabindex="0">
            <div class="card">
                <div class="card-header bg-white">
                    <h4 id="list-item-{{ $leasson->id }}">{{ $leasson->title }}</h4>
                    <p>{{ $leasson->subtitle }}</p>
                </div>
                <div class="card-body">
                    {!! $leasson->description !!}
                </div>
            </div>
        </div>
    </div>
</div>
