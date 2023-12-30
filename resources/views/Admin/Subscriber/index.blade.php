@extends('Admin.Layouts.app', [
    'title' => 'Special Subscribers',
])


@section('content')
    <div class="row">
        <div class="col-12">
            @if (Session::has('success'))
                <div class="col">
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                </div>
            @endif
            <div class="card mt-5">
                <div class="card-header">
                    <h4 class="card-title">Special Class Subscriber</h4>
                    <p>Manage special class subscriber here !</p>
                </div>
                <div class="card-body">
                    {{-- <div class="col text-end">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addClassModal">Add New</button>
                    </div> --}}
                    <div class="col mt-4">
                        <table class="table table-bordered" id="special-class-subscribers">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Class</th>
                                    <th>Status</th>
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

    <!-- Modal -->
    <div class="modal fade" id="evidenceModal" tabindex="-1" aria-labelledby="evidenceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="evidenceModalLabel">Modal title</h1>
                    <button onclick="clearEvidence()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12" id="evidencePreview"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button onclick="clearEvidence()" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $('#special-class-subscribers').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin-subscriber-special-class-datatable') !!}', // memanggil route yang menampilkan data json
                columns: [{
                        data: 'user_relation.name',
                        name: 'user_relation.name'
                    },
                    {
                        data: 'user_relation.email',
                        name: 'Email'
                    },
                    {
                        data: 'class_relation.title',
                        name: 'Class'
                    },
                    {
                        data: 'status',
                        name: 'Status'
                    },
                    {
                        data: 'created_at',
                        name: 'Date'
                    },
                    {
                        data: 'action',
                        name: 'Action'
                    },
                ]
            });            
        })
    </script>
@endsection
