<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Affordable Homes</title>

<meta name="description" content="">

<meta name="author" content="">



<!-- Favicons

    ================================================== -->

<link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

<link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">

<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/apple-touch-icon-72x72.png') }}">

<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/apple-touch-icon-114x114.png') }}">



<!-- Bootstrap -->

<link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/bootstrap.css?v=1') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.css') }}">



    <!-- Libraries Stylesheet -->

    <link href="{{ url('assets/lib/animate/animate.min.css') }}" rel="stylesheet">

    <link href="{{ url('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">



    <!-- Customized Bootstrap Stylesheet -->

    {{-- <link href="{{ url('assets/css/bootstrap.min2.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ url('assets/fonts/font-awesome/css/font-awesome.css') }}"> --}}



    <!-- Template Stylesheet -->

    {{-- <link href="{{ url('assets/css/style2.css') }}" rel="stylesheet"> --}}



<!-- Stylesheet

    ================================================== -->

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css?v=1') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nivo-lightbox/nivo-lightbox.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nivo-lightbox/default.css') }}">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">



<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


  {{-- @if (url()->current() == 'http://quantumit.online/affordable-homes') --}}
  @if (Request::path() == '/')
  @include('users.partials.header_index')
  @else
  @include('users.partials.header')
  @endif



  @yield('content')



  @include('users.partials.footer')


<script type="text/javascript" src="{{ url('assets/js/jquery.1.11.1.js') }}"></script> 

<script type="text/javascript" src="{{ url('assets/js/bootstrap.js') }}"></script> 

<script type="text/javascript" src="{{ url('assets/js/SmoothScroll.js') }}"></script> 

<script type="text/javascript" src="{{ url('assets/js/nivo-lightbox.js') }}"></script> 

<script type="text/javascript" src="{{ url('assets/js/jqBootstrapValidation.js') }}"></script> 

{{-- <script type="text/javascript" src="{{ url('assets/js/contact_me.js') }}"></script>  --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
<script type="text/javascript" src="{{ url('assets/js/main.js?v=1') }}"></script>



  @yield('script')

</body>

</html>