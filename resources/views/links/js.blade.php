<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- MDB -->
{{-- <script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"
></script> --}}
    <!-- swiper css -->
    <link href="https://unpkg.com/swiper@10/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://unpkg.com/swiper@10/swiper-bundle.min.js"></script>

{{-- ALERT MESSAGE --}}
@if (session('status'))
    <script>
        Swal.fire({
  title: "{{ session('title') }}",
  text: "{{ session('desc') }}",
  icon: "{{ session('status') }}",
  confirmButtonText: 'Cool'
})
    </script>
@endif

<script>
    // Initialize Swiper
    var swiper = new Swiper('.mySwiper', {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    // Scroll  navbar 
    window.addEventListener('scroll', function() {
        var navbar = document.querySelector('#header .navbar');
        console.log(navbar);
        
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
