<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="{{asset('images/title_logo_og.png')}}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"> -->

    <!-- headind-fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"> -->
    <!-- css starts hear -->
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
    <link rel="stylesheet" href="{{ asset('css\plugins\plugins.css')}}">
    <link rel="stylesheet" href="{{ asset('css\plugins\magnifying-popup.css')}}">
      <link rel="stylesheet" href="{{ asset('css\style.css')}}">
      <link rel="stylesheet" href="{{ asset('css\helper.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="{{ asset('css\style.css')}}">
    <link rel="stylesheet" href="{{ asset('css\plugins\aos.css')}}">
   
    <link rel="stylesheet" href="{{ asset('css\plugins\hover-revel.css')}}">
    <link rel="stylesheet" href="{{ asset('css\plugins\magnifying-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css\plugins\metismenu.css')}}">
     <link rel="stylesheet" href="{{ asset('css\plugins\plugins.css')}}">
    <link rel="stylesheet" href="{{ asset('css\plugins\timepickers.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css\plugins\unicons.css')}}">
    <link rel="stylesheet" href="{{ asset('css\vendor\animate.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->



    <title>Physio Meet</title>
</head>

<body>
    @include('site_includes.header')
    @yield('content')




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"
        integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{asset('js/plugins/jquery.js')}}"></script>
        <script src="{{asset('js/plugins/jquery-ui.js')}}"></script>
        <script src="{{asset('js/vendor/waw.js')}}"></script> 
        <script src="{{asset('js/plugins/swiper.js')}}"></script>
        <script src="{{asset('js/plugins/metismenu.js')}}"></script>
        <script src="{{asset('js/plugins/jarallax.js')}}"></script>
        <script src="{{asset('js/plugins/smooth-scroll.js')}}"></script>
        <script src="{{asset('js/plugins/magnifying-popup.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script src="{{asset('js/plugins/aos.js')}}"></script> 
    <script src="{{asset('js/plugins/counter-up.js')}}"></script>
    <script src="{{asset('js/plugins/gsap.min.js')}}"></script>
    <script src="{{asset('js/plugins/hover-revel.js')}}"></script>
    <script src="{{asset('js/plugins/jarallax.js')}}"></script>
    <script src="{{asset('js/plugins/jquery-slideNav.js')}}"></script>
    <script src="{{asset('js/plugins/jquery-ui.js')}}"></script>
    <script src="{{asset('js/plugins/jquery.js')}}"></script>
    <script src="{{asset('js/plugins/magnifying-popup.js')}}"></script>
    <script src="{{asset('js/plugins/metismenu.js')}}"></script>
    <script src="{{asset('js/plugins/plugins.js')}}"></script>
    <script src="{{asset('js/plugins/scrolltigger.js')}}"></script>
    <script src="{{asset('js/plugins/smooth-scroll.js')}}"></script>
    <script src="{{asset('js/plugins/swip-img.js')}}"></script>
    <script src="{{asset('js/plugins/swiper.js')}}"></script>
    <script src="{{asset('js/plugins/text-plugins.js')}}"></script> -->


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    @include('site_includes.footer')
</body>

</html>