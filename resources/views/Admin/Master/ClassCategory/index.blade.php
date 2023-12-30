@extends('Admin.Layouts.app', [
    'title' => 'Class Category',
])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Class Category</h4>
                    <p>Manage class category here !</p>
                </div>
                <div class="card-body">
                    <div class="col text-end">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New</button>
                    </div>
                    <div class="col mt-4">
                        <table class="table table-bordered" id="class-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Modal Add new Class Category --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" method="POST"> @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            
                                <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Category name" required>

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
            $('#class-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin-master-class-category-datatable') !!}', // memanggil route yang menampilkan data json
                columns: [{
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                ]
            });
        });
    </script>
@endsection
