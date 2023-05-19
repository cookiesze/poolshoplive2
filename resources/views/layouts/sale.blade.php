<!DOCTYPE html>
<html lang="en">


<!-- index-2 06:41:43 GMT -->
<head>
    <meta charset="UTF-8">
    
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/assets/font-awesome/css/font-awesome.min.css')}}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('admin/theme/assets/material-design-icons/material-design-icons.css')}}" type="text/css" />
    <!-- Favicon -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

</head>

<body>
    <div class="boxed_wrapper">






        @yield('content')



    </div>

    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.bootstrap-touchspin.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.enllax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.paroller.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.js') }}"></script>
    <script src="{{ asset('frontend/js/validation.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.js') }}"></script>

<!---
<script src="js/gmaps.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyB2uu6KHbLc_y7fyAVA4dpqSVM4w9ZnnUw"></script>
<script src="js/mapapi.js"></script>
--->
<script src="{{ asset('frontend/js/map-helper.js') }}"></script>

<script src="{{ asset('frontend/assets/language-switcher/jquery.polyglot.language.switcher.js') }}"></script>
<script src="{{ asset('frontend/assets/timepicker/timePicker.js') }}"></script>
<script src="{{ asset('frontend/assets/html5lightbox/html5lightbox.js') }}"></script>

<!--Revolution Slider-->
<script src="{{ asset('frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('frontend/js/main-slider-script.js') }}"></script>

<!-- thm custom script -->
<script src="{{ asset('frontend/js/custom.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<script>
    var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel)
</script>

</body>

<!-- index-2 06:43:55 GMT -->
</html>
