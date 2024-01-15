@if ($admin)
    <div class="row justify-content-end">
        <div class="col-sm-12 col-md-4">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editLeasson">
                Edit Lesson
            </button>
            <a href="{{url('/admin/leasson/delete/'.$class->id.'/'.$leasson->id)}}" class="btn btn-danger">
                Delete Lesson
            </a>
        </div>
    </div>
@endif
<div class="row">
    <div class="col-12">
        <div class="jumbotron">
            @if (!$admin)
                <a class="text-secondary" href="{{ url('user/class/' . $class->id) }}">
                    <h1 class="display-4">{{ $class->title }}</h1>
                </a>
            @else
                <a class="text-secondary" href="{{ url('admin/class/' . $class->id) }}">
                    <h1 class="display-4">{{ $class->title }}</h1>
                </a>
            @endif

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
        @if (!$admin)
            <div class="list-group">
                @foreach ($class->class_leassons_relation as $class_leasson)
                    <a href="{{ url('/user/leasson/' . $class->id . '/' . $class_leasson->id) }}#list-item-{{ $class_leasson->id }}"
                        class="list-group-item list-group-item-action border-0 border-bottom p-3 {{ $class_leasson->id === $leasson->id ? 'bg-warning' : 'bg-white' }}"
                        aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1 bold text-dark">{{ $class_leasson->title }}</h6>
                            @if ($class_leasson->completed)
                                <small
                                    class="{{ $class_leasson->id === $leasson->id ? 'text-white' : 'text-success' }}">Completed</small>
                            @endif
                        </div>
                        <small class="text-secondary">{{ $class_leasson->subtitle }}</small>
                    </a>
                @endforeach
            </div>
        @else
            <div class="col">
                    <img src={{ asset('assets/uploaded/images/classes/' . $class->image) }} class="img-fluid rounded"
                        alt="...">
                </div>
        @endif
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


<!-- Modal -->
    <div class="modal fade" id="editLeasson" tabindex="-1" aria-labelledby="editLeassonLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <form action="{{ route('admin-leasson-edit') }}" method="POST"> @csrf
                <input type="hidden" name="id" value="{{$leasson->id}}">
                <input type="hidden" name="class_id" value="{{$class->id}}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editLeassonLabel">Add Leasson for class {{ $leasson->title }}
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-input">
                            <input type="text" value="{{$leasson->title}}" name="title" class="form-control" autocomplete="off"
                                placeholder="Title" required>
                        </div>
                        <div class="form-input mt-4 mb-4">
                            <input type="text" value="{{$leasson->subtitle}}" name="subtitle" class="form-control" autocomplete="off"
                                placeholder="Sub title" required>

                        </div>
                        <div class="form-input">
                            <textarea id="description" name="description">
                                    {!! $leasson->description !!}
                                </textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @section('script')
    <script>
            ClassicEditor
                .create(document.querySelector('#description'), {
                    removePlugins: ['CKFinderUploadAdapter', 'CKFinder', 'EasyImage', 'Image', 'ImageCaption',
                        'ImageStyle', 'ImageToolbar', 'ImageUpload'
                    ],
                    mediaEmbed: {
                        previewsInData: true
                    }
                })
                .catch(error => {
                    console.error(error);
                });
    </script>
    @endsection
