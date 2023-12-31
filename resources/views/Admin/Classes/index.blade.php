@extends('Admin.Layouts.app', [
    'title' => 'Class Category',
])

@section('content')
    <style>
        #preview {
            width: 300px;
            height: 300px;
        }
    </style>
    <div class="row">
        <div class="col-12">
            @if (Session::has('success'))
                <div class="col">
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Class</h4>
                    <p>Manage basic class here !</p>
                </div>
                <div class="card-body">
                    <div class="col text-end">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addClassModal">Add
                            New</button>
                    </div>
                    <div class="col mt-4">
                        <table class="table table-bordered" id="basic-class-table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header">
                    <h4 class="card-title">Special Class</h4>
                    <p>Manage basic class here !</p>
                </div>
                <div class="card-body">
                    {{-- <div class="col text-end">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addClassModal">Add New</button>
                    </div> --}}
                    <div class="col mt-4">
                        <table class="table table-bordered" id="special-class-table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Add Basic Class --}}
    <div class="modal fade" id="addClassModal" tabindex="-1" aria-labelledby="addClassModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <form action="{{ route('admin-add-class') }}" method="POST" enctype="multipart/form-data"> @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="addClassModalLabel">Add new Class</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <img src="{{ asset('assets/images/image-preview.png') }}" id="preview"
                                    alt="Preview Image">
                                <br />
                                <small class="text-info">We recomend size of image 908 * 1064</small>
                                <div class="form-input">
                                    <div class="mb-3">
                                        <input required name="image" onchange="previewImage(event)"
                                            accept="image/png, image/jpeg, image/webp" class="form-control" type="file"
                                            id="formFile">
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
                                        <option value="1">Special Class</option>
                                        <option value="2">Basic Class</option>
                                    </select>
                                </div>
                                <div class="form-input">
                                    <select name="category_id" required class="form-select form-select-lg mb-3"
                                        aria-label="Large select example">
                                        <option selected>Select Class Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-input">
                                    <input type="text" name="title" class="form-control" autocomplete="off"
                                        placeholder="Title" required>
                                </div>
                                <div class="form-input mt-4 mb-4">
                                    <input type="text" name="subtitle" class="form-control" autocomplete="off"
                                        placeholder="Sub title" required>

                                </div>
                                <div class="form-input mt-4 mb-4">
                                    <input type="number" name="price" class="form-control" autocomplete="off"
                                        placeholder="Price">
                                    <span class="form-text text-secondry">
                                        Leave it blank if Special Class
                                    </span>
                                </div>
                                <textarea id="description" name="description"></textarea>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('#basic-class-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin-basic-class-datatable') !!}', // memanggil route yang menampilkan data json
                columns: [{
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'category',
                        name: 'category'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ]
            });



            $('#special-class-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin-special-class-datatable') !!}', // memanggil route yang menampilkan data json
                columns: [{
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'category',
                        name: 'category'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ]
            });

            // ClassicEditor.replace('description');

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


        });
    </script>
@endsection
