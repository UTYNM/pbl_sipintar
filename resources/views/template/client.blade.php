<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Pangan</title>
  <meta name="description" content="Morden Bootstrap HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/favicon.ico')}}">
    
   <!-- ======= All CSS Plugins here ======== -->
  <link rel="stylesheet" href="{{ asset('frontend/css/plugins/swiper-bundle.min.css')}}">
  <link rel="stylesheet" href="{{ asset('frontend/css/plugins/glightbox.min.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Plugin css -->
  <link rel="stylesheet" href="{{ asset('frontend/css/vendor/bootstrap.min.css')}}">

  <!-- Custom Style CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css')}}">
</head>

<body>
    <!-- Start header area -->
    @include('section.frontend.header')
    <!-- End header area -->

    <main class="main__content_wrapper">
     @yield('content')
    </main>
    
    <!-- Start footer section -->
    @include('section.frontend.footer')
    <!-- End footer section -->

     <!-- Scroll top bar -->
     <button id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>
    
  <!-- All Script JS Plugins here  -->
 <script src="{{ asset('frontend/js/vendor/popper.js')}} "defer="defer"></script>
   <script src="{{ asset('frontend/js/vendor/bootstrap.min.js')}} " defer="defer"></script>
   <script src="{{ asset('frontend/js/plugins/swiper-bundle.min.js')}} "></script>
   <script src="{{ asset('frontend/js/plugins/glightbox.min.js')}} "></script>
   @include('sweetalert::alert')

  <!-- Customscript js -->
  <script src="{{ asset('frontend/js/script.js')}}"></script>
</body>
</html>