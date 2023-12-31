<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" media="all" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

        <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script src="https://kit.fontawesome.com/8fbf0bcced.js" crossorigin="anonymous"></script>

    <script src="
https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-media-embed@40.2.0/src/index.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@ckeditor/ckeditor5-media-embed@40.2.0/theme/mediaembed.min.css
" rel="stylesheet">

    {{-- <style>
        .ck-editor__editable{
            height: 300px;
            overflow: hidden;
            overflow-y: scroll;
        }
    </style> --}}

</head>

<body>
    <div class="container pt-sm-3 pt-md-5">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                @component('Admin.Layouts.sidebar')
                    
                @endcomponent
            </div>
            <div class="col-sm-12 col-md-9">
                @yield('content')
            </div>
        </div>
    </div>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script> --}}

    <script>
        function previewImage(event) {
                var input = event.target;
                var image = document.getElementById('preview');
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        image.src = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            function showEvidence(image){
                $('#evidencePreview').append(`
                    <img style="width: 100%; height: 400px;" src="{{asset('assets/uploaded/images/payment/${image}')}}"/>
                `)
            }

            function clearEvidence(){
                $('#evidencePreview').html('');
            }
    </script>

    @yield('script')
</body>

</html>
