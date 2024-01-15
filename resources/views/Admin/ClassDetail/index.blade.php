@extends('Admin.Layouts.app', [
    'title' => 'Class Detail',
])

@section('content')
    <style>
        #preview {
            width: 350px;
            height: 300px;
        }
    </style>
    <div class="row justify-content-end">
        <div class="col-sm-12 col-md-3">
            <button class="btn btn-warning w-100" data-bs-toggle="modal" data-bs-target="#addLeassonModal">Add
                Lassons</button>
        </div>
        <div class="col-sm-12 col-md-3">
            <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#editClassModal">Edit Class</button>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif
        </div>
    </div>
    @component('Components.User.ClassDetailComponent.index', ['data' => $data, 'admin' => true])
    @endcomponent

    <div class="modal fade" id="editClassModal" tabindex="-1" aria-labelledby="editClassModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form action="{{ route('admin-edit-class') }}" method="POST" enctype="multipart/form-data"> @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editClassModalLabel">Edit Class</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <img src="{{ asset('assets/uploaded/images/classes/' . $data->image) }}" id="preview"
                                    alt="Preview Image">
                                <div class="form-input">
                                    <div class="mb-3">
                                        <input name="image" onchange="previewImage(event)"
                                            accept="image/png, image/jpeg, image/jpg, image/webp" class="form-control"
                                            type="file" id="formFile">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8">

                                <input type="text" hidden name="teacher_id"
                                    value="{{ Auth::guard('teachers')->user()->id }}">



                                <div class="form-input">
                                    <select name="type" required class="form-select form-select-lg mb-3"
                                        aria-label="Large select example">
                                        <option selected>Select Type of Class</option>
                                        <option value="1" @if ($data->type === 1) selected @endif>Special
                                            Class</option>
                                        <option value="2" @if ($data->type === 2) selected @endif>Basic Class
                                        </option>
                                    </select>
                                </div>
                                <div class="form-input">
                                    <select name="category_id" required class="form-select form-select-lg mb-3"
                                        aria-label="Large select example">
                                        <option selected>Select Class Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @if ($data->category_id === $category->id) selected @endif>{{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-input">
                                    <input type="text" name="title" class="form-control" autocomplete="off"
                                        placeholder="Title" value="{{ $data->title }}" required>
                                </div>
                                <div class="form-input mt-4 mb-4">
                                    <input type="text" name="subtitle" class="form-control" autocomplete="off"
                                        placeholder="Sub title" value="{{ $data->subtitle }}" required>

                                </div>

                                <div class="form-input mt-4 mb-4">
                                    <input type="text" name="teacher_name" class="form-control" autocomplete="off"
                                        placeholder="Teacher Name" value="{{$data->teacher_name}}" required>
                                </div>
                                <div class="form-input mt-4 mb-4">
                                    <input type="text" name="teacher_bio" class="form-control" autocomplete="off"
                                        placeholder="Teacher Bio" value="{{$data->teacher_bio}}" required>
                                </div>
                                <div class="form-input mt-4 mb-4">
                                    <input type="number" name="price" value="{{ $data->price }}" class="form-control"
                                        autocomplete="off" placeholder="Price">
                                    <span class="form-text text-secondry">
                                        Leave it blank if Special Class
                                    </span>
                                </div>
                                <textarea id="description" name="description">
                                    {{ $data->description }}
                                </textarea>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Save Changes">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addLeassonModal" tabindex="-1" aria-labelledby="addLeassonModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <form action="{{ route('admin-leasson-add') }}" method="POST"> @csrf
                <input type="hidden" name="class_id" value="{{$data->id}}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addLeassonModalLabel">Add Leasson for class {{ $data->title }}
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-input">
                            <input type="text" name="title" class="form-control" autocomplete="off"
                                placeholder="Title" required>
                        </div>
                        <div class="form-input mt-4 mb-4">
                            <input type="text" name="subtitle" class="form-control" autocomplete="off"
                                placeholder="Sub title" required>

                        </div>
                        <div class="form-input">
                            <textarea id="description2" name="description">
                                    
                                </textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(function() {
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

            ClassicEditor
                .create(document.querySelector('#description2'), {
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

        })
    </script>
@endsection
