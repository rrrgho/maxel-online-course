<!DOCTYPE html>
<html lang="en">

<head>
    @component('Layouts.seo')
    @endcomponent
    @component('Layouts.relicon')
    @endcomponent
    <title>{{$title ?? 'Title Page'}} | Doiscode Technology</title>
    @component('Layouts.style')
    @endcomponent
</head>

<body>
    <div class="tap-top" style="background-color: #FF4E7E;"><i class="fa-solid fa-angles-up"></i></div>
    <main>
        @component('Layouts.header')

        @endcomponent
        @yield('content')
    </main>
 <!-- bootstrap js -->
    @component('Layouts.footer')

    @endcomponent

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
    </script>
  </body>
</html>
