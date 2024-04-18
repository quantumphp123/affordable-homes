{{-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Affordable Homes</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<script>
  function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>



<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top" id="logo">Affordable
        <BR/><BR/> Homes</a>
      <!-- <div class="phone"><span>Call Today</span>320-123-4321</div> -->
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Services</a></li>
        <li><a href="#portfolio" class="page-scroll">Projects</a></li>
        <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>

        <span id="log">
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal1" style="margin-top: 1rem;margin-right: 2rem;">Login</button>

          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal2"  style="margin-top: 1rem;">Sign up</button>
        </span>
       
      </ul>
    
      
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
</body>
</html> --}}
{{-- <script type="text/javascript" src="{{ url('assets/js/main.js') }}"></script> --}}

@extends('users.layout.layout')

@section('content')
    <!-- Image Corusels -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            @for ($i = 1; $i < count($data['images']); $i++)
                <li data-target="#myCarousel" data-slide-to="{{ $i }}"></li>
            @endfor

        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img Class="img-responsive" src="{{ url('assets/img/properties/' . $data['images'][0]['name']) }}"
                    alt="property_pic" style="width: 100%; height:600px;">
            </div>
            @for ($i = 1; $i < count($data['images']); $i++)
                <div class="item">
                    <img Class="img-responsive" src="{{ url('assets/img/properties/' . $data['images'][$i]['name']) }}"
                        alt="property_pic" style="width: 100%; height:600px;">
                </div>
            @endfor
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- End Image Corusels -->
    <br><br>

    <!-- middle content -->

    <div>

        <h1
            style="display: flex;justify-content: center;font-weight: 700;
  color: #1f386e;letter-spacing: 0.05em;font-size: 60px;TEXT-ALIGN: center;">
            {{ $data['property']['name'] }}</h1>
        <h3 style="font-size: 30px;display: flex;justify-content: center;color: #393f44;">
            {{ '$' . number_format($data['property']['price']) }}</h3>
        <br>
        <div style="display: flex;justify-content: center;">

          <button id="pdt" type="button" class="btn btn-info btn-lg" @if (session()->has('user_id'))
            onclick="pdopen()" @disabled(true)
          @endif >Purchase Details
          @if (!session()->has('user_id'))
            <p>Login/Signup to Enable Purchase Details</p>
            @endif
        </button>

        </div>

        <br>
        <h5 id="fix">​ We do deliver, the charge depends on location</h5>
        <hr class="hr1">
        <br>
        <br>
        {{-- <div class="video">
            <div id="fix">
                <iframe loading="lazy" width="500px" height="300px"
                    src="https://video.wixstatic.com/video/cdbbf5_0b2ec8e2c6824bc08d8b4acf73c30eeb/1080p/mp4/file.mp4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    <video controls="" autoplay="" name="media"
                        style="width: -webkit-fill-available;
            object-fit: cover;">
                        <source
                            src="https://video.wixstatic.com/video/cdbbf5_0b2ec8e2c6824bc08d8b4acf73c30eeb/1080p/mp4/file.mp4"
                            type="video/mp4">
                    </video>
                </iframe>
            </div>
        </div> --}}
    </div>

    <br><br><br><br>

    {{-- Property Details --}}
    <section style="background-color: #f6f6f6;">
        <div class="container">
            <h1 id="fix">{{ $data['property']['name'].' Details' }}</h1>
            <br>
            <h4 id="fix">Size: </h4>
            <p id="fix">{{ $data['property']['length']*$data['property']['width'].' Sq.Foot' }}</p>
            <br>
            <h4 id="fix">Property Details: </h4>
            <p id="fix">{{ $data['property']['description'] }}</p>
            <br>
            <h4 id="fix">Number of Bedrooms:</h4>
            <p id="fix">{{ $data['property']['bedroom'] }}</p>
            <br>
            <h4 id="fix">Number of Levels:</h4>
            <p id="fix">{{ $data['property']['level'] }}</p>
            <br>
            <h4 id="fix">kitchen:</h4>
            <p id="fix">{{ $data['property']['kitchen'] }}</p>
            <br>
            <h4 id="fix">Price:</h4>
            <p id="fix">{{ '$'.number_format($data['property']['price']) }}</p>
            <br>
        </div>
    </section>
    {{-- End Property Details --}}

    {{-- Property Maps --}}
    @foreach ($data['maps'] as $map)
    <div id="fix">
      <img Class="img-responsive"
          src="{{ url('assets/img/properties/'.$map['name']) }}" alt="property_map"
          id="fix">
  </div>
    @endforeach
    {{-- End Property Maps --}}
@endsection


<form action="{{ route('users.save.purchase.details') }}" method="post">
  @csrf
  <input type="hidden" value="{{ $data['property']['id'] }}" name="property_id">
  <!-- modal 10 purchase details -->

<div id="myModal10" class="modal fade" role="dialog" style="overflow-y: scroll;overflow-x: hidden;" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background: #F9F9F9;">
        <p style="display: flex;
        justify-content: end;margin-right: 0.5rem;">Hi
          <img src="./img/portfolio/user.png" style="    width: 4%;">

          <div style="background: #FFFFFF;"></div>

        </p>

        <p class="modal-title" style="    color: #1f386e;
        margin-top: -4rem;">AFFORDABLE <br> HOMES </p>

      </div>
      
      <div class="modal-body"   >
        <div class="row">
          <div class="col-sm-1 col-md-1 col-lg-1" >       
        </div>

          <div class="col-sm-11 col-md-11 col-lg-11" style="padding: 1rem;">

            <p style="
            font-size: 22px;
            font-weight: 700;
            color: black;
            ">Purchase details
             
          </p>

          <hr id="h"/>

          <p style="    font-size: 18px;font-weight: 700;padding: 2rem;color:#444444;">
            Cost is $<b id="basePrice">{{ $data['property']['price'] }}</b> for the base model, adding your amenities and functionality from there
          </p>

          <p style="font-size: 16px;font-weight: 400;padding: 2rem;padding-top: 0rem!important;color: #AAAAAA;">
            <b style="color:#444444;">Component cost breakup</b> 

            <br>
            
             Showing cost of each component which is added to your unit
            </p>

          <div class="row" style="padding: 2rem;" >
            <div class="col-sm-4 col-md-5 col-lg-5">
              <p style="color: #AAAAAA;">
               <b style="color:#444444;">Windows</b> 
                <br>
                Wall size 10” by 18”, Hidden
              </p>

            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <p style="color: #000000;">$<b id="winPrice">{{ number_format($data['prices'][0]['price']) }}</b>
              </p>

            </div>

            
            <div class="col-sm-4 col-md-3 col-lg-3">
              <input class="form-control" id="winQty" type="number" name="windows" value="0" min="0">
            </div>
           
          </div>

          <div class="row" style="padding: 2rem;" >
            <div class="col-sm-4 col-md-5 col-lg-5">
              <p style="color: #AAAAAA;">             
                <b style="color:#444444;">Doors</b> 
                <br>
                Door size 4’ by 6’ door, metal and locking:
              </p>

            </div>


            <div class="col-sm-4 col-md-4 col-lg-4">
              <p style="color: #000000;">$<b id="doorsPrice">{{ number_format($data['prices'][1]['price']) }}</b> </p>

            </div>

      
            <div class="col-sm-4 col-md-3 col-lg-3">
                <input class="form-control" id="doorsQty" type="number" name="doors" value="0" min="0">
        </div>



           
          </div>

          
          <div class="row" style="padding: 2rem;" >
            <div class="col-sm-4 col-md-5 col-lg-5">
              <p style="color: #AAAAAA;">             
                <b style="color:#444444;">Hatch/skylight roof</b> 
                <br>
                Hatch size 24” by 36”
              </p>

            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <p style="color: #000000;">$<b id="hsrPrice">{{ number_format($data['prices'][2]['price']) }}</b> </p>

            </div>

            <div class="col-sm-4 col-md-3 col-lg-3">
                <input class="form-control" id="hsrQty" type="number" name="hatch_skylight_roof" value="0" min="0">
        </div>
           
          </div>

          <div class="row" style="padding: 2rem;" >
            <div class="col-sm-4 col-md-5 col-lg-5">
              <p style="color: #AAAAAA;">             
                <b style="color:#444444;">Toilet</b> 
                <br>
                Composting
              </p>

            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <p style="color: #000000;">$<b id="toiletPrice">{{ $data['prices'][3]['price'] }}</b> </p>

            </div>
            
            <div class="col-sm-4 col-md-3 col-lg-3">
                <input class="form-control" id="toiletQty" type="number" name="toilet" value="0" min="0">
        </div>
           
          </div>

          <div class="row" style="padding: 2rem;" >
            <div class="col-sm-4 col-md-5 col-lg-5">
              <p style="color: #AAAAAA;">             
                <b style="color:#444444;">Tub</b> 
                <br>
                With shower
              </p>

            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <p style="color: #000000;">$<b id="tubPrice">{{ $data['prices'][4]['price'] }}</b> </p>

            </div>

            <div class="col-sm-4 col-md-3 col-lg-3">
                <input class="form-control" id="tubQty" type="number" name="tub" value="0" min="0">
        </div>

           
           
          </div>

        <!--<br>-->

        <!--<div class="row" id="toltxt" >-->
        <!--  <div class="col-sm-6 col-md-6 col-lg-6">-->
        <!--    <p style="color: #AAAAAA;"> <b style="color:  #444444;;"> Total :</b> </p>-->

        <!--  </div>-->
        <!--  <div class="col-sm-6 col-md-6 col-lg-6">-->
        <!--    <p style="color: #000000;">$<b id="totalPrice"></b> </p>-->

        <!--  </div>-->
         
        <!--</div>-->
        <hr >
          </div>
    
          
        </div>

      </div>
     
      
      <div class="modal-footer" style="border-top: none;    margin-top: -28px;">
        <button type="button" class="btn btn-default" onclick="opencust()" style="background: #807EE3;color:white">Next</button>
      </div>
    </div>

  </div>
</div>

<!-- modal 10 end -->


 <!-- modal 11 contact details-->
  
 <div id="myModal11" class="modal fade" role="dialog" style="overflow-y: scroll;overflow-x: hidden;" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background: #F9F9F9;">
        <p style="display: flex;
        justify-content: end;margin-right: 0.5rem;">Hi
          <img src="./img/portfolio/user.png" style="    width: 4%;">

          <div style="background: #FFFFFF;"></div>

        </p>

        <p class="modal-title" style="    color: #1f386e;
        margin-top: -4rem;">AFFORDABLE <br> HOMES </p>

      </div>
      
      <div class="modal-body"   >
        <div class="row">
          <div class="col-sm-1 col-md-1 col-lg-1" >       
        </div>

          <div class="col-sm-11 col-md-11 col-lg-11" style="padding: 1rem;">

            <p style="
            font-size: 22px;
            font-weight: 700;
            color: black;
            ">Contract
             
          </p>

          <hr id="h"/>

          <div class="row" style="padding: 2rem;" >
            <div class="col-sm-6 col-md-6 col-lg-6">
              <p style="color: #AAAAAA;">
               <b style="color:#444444;">Contract info</b> 
                <br>
                Date of the commence date
              </p>

            </div>
            <div class="col-sm-6 col-md-6 col-lg-6" >
              <p style="color: #000000;">
                <input type="date" id="inpdate" style="background: #F7F7F8;
                border-radius: 3px;
                padding: 0.5rem;
                border:  #F7F7F8;" name="contract_date" >
              </p>

            </div>
           
          </div>

          <br><br><br>

          <div class="row" style="padding: 2rem;" >
            <div class="col-sm-6 col-md-6 col-lg-6">
              <p style="color: #AAAAAA;">
               <b style="color:#444444;">Client info</b> 
                <br>
                Provide client personal info
              </p>

            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
              <p style="background: #F7F7F8;
              border-radius: 3px;
              padding: 0.5rem;">Name:<input type="text" required value="{{ ' '.session('first_name').' '.session('last_name') }}"  id="custname" style="    border: none;background: #F7F7F8;" readonly> </p>

              <br>

              <p style="background: #F7F7F8;
              border-radius: 3px;
              padding: 0.5rem;">Address:<input type="text" required name="address" id="custaddress" style="    border: none;background: #F7F7F8;"></p>

              <br>

              <p style="background: #F7F7F8;
              border-radius: 3px;
              padding: 0.5rem;">Phone:<input type="number" required id="custphone" value="{{session('phone_number') }}"  style="    border: none;background: #F7F7F8;" readonly></p>

              <br>

              <p style="background: #F7F7F8;
              border-radius: 3px;
              padding: 0.5rem;">Email:<input type="email"  required value="{{ ' '.session('email') }}"  id="custemail" style="    border: none;background: #F7F7F8;" readonly></p>

              {{-- <br><br> --}}
              {{-- <p style="margin-left: 4rem;">Already a User?<a  id="alog" data-dismiss="modal"  data-toggle="modal" data-target="#myModal13" >Login Now</a></p> --}}

            </div>
           
          </div>

        <hr >
          </div>
    
          
        </div>

      </div>
     
      
      <div class="modal-footer" style="border-top: none;    margin-top: -28px;">
        <button type="button" class="btn btn-default" onclick="openproperty()"  style="background: #807EE3;color:white">previous</button>
        <button type="submit" class="btn btn-default" style="background: #807EE3;color:white">Submit</button>
      </div>
    </div>

  </div>
</div>
</form>

<!-- modal 11 end -->

 <!-- modal 12 submit -->
 <input type="hidden" id="sessionPurchaseDetails" @if (session()->has('purchase_details_saved'))
      value="true"
      @else
  value="false"
  @endif>

 <div id="myModal12" class="modal fade" role="dialog" style="overflow-y: scroll;overflow-x: hidden;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background: #F9F9F9;">
        <p style="display: flex;
        justify-content: end;margin-right: 0.5rem;">Hi
          <img src="{{ url('assets/img/portfolio/user.png') }}" style="    width: 4%;">

          <div style="background: #FFFFFF;"></div>

        </p>

        <p class="modal-title" style="    color: #1f386e;
        margin-top: -4rem;">AFFORDABLE <br> HOMES </p>

      </div>
      
      <div class="modal-body"  id="submitbody"  >
  
          <div style="background: #DCFEF9;
          box-shadow: 0px 0px 80px 40px rgba(0, 209, 180, 0.1);
          border-radius: 32px;">

              <div class="row">

                <div class="col-sm-6 col-md-4">
                  <img src="{{ url('assets/img/notebook.png') }}" id="imghouse"> 
                </div>
                <div class="col-sm-6 col-md-8" id="txthouse">
                  <p style="font-size: 14px;font-weight: bold;">Contract created Successfully
                  
                    <button type="button" class="close"  data-dismiss="modal" style="font-weight: 900;font-size: x-large; margin-top: -4px;margin-right: 3rem;">&times;</button>
                  </p>
                  <p style="font-size: 14px;">Thankyou for Purchasing with Us. We will get back to You Soon</p>
                  <p><b>Created by:</b> Affordable Homes 
                    {{-- <button class="btn btn-default"  style="background: #00D1B4;color:white;border-radius: 32px;">
                    Download
                  </button> --}}
                 </p>
                  
                </div>

              </div>
          
        
        
        </div>

      </div>
     
    </div>

  </div>
</div>
  
  
  <!-- modal login second with contact -->
  
  
  <div class="modal" id="myModal13" >
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: rgba(0,0,0,.75);" id="mc">
      
        <!-- Modal Header -->
        <div class="modal-header" style="border: none;"  >
          <h4 class="modal-title" style="    font-size: 32px;
          font-weight: 500;
          margin-bottom: -8px;
          margin-left: 4rem;
          margin-top: 5rem;
          font-family: emoji;">Login</h4>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <input type="text"  value="" tabindex="0" autocomplete="email" spellcheck="false" dir="" placeholder="Email or Phone Number" id="em">
  
          <br><br>
          <input type="password"  value="" tabindex="0"  dir="" placeholder="Password" id="pass">
  
          <br><br>
  
          <button type="submit" class="btn btn-danger" style="margin-left: 4rem;background-color: #e50914;" data-dismiss="modal"  data-toggle="modal" data-target="#myModal11">Login</button>
  
          <br><br><br>
  
          <p style="margin-left: 4rem;">New to Affordable Home?<a style="color: white;" >SignUp Now</a></p>
  
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer" style="border: none;">  
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  



@section('script')
<script>
  let sessionPurchaseDetails = document.getElementById("sessionPurchaseDetails").value
  if (sessionPurchaseDetails == "true") {
    // showing contract created modal
    $('#myModal12').modal() 
  }
</script>
<script>
    $(document).ready(function () {
        $('#totalPrice').text($('#basePrice').html());
        var base = parseInt($('#totalPrice').html());
        
        $('#tubQty').on('input', function() {
            var tubQty = parseInt($('#tubQty').val());
            var tubPrice = parseInt($('#tubPrice').html());
            var tprice = base + (Number(tubQty) * Number(tubPrice));
            $('#totalPrice').text(tprice);
        });
        
        $('#toiletQty').on('input', function() {
            var tubQty = parseInt($('#toiletQty').val());
            var tubPrice = parseInt($('#toiletPrice').html());
            var tprice = base + (Number(tubQty) * Number(tubPrice));
            $('#totalPrice').text(tprice);
        });
    });
</script>
@endsection
