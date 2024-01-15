<!DOCTYPE html>
<html lang="en">

<head>
    @component('Layouts.seo')
    @endcomponent
    @component('Layouts.relicon')
    @endcomponent
    <title>{{ $title ?? 'Title Page' }} | Dashboard</title>

    <script src="https://kit.fontawesome.com/8fbf0bcced.js" crossorigin="anonymous"></script>
    @component('Layouts.style')
    @endcomponent
</head>

<body style="background: #eee;">
    <div class="wrapper-user">
        <div class="section-absolute">
            <div class="tap-top" style="background-color: #FF4E7E;"><i class="fa-solid fa-angles-up"></i></div>
            <main>
                {{-- <div class="container bg-white p-4" style="height: 100vh; overflow-y: scroll;"> --}}
                @component('User.Layouts.nav')
                @endcomponent
                @yield('content')
                {{-- </div> --}}


            </main>
        </div>
        <!-- bootstrap js -->
        {{-- @component('Layouts.footer')

    @endcomponent --}}
        <div class="whatsapp-floating">
            <a href="https://wa.me/+6281380004668/?text=Hi,MaxelCourse" target="_blank" rel="noopener noreferrer">
                <i class="fa-brands fa-whatsapp text-white" style="font-size: 70px"></i>
            </a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
<script>
    const durationField = document.querySelector('#duration');
    const titleClass = document.querySelector('#titleClass');
    const subtitleClass = document.querySelector('#subtitleClass');

    function setBasicClassDuration(duration) {
        durationField.value = duration ?? 0;
        titleClass.innerHTML = duration === 0 ? 'Lifetime Class Period' : `${duration} Months Package`;
        subtitleClass.innerHTML = duration === 0 ? 'Pay once, access with no limited time.' :
            `${duration} Months of amazing courses`;
    }

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

@yield('script')

</html>
