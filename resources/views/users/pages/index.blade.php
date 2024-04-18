@extends('users.layout.layout')



@section('content')

    <!-- Header -->

    <header id="header">
        <div class="intro">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                      <div class="col-md-8 col-md-offset-2 intro-text">
                        @php
                            $arr = ['unit', 'usage', 'budget', 'financing_need', 'goal', 'bedroom', 'kitchen', 'bathroom', 'bathroom_number', 'meeting_date']
                        @endphp
                        @foreach ($arr as $error)
                        @error($error)
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        @endforeach
                            <h1>Customize your Dream Home<br>

                                at Affordable prices</h1>

                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at.</p> -->

                            <button class="btn btn-danger" data-toggle="modal" data-target="#myModal">Check Houseplans</button>



                            <!-- pop up -->

                            <!-- The Modal -->

                            <div class="modal" id="myModal">

                                <div class="modal-dialog">

                                    <div class="modal-content"

                                        style="background-image: url({{ url('assets/img/bg/bg.webp') }});">



                                        <!-- Modal Header -->

                                        <div class="modal-header">

                                            <h4 class="modal-title"> Select A HOUSE PLAN</h4>

                                        </div>



                                        <!-- Modal body -->

                                        <div class="modal-body">

                                            <div class="find_a_house_plan_form">

                                                <div class="body">

                                                    <form id="search_form" action="{{ route('users.property.listing') }}" method="GET">
                                                        <!-- @csrf -->
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-6 col-xs-12">
                                                                <label id="bname">Choose Floors/Levels/Stories</label>
                                                                <div class="btn-group btn-group-justified" data-toggle="buttons">
                                                                    @for ($i = 1; $i <= 4; $i++)
                                                                    <label class="btn btn-default">
                                                                      <input type="radio" name="level" value="{{ $i }}">
                                                                      {{ $i }}
                                                                  </label>
                                                                    @endfor
                                                                </div>
                                                            </div>
                                                            <!-- bed room -->
                                                            <div class="col-md-12 col-sm-6 col-xs-12">
                                                                <label id="bname">Select Bedrooms</label>
                                                                <br /><br />
                                                                <div class="btn-group btn-group-justified"
                                                                    data-toggle="buttons" style="width: 75%">
                                                                    @for ($i = 1; $i <= 4; $i++)
                                                                    <label class="btn btn-default">
                                                                      <input type="radio" name="bedroom"
                                                                          id="bedroom" value="{{ $i }}">
                                                                      {{ $i }}
                                                                  </label>
                                                                    @endfor
                                                                </div>
                                                            </div>
                                                            <!-- end bedroom -->
                                                        </div>
                                                        <br /><br />
                                                        <div id="rngtx">
                                                          <span id="rngf">0 ft<sup>2</sup></span>
                                                          <span id="rngm">SquareFeet:<span id="demo"></span>ft<sup>2</sup></span>
                                                          <span id="rngl">10000 ft<sup>2</sup></span>
                                                        </div>
                                                        
                                                        <!-- slider  -->
                                                        <div class="slidecontainer">
                                                            <input type="range" min="0" max="10000"
                                                                name="size" value="00" class="slider" id="myRange">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12" style="text-align:end;">
                                                                <button class="btn btn-primary" type="submit" href="{{ route('users.property.listing') }}">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                        </div> --}}
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Get Touch Section -->

    <div id="get-touch">

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-md-6 col-md-offset-1">

                    <h3>Click here to customize your own Dream Home</h3>

                </div>

                <div class="col-xs-12 col-md-4 text-center" id="mod"><button href="" id="mod" class="btn btn-custom btn-lg page-scroll"  class="btn btn-danger" data-toggle="modal" data-target="#myModal4" style="margin-top: 1rem;margin-right: 2rem;" >Customize your Home</button></div>
    </div>

            </div>

        </div>

    </div>

    <!-- About Section -->

    <div id="about">

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-md-6"> <img src="{{ asset('assets/img/about.jpg') }}" class="img-responsive"

                        alt=""> </div>

                <div class="col-xs-12 col-md-6">

                    <div class="about-text">

                        <h2>Who We Are</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut

                            labore et

                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut

                            aliquip ex

                            ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod

                            tempor

                            incididunt ut labore et dolore magna aliqua.</p>

                        <h3>Why Choose Us?</h3>

                        <div class="list-style">

                            <div class="col-lg-6 col-sm-6 col-xs-12">

                                <ul>

                                    <li>Years of Experience</li>

                                    <li>Fully Insured</li>

                                    <li>Cost Control Experts</li>

                                    <li>100% Satisfaction Guarantee</li>

                                </ul>

                            </div>

                            <div class="col-lg-6 col-sm-6 col-xs-12">

                                <ul>

                                    <li>Free Consultation</li>

                                    <li>Satisfied Customers</li>

                                    <li>Project Management</li>

                                    <li>Affordable Pricing</li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Services Section -->

    <div id="services">

        <div class="container">

            <div class="section-title">

                <h2>Our Services</h2>

            </div>



            @for ($i = 0; $i < count($data['services']); $i += 3)

                <div class="row">

                    @for ($j = $i; $j < $i + 3; $j++)

                        @if (isset($data['services'][$j]))

                            <div class="col-md-4">

                                <div class="service-media"> <img

                                        src="{{ asset('assets/img/services/' . $data['services'][$j]['image']) }}"

                                        alt="img"> </div>

                                <div class="service-desc">

                                    <h3>{{ $data['services'][$j]['name'] }}</h3>

                                    <p>{{ $data['services'][$j]['description'] }}</p>

                                </div>

                            </div>

                        @endif

                    @endfor

                </div>

            @endfor

        </div>

    </div>

    <!-- Gallery Section -->

    <div id="portfolio">

        <div class="container">

            <div class="section-title">

                <h2>Our Works</h2>

            </div>

            @for ($i = 0; $i < count($data['projects']); $i += 3)

                <div class="row">

                    @for ($j = $i; $j < $i + 3; $j++)

                        @if (isset($data['projects'][$j]))

                            <div class="col-sm-6 col-md-4 col-lg-4">

                                <div class="portfolio-item">

                                    <div class="hover-bg"> <a href="{{ asset('assets/img/portfolio/' . $data['projects'][$j]['image']) }}" title="Project Title"

                                            data-lightbox-gallery="gallery1">

                                            <div class="hover-text">

                                                <h4>{{ $data['projects'][$j]['name'] }}</h4>

                                            </div>

                                            <img src="{{ asset('assets/img/portfolio/' . $data['projects'][$j]['image']) }}"

                                                class="img-responsive" alt="Project Img" width="400px" height="400px">

                                        </a> </div>

                                </div>

                            </div>

                        @endif

                    @endfor

                </div>

            @endfor

            {{-- <div class="row">

      <div class="portfolio-items">

        @foreach ($data['projects'] as $project)

        <div class="col-sm-6 col-md-4 col-lg-4">

          <div class="portfolio-item">

            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Project Title"

                data-lightbox-gallery="gallery1">

                <div class="hover-text">

                  <h4>{{ $project['name'] }}</h4>

                </div>

                <img src="{{ asset('assets/img/portfolio/'.$project['image']) }}" class="img-responsive" alt="Project Img" width="400px" height="400px">

              </a> </div>

          </div>

        </div>

        @endforeach

      </div>

    </div> --}}

        </div>

    </div>

    <!-- Testimonials Section -->

    <div id="testimonials">

        <div class="container">

            <div class="section-title">

                <h2>Testimonials</h2>

            </div>

            @for ($i = 0; $i < count($data['testimonials']); $i += 3)

                <div class="row">

                    @for ($j = $i; $j < $i + 3; $j++)

                        @if (isset($data['testimonials'][$j]))

                            <div class="col-md-4">

                                <div class="testimonial">

                                    <div class="testimonial-image"> <img

                                            src="{{ asset('assets/img/testimonials/' . $data['testimonials'][$j]['image']) }}"

                                            alt="img" height="65px" width="65px"> </div>

                                    <div class="testimonial-content">

                                        <p>"{{ $data['testimonials'][$j]['message'] }}"</p>

                                        <div class="testimonial-meta">{{ ' - ' . $data['testimonials'][$j]['name'] }}

                                        </div>

                                    </div>

                                </div>

                            </div>

                        @endif

                    @endfor

                </div>

            @endfor

        </div>

    </div>

    <!-- our Goal  -->

    <div id="goals">

        <div class="container">

            <div class="section-title">

                <h2> Our Goal</h2>

            </div>

            <section>

                <div class="row">

                    @foreach ($data['goals'] as $goal)

                        <div class="col-sm-12 col-md-5"

                            style="border: 1px solid #1f386e;border-radius: 2.2rem;padding: 3rem;margin: 3rem; ; height: 34rem;">

                            <h2 style="font-size: 44px; color: #1f386e;">{{ $goal['name'] }}</h2>

                            <span style="font-size: 16px;display: flex;text-align: justify;">

                                {{ $goal['description'] }}

                            </span>

                        </div>

                    @endforeach

                </div>

            </section>

        </div>

    </div>

    <br><br>

    <!-- Contact Section -->

    <div id="contact">

        <div class="container">

            <div class="col-md-8">

                <div class="row">

                    <div class="section-title">

                        <h2>Get In Touch</h2>

                        <p>Please fill out the form below to send us an email and we will get back to you as soon as

                            possible.</p>

                    </div>

                    <form action="{{ route('users.query.add') }}" method="post" id="contactForm">

                        @csrf

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">

                                    <input type="text" id="name" class="form-control" name="name"

                                        placeholder="Name" required="required">

                                    <p class="help-block text-danger"></p>

                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">

                                    <input type="email" id="email" class="form-control" name="email"

                                        placeholder="Email" required="required">

                                    <p class="help-block text-danger"></p>

                                </div>

                            </div>

                        </div>

                        <div class="form-group">

                            <textarea name="message" id="message" class="form-control" rows="4" name="message" placeholder="Message"

                                required></textarea>

                            <p class="help-block text-danger"></p>

                        </div>

                        <div id="success"></div>

                        @if (session()->has('message-sent') && session('message-sent') == true)

                            <button type="submit" class="btn btn-custom btn-lg">Message Successfully Sent</button>

                        @else

                            <button type="submit" class="btn btn-custom btn-lg">Send Message</button>

                        @endif

                    </form>

                </div>

            </div>

            <div class="col-md-3 col-md-offset-1 contact-info">

                <div class="contact-item">

                    <h4>Contact Info</h4>

                    <p><span>Address</span>4321 California St,<br>

                        San Francisco, CA 12345</p>

                </div>

                <div class="contact-item">

                    <p><span>Phone</span> +1 123 456 1234</p>

                </div>

                <div class="contact-item">

                    <p><span>Email</span> info@company.com</p>

                </div>

            </div>

            <div class="col-md-12">

                <div class="row">

                    <div class="social">

                        <ul>

                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>

    
    <form action="{{ route('users.save.infos') }}" method="post">
      @csrf
      <!-- modal 4 -->
<div id="myModal4" class="modal fade" role="dialog" style="overflow-y: scroll;overflow-x: hidden;" >
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background: #F9F9F9;">
        <p style="display: flex;
        justify-content: end;margin-right: 0.5rem;">Hi, User
          {{-- <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" style="    width: 4%;">
          <div style="background: #FFFFFF;"></div> --}}
        </p>
        <p class="modal-title" style="    color: #1f386e;
        margin-top: -4rem;">AFFORDABLE <br> HOMES </p>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6" id="colbox">
            <br><br>
          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox" />
              <label for="checkbox"></label>
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #807EE3;">Your Unit</span>
            </div>
          </div>
          <br><br><br>
          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox1" />
              <label for="checkbox1"></label>
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Usage</span>
            </div>
          </div>
          <br><br><br>
          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox2" />
              <label for="checkbox2"></label>
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Finance info</span>
            </div>
          </div>
          <br><br><br>
          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox3" />
              <label for="checkbox3"></label>
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Goals</span>
            </div>
          </div>
          <br><br><br>
          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox4" />
              <label for="checkbox4"></label>
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Customization</span>
            </div>
          </div>
          <br><br><br>
          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox5" />
              <label for="checkbox5"></label>
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Meeting</span>
            </div>
          </div>
          <br>
          <br>
        </div>
          <div class="col-sm-6 col-md-6 col-lg-6" id="wkou">
            <p id="ptxt">What kind of unit you are planning ?
          </p>
          <p id="ptxt2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ex purus. Duis eget commodo lacus. Pellentesque congue eros et porttitor mattis. 
          </p>
          <br>
          <div style="background: #F7ECFC;
            border-radius: 16px;">              
            <div class="row" >
              <div class="col-md-3">
                <img src="{{ asset('assets/img/Group 8.png') }}" id="imghouse"> 
              </div>
              <div class="col-md-8" id="txthouse">
                <p style="font-size: 14px;font-weight: bold;">Work mobile unit to take on the go.</p>
                <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia risus quis urna egestas, nec faucibus dia</p>
                <p><b>Created by:</b> affordable home  
                  <input class="form-check-input" name="unit"  type="radio" id="btnhome" value="Work mobile unit to take on the go" required/>
                   <label class="form-check-label" for="btnhome" id="l2"> <img src="{{ asset('assets/img/Group 3.png') }}" />
                  </label>
                 </p>
                
              </div>
  
            </div>
            
          
          </div>

       

        <br>


          <div style="background: #F4F4FE;border-radius: 16px;">
            <div class="row" style="border: none;">
    
              <div class="col-md-3">
                <img src="{{ asset('assets/img/blue.png') }}" id="imghouse">
              </div>
              <div class="col-md-8" id="txthouse">
                <p style="font-size: 14px;font-weight: bold;">Versatile tiny living unit</p>
                <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia risus quis urna egestas, nec faucibus dia</p>
                <p><b>Created by:</b> affordable home
                  
                  <input class="form-check-input" name="unit"  type="radio" id="btnhome2" value="Versatile tiny living unit"/>
                   <label class="form-check-label" for="btnhome2" id="l2"> <img src="{{ asset('assets/img/Group 3 (1).png') }}" >
                  </label>
                         
                </p>
                
              </div>
    
            </div>
            
          
          </div>
   

      <br>

        <div style="background: #FBECF1;border-radius: 16px;">
          <div class="row">
  
            <div class="col-md-3">
              <img src="{{ asset('assets/img/undraw_cabin_hkfr (1) 1.png') }}" id="imghouse">
            </div>
            <div class="col-md-8" id="txthouse">
              <p style="font-size: 14px;font-weight: bold;">Cozy tiny home to call your own</p>
              <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia risus quis urna egestas, nec faucibus dia</p>
              <p><b>Created by:</b> affordable home 
                
                <input class="form-check-input" name="unit"  type="radio" id="btnhome3" value="Cozy tiny home to call your own"/>
                <label class="form-check-label" for="btnhome3" id="l2">  <img src="{{ asset('assets/img/red arrow.png') }}" >
               </label>

               </p>
              
            </div>
  
          </div>
          
        
        </div>
     

      <hr>


          </div>
       
       
        </div>
      </div>
      <div class="modal-footer" style="border-top: none">
        <button type="button" class="btn btn-default"  onclick="getradiovalue()"   style="background: #807EE3;color:white">Next</button>
      </div>
    </div>

  </div>
</div>


<!--  -->





<!-- modal 5 -->

<div id="myModal5" class="modal fade" role="dialog" style="overflow-y: scroll;overflow-x: hidden;" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background: #F9F9F9;">
        <p style="display: flex;
        justify-content: end;margin-right: 0.5rem;">Hi, User
          {{-- <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" style="    width: 4%;">

          <div style="background: #FFFFFF;"></div> --}}

        </p>

        <p class="modal-title" style="    color: #1f386e;
        margin-top: -4rem;">AFFORDABLE <br> HOMES </p>

      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6" id="colbox2">

            <br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox" checked  id="checkbox" />
              <label for="checkbox"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;">Your Unit</span>
            </div>
          </div>

          <br><br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox1" />
              <label for="checkbox1"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #807EE3;">Usage</span>
            </div>
          </div>

          <br><br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox2" />
              <label for="checkbox2"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Finance info</span>
            </div>
          </div>

          <br><br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox3" />
              <label for="checkbox3"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Goals</span>
            </div>
          </div>

          <br><br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox4" />
              <label for="checkbox4"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Customization</span>
            </div>
          </div>

          <br><br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox5" />
              <label for="checkbox5"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Meeting</span>
            </div>
          </div>

          <br>
          <br>

          
        
        </div>

          <div class="col-sm-6 col-md-6 col-lg-6" id="wkou">

            <p  id="ptxt">Your are going to use it ?</p>

          <p id="ptxt2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ex purus. Duis eget commodo lacus. Pellentesque congue eros et porttitor mattis. 
          </p>


          <div style="background: #F7ECFC;
          border-radius: 16px;">
          <div class="row">

            <div class="col-md-3">
              <img src="{{ asset('assets/img/undraw_navigator_a479 1.png') }}" id="imghouse"> 
            </div>
            <div class="col-md-8" id="txthouse">
              <p style="font-size: 14px;font-weight: bold;">On the road</p>
              <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia risus quis urna egestas, nec faucibus dia</p>
              <p><b>Created by:</b> affordable home 
                
                <input class="form-check-input" name="usage"  type="radio" id="btnr1" value="on the road" required/>
                   <label class="form-check-label" for="btnr1" id="l2"> <img src="{{ asset('assets/img/Group 3.png') }}" />
                  </label>

              </p>
              
            </div>

          </div>
          
        
        </div>

        <br>

        
        <div style="background: #F4F4FE;
        border-radius: 16px;">
        <div class="row">

          <div class="col-md-3">
            <img src="{{ asset('assets/img/undraw_map_dark_re_36sy 1.png') }}" id="imghouse"> 
          </div>
          <div class="col-md-8" id="txthouse">
            <p style="font-size: 14px;font-weight: bold;">On the location</p>
            <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia risus quis urna egestas, nec faucibus dia</p>
            <p><b>Created by:</b> affordable home 
              
              <input class="form-check-input" name="usage"  type="radio" id="btnr2" value="on the location"/>
              <label class="form-check-label" for="btnr2" id="l2">  <img src="{{ asset('assets/img/Group 3 (1).png') }}" />
             </label>

             </p>
            
          </div>

        </div>
        
      
      </div>

      <br>

    

      <hr>


          </div>
       
       
        </div>
      </div>
      <div class="modal-footer" style="border-top: none">
        <button type="button" class="btn btn-default" onclick="openmodal4()"  style="background: #807EE3;color:white">previous</button>
        <button type="button" class="btn btn-default"  onclick="getradio2value()"  style="background: #807EE3;color:white">Next</button>
      </div>
    </div>

  </div>
</div>


<!--  -->




<!-- modal 6 finance info -->


<div id="myModal6" class="modal fade" role="dialog" style="overflow-y: scroll;overflow-x: hidden;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background: #F9F9F9;">
        <p style="display: flex;
        justify-content: end;margin-right: 0.5rem;">Hi, User
          {{-- <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" style="    width: 4%;">

          <div style="background: #FFFFFF;"></div> --}}

        </p>

        <p class="modal-title" style="    color: #1f386e;
        margin-top: -4rem;">AFFORDABLE <br> HOMES </p>

      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6" id="colbox2">

            <br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox" checked  id="checkbox" />
              <label for="checkbox"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;">Your Unit</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox" checked id="checkbox1" />
              <label for="checkbox1"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;">Usage</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox2" />
              <label for="checkbox2"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #807EE3;">Finance info</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox3" />
              <label for="checkbox3"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Goals</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox4" />
              <label for="checkbox4"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Customization</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox5" />
              <label for="checkbox5"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Meeting</span>
            </div>
          </div>

          <br>
          <br>

          
        
        </div>

          <div class="col-sm-6 col-md-6 col-lg-6">

            <p id="ptxt">Finance Information
             
          </p>

          <p id="ptxt2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ex purus. Duis eget commodo lacus. Pellentesque congue eros et porttitor mattis. 
          </p>


          <div>
            <p id="ptxt">What is your Budget?</p>
            <div>
            <p style="color: #807EE3;padding-left: 1rem;
            padding-top: 6px;"><input type="number" required id="ptxt3" placeholder="$$$$$ |" name="budget"></p>

            
            </div>
          </div>

        <br>

        <div>
          <p id="ptxt">Do you need Financing?</p>
          <div class="form-check" id="ptxt4">
            <input class="form-check-input" type="radio" name="financing_need" id="flexRadioDefault1" value="yes" required>
            <label class="form-check-label" for="flexRadioDefault1">
              Yes
            </label>
          </div>

          <br><br>
          <div class="form-check" id="ptxt4">
            <input class="form-check-input" type="radio" name="financing_need" id="flexRadioDefault2" value="no">
            <label class="form-check-label" for="flexRadioDefault2">
              No
            </label>
          </div>
        </div>

        
       

      <br>

    

      <hr>


          </div>
       
       
        </div>
      </div>
      <div class="modal-footer" style="border-top: none">
        <button type="button" class="btn btn-default"  onclick="openmodal5()"  style="background: #807EE3;color:white">previous</button>
        <button type="button" class="btn btn-default"  onclick="getradiofinance()"   style="background: #807EE3;color:white">Next</button>
      </div>
    </div>

  </div>
</div>

<!--  -->




<!-- modal 7 goal -->
<div id="myModal7" class="modal fade" role="dialog" style="overflow-y: scroll;overflow-x: hidden;" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header" style="background: #F9F9F9;">
        <p style="display: flex;
        justify-content: end;margin-right: 0.5rem;">Hi, User
          {{-- <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" style="    width: 4%;">

          <div style="background: #FFFFFF;"></div> --}}

        </p>

        <p class="modal-title" style="    color: #1f386e;
        margin-top: -4rem;">AFFORDABLE <br> HOMES </p>

      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6" id="colbox3">

            <br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox" checked />
              <label for="checkbox"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;">Your Unit</span>
            </div>
          </div>

          <br><br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox1"  checked/>
              <label for="checkbox1"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;">Usage</span>
            </div>
          </div>

          <br><br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox2" checked />
              <label for="checkbox2"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;">Finance info</span>
            </div>
          </div>

          <br><br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox3" />
              <label for="checkbox3"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #807EE3;">Goals</span>
            </div>
          </div>

          <br><br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox4" />
              <label for="checkbox4"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Customization</span>
            </div>
          </div>

          <br><br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox5" />
              <label for="checkbox5"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Meeting</span>
            </div>
          </div>

          <br>
          <br>

          
        
        </div>

          <div class="col-sm-6 col-md-6 col-lg-6" id="wkou">

            <p id="ptxt">What are your goals for the unit? 
             
          </p>

          <p id="ptxt2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ex purus. Duis eget commodo lacus. Pellentesque congue eros et porttitor mattis. 
          </p>


          <div style="background: #F7ECFC;
          border-radius: 16px;">
          <div class="row">

            <div class="col-sm-4 col-md-4 col-lg-5">
              <img src="{{ asset('assets/img/pink pig.png') }}" id="imgbank"> 
            </div>
            <div class="col-sm-8 col-md-8 col-lg-7" id="txthouse">
              <p style="font-size: 14px;font-weight: bold;">Renting it out on their land</p>
              <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia risus quis urna egestas, nec faucibus dia
              
                <input class="form-check-input" name="goal"  type="radio" id="btnbank1" value="Renting it out on their land" required/>
                <label class="form-check-label" for="btnbank1" id="l2"> <img src="{{ asset('assets/img/Group 3.png') }}" />
               </label>
              
              </p>
              
            </div>

          </div>
          
        
        </div>

        <br>

        
        <div style="background: #F4F4FE;border-radius: 16px;">
        <div class="row">

          <div class="col-sm-4 col-md-4 col-lg-5">
            <img src="{{ asset('assets/img/blue pig.png') }}" id="imgbank" > 
          </div>
          <div class="col-sm-8 col-md-8 col-lg-7" id="txthouse">
            <p style="font-size: 14px;font-weight: bold;">Renting it out with a vehicle</p>
            <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia risus quis urna egestas, nec faucibus dia
            
              <input class="form-check-input" name="goal"  type="radio" id="btnbank2" value="Renting it out with a vehicle"/>
              <label class="form-check-label" for="btnbank2" id="l2"> <img src="{{ asset('assets/img/Group 3 (1).png') }}" >
             </label>
            
            
            </p>
            
          </div>

        </div>
        
      
      </div>

      <br>

      <div style="background: #FBECF1;border-radius: 16px;">
        <div class="row">

          <div class="col-sm-4 col-md-4 col-lg-5">
            <img src="{{ asset('assets/img/red pig.png') }}" id="imgbank"> 
          </div>
          <div class="col-sm-8 col-md-8 col-lg-7" id="txthouse">
            <p style="font-size: 14px;font-weight: bold;">Setting on a plot and renting it to air b and b</p>
            <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia risus quis urna egestas, nec faucibus dia
            
              <input class="form-check-input" name="goal"  type="radio" id="btnbank3" value="Setting on a plot and renting it to air b and b"/>
                <label class="form-check-label" for="btnbank3" id="l2">  <img src="{{ asset('assets/img/red arrow.png') }}" >
               </label>

            </p>
           
            
          </div>

        </div>
        
      
      </div>

      <hr>


          </div>
       
       
        </div>
      </div>
      <div class="modal-footer" style="border-top: none">
        <button type="button" class="btn btn-default"  onclick="openmodal6()"  style="background: #807EE3;color:white">Previous</button>
        <button type="button" class="btn btn-default"   onclick="radiogoal()"  style="background: #807EE3;color:white">Next</button>
      </div>
    </div>

  </div>
</div>

<!--  -->


<!--modal 8 customization  -->

<div id="myModal8" class="modal fade" role="dialog" style="overflow-y: scroll;overflow-x: hidden;" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background: #F9F9F9;">
        <p style="display: flex;
        justify-content: end;margin-right: 0.5rem;">Hi, User
          {{-- <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" style="    width: 4%;">

          <div style="background: #FFFFFF;"></div> --}}

        </p>

        <p class="modal-title" style="    color: #1f386e;
        margin-top: -4rem;">AFFORDABLE <br> HOMES </p>

      </div>

      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6" id="colbox4">

            <br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox" checked  id="checkbox" />
              <label for="checkbox"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;">Your Unit</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox" checked id="checkbox1"  />
              <label for="checkbox1"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;">Usage</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox2" checked />
              <label for="checkbox2"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;">Finance info</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox3" checked />
              <label for="checkbox3"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;">Goals</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox4" />
              <label for="checkbox4"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #807EE3;">Customization</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox5" />
              <label for="checkbox5"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:  #B0AAB4;">Meeting</span>
            </div>
          </div>

          <br>
          <br>

          
        
        </div>

          <div class="col-sm-6 col-md-6 col-lg-6">

            <p id="ptxt">Customizaton Information
             
          </p>

          <p id="ptxt2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ex purus. Duis eget commodo lacus. Pellentesque congue eros et porttitor mattis. 
          </p>


          <div id="ptxt4">
            <p style="font-weight: 600;    color: black;">How many Bedrooms are required?</p>
             <div class="row">
              <div class="col-sm-4 col-md-4 col-lg-4">
                <input class="form-check-input" name="bedroom"  type="radio" id="btnControl" value="1" required/>
                <label class="form-check-label" for="btnControl"><img src="{{ asset('assets/img/single bed.png') }}" id="btnLeft" />
                </label>
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4">
                <input class="form-check-input" name="bedroom"  type="radio" id="btnControl1" value="2"/>
                <label class="form-check-label" for="btnControl1"><img src="{{ asset('assets/img/two bed.png') }}" id="btnLeft1" />
                  
              </div>
              <div class="col-sm-4 col-md-4 col-lg-4">
                <input class="form-check-input" name="bedroom"  type="radio" id="btnControl2" value="3"/>
                <label class="form-check-label" for="btnControl2"><img src="{{ asset('assets/img/three bed.png') }}" id="btnLeft2" />
              </div>

             </div>
            

            
            </div>

        <br>

        <div id="ptxt4">
          <p style="font-weight: 600;    color: black;">What type of Kitchen would you like to prefer?</p>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="kitchen" value="full kitchen" id="kitchen1" required>
            <label class="form-check-label" for="kitchen1">
              Full kitchen
            </label>
          </div>

          <br><br>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="kitchen" value="half kitchen" id="kitchen2" >
            <label class="form-check-label" for="kitchen2">
              Half kitchen
            </label>
          </div>
        </div>

        <br><br>


        <div id="ptxt4">
          <p style="font-weight: 600;    color: black;">Preferred Bathroom?</p>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="bathroom" value="full bathroom" id="bathroom1" required>
            <label class="form-check-label" for="bathroom1">
              Full Bathroom
            </label>
          </div>

          <br><br>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="bathroom" value="half bathroom" id="bathroom2" >
            <label class="form-check-label" for="bathroom2">
              Half Bathroom
            </label>
          </div>
        </div>
        
       

      <br><br>

        <div id="ptxt4">
         <p style="font-weight: 600;    color: black;">How many Bathrooms are required?</p>
         <div class="row">

             <div class="col-sm-4 col-md-4 col-lg-4">
                 <input class="form-check-input" name="bathroom_number" value="1"  type="radio" id="btnbath1" required/>
                    <label class="form-check-label" for="btnbath1"><img src="{{ asset('assets/img/single bathroom.png') }}" />
                     </label></div>

                <div class="col-sm-4 col-md-4 col-lg-4">
                  <input class="form-check-input" name="bathroom_number" value="2"  type="radio" id="btnbath2"/>
                  <label class="form-check-label" for="btnbath2"><img src="{{ asset('assets/img/two bath.png') }}"  />
                  </label>
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4">
                  <input class="form-check-input" name="bathroom_number" value="3"  type="radio" id="btnbath3"/>
                  <label class="form-check-label" for="btnbath3"><img src="{{ asset('assets/img/three bathroom.png') }}"  />
                </label>
                </div>

              </div>
        

        
        </div>


    

      <hr>


          </div>
       
       
        </div>
      </div>

      <div class="modal-footer" style="border-top: none">
        <button type="button" class="btn btn-default" onclick="openmodal7()"  style="background: #807EE3;color:white">previous</button>
        <button type="button" class="btn btn-default" onclick="radiocustomize()"  style="background: #807EE3;color:white">Next</button>
      </div>
    </div>

  </div>
</div>


<!--  -->


<!-- modal 9 meeting -->

<div id="myModal9" class="modal fade" role="dialog"  style="overflow-y: scroll;overflow-x: hidden;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background: #F9F9F9;">
        <p style="display: flex;
        justify-content: end;margin-right: 0.5rem;">Hi, User
          {{-- <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" style="    width: 4%;">

          <div style="background: #FFFFFF;"></div> --}}

        </p>

        <p class="modal-title" style="    color: #1f386e;
        margin-top: -4rem;">AFFORDABLE <br> HOMES </p>

      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-6" id="colbox2">

            <br><br>

          <div class="container">
            <div class="round">
              <input type="checkbox" checked  id="checkbox" />
              <label for="checkbox"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;">Your Unit</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox" checked id="checkbox1"  />
              <label for="checkbox1"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;">Usage</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox2" checked />
              <label for="checkbox2"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;" >Finance info</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox3" checked />
              <label for="checkbox3"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;">Goals</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox4" checked />
              <label for="checkbox4"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #FFFFFF;font-weight: 700;" >Customization</span>
            </div>
          </div>

          <br>

          <div class="container">
            <div class="round">
              <input type="checkbox"  id="checkbox5" />
              <label for="checkbox5"></label>

              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #807EE3;">Meeting</span>
            </div>
          </div>

          <br>
          <br>

          
        
        </div>

          <div class="col-sm-6 col-md-6 col-lg-6">

            <p id="ptxt">When would you like to get on a call with our representative?
             
          </p>

          <p id="ptxt2">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ex purus. Duis eget commodo lacus. Pellentesque congue eros et porttitor mattis. 
          </p>


          <div id="ptxt4">
            <p style="font-weight: 600;    color: black;">Select date?</p>
            <input type="datetime-local" style="border: 2px solid #807EE3;
            border-radius: 4px;font-size: large;" name="meeting_date" required>
          </div>

        <br><br><br><br>

        <hr >
          </div>
    
          
        </div>

      </div>
      
      <div class="modal-footer" style="border-top: none;    margin-top: -28px;">
        <button type="button" class="btn btn-default"  onclick="openmodal8()"  style="background: #807EE3;color:white">previous</button>
        {{-- <button type="button" class="btn btn-default" data-dismiss="modal"   data-toggle="modal" data-target="#myModal10"  style="background: #807EE3;color:white">Next</button> --}}
        <button type="submit" class="btn btn-default" style="background: #807EE3;color:white" formaction="{{ route('users.save.infos') }}">Submit</button>
      </div>
    </div>

  </div>
</div>


<!-- modal 9 end  -->



<!-- modal 10 purchase details -->

{{-- <div id="myModal10" class="modal fade" role="dialog" style="overflow-y: scroll;overflow-x: hidden;" >
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background: #F9F9F9;">
        <p style="display: flex;
        justify-content: end;margin-right: 0.5rem;">Hi, User
          <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" style="    width: 4%;">

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
            Cost is $10,000 for the base model, adding your amenities and functionality from there
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
              <p style="color: #000000;"><b>$200</b>
              </p>

            </div>

            <div class="col-sm-4 col-md-3 col-lg-3">
                  <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
                  <span class="input-group plus-minus-input">
                    <span class="input-group-button">
                      <button type="button" class="button hollow circle" data-quantity="minus" data-field="quantity">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                      </button>
                    </span>
                    <input class="input-group-field" type="number" name="window" value="0">
                    <span class="input-group-button">
                      <button type="button" class="button hollow circle" data-quantity="plus" data-field="quantity">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                      </button>
                    </span>
                  </span>
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
              <p style="color: #000000;"><b>$2,500</b> </p>

            </div>

      
            <div class="col-sm-4 col-md-3 col-lg-3">
              <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
              <span class="input-group plus-minus-input1">
                <span class="input-group-button1">
                  <button type="button" class="button hollow circle1" data-quantity="minus1" data-field="quantity1">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                  </button>
                </span>
                <input class="input-group-field1" type="number" name="quantity1" value="0">
                <span class="input-group-button1">
                  <button type="button" class="button hollow circle1" data-quantity="plus1" data-field="quantity1">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                  </button>
                </span>
              </span>
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
              <p style="color: #000000;"><b>$1,500</b> </p>

            </div>


            <div class="col-sm-4 col-md-3 col-lg-3">
              <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
              <span class="input-group plus-minus-input1">
                <span class="input-group-button1">
                  <button type="button" class="button hollow circle1" data-quantity="minus2" data-field="quantity2">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                  </button>
                </span>
                <input class="input-group-field1" type="number" name="quantity2" value="0">
                <span class="input-group-button1">
                  <button type="button" class="button hollow circle1" data-quantity="plus2" data-field="quantity2">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                  </button>
                </span>
              </span>
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
              <p style="color: #000000;"><b>$1,500</b> </p>

            </div>

            <div class="col-sm-4 col-md-3 col-lg-3">
              <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
              <span class="input-group plus-minus-input1">
                <span class="input-group-button1">
                  <button type="button" class="button hollow circle1" data-quantity="minus3" data-field="quantity3">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                  </button>
                </span>
                <input class="input-group-field1" type="number" name="quantity3" value="0">
                <span class="input-group-button1">
                  <button type="button" class="button hollow circle1" data-quantity="plus3" data-field="quantity3">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                  </button>
                </span>
              </span>
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
              <p style="color: #000000;"><b>$1100</b> </p>

            </div>

            <div class="col-sm-4 col-md-3 col-lg-3">
              <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
              <span class="input-group plus-minus-input1">
                <span class="input-group-button1">
                  <button type="button" class="button hollow circle1" data-quantity="minus4" data-field="quantity4">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                  </button>
                </span>
                <input class="input-group-field1" type="number" name="quantity4" value="0">
                <span class="input-group-button1">
                  <button type="button" class="button hollow circle1" data-quantity="plus4" data-field="quantity4">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                  </button>
                </span>
              </span>
        </div>

           
           
          </div>

        <br>

        <div class="row" id="toltxt" >
          <div class="col-sm-6 col-md-6 col-lg-6">
            <p style="color: #AAAAAA;"> <b style="color:  #444444;;"> Total :</b> </p>

          </div>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <p style="color: #000000;"><b></b> </p>

          </div>
         
        </div>

        <hr >
          </div>
    
          
        </div>

      </div>
     
      
      <div class="modal-footer" style="border-top: none;    margin-top: -28px;">
        <button type="button" class="btn btn-default" data-dismiss="modal"  data-toggle="modal" data-target="#myModal9"  style="background: #807EE3;color:white">previous</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"   data-toggle="modal" data-target="#myModal12"  style="background: #807EE3;color:white">Next</button>
      </div>
    </div>

  </div>
</div> --}}

<!-- modal 10 end -->
    </form>
  
  
  <!-- modal 11 contact details-->
  
  {{-- <div id="myModal11" class="modal fade" role="dialog" style="overflow-y: scroll;overflow-x: hidden;" >
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #F9F9F9;">
          <p style="display: flex;
          justify-content: end;margin-right: 0.5rem;">Hi, User
            <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" style="    width: 4%;">
  
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
                  <input type="datetime-local" style="background: #F7F7F8;
                  border-radius: 3px;
                  padding: 0.5rem;
                  border:  #F7F7F8;" >
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
                padding: 0.5rem;">Name:<input type="text" required style="    border: none;background: #F7F7F8;"> </p>
  
                <br>
  
                <p style="background: #F7F7F8;
                border-radius: 3px;
                padding: 0.5rem;">Address:<input type="text" required style="    border: none;background: #F7F7F8;"></p>
  
                <br>
  
                <p style="background: #F7F7F8;
                border-radius: 3px;
                padding: 0.5rem;">Phone:<input type="number" required style="    border: none;background: #F7F7F8;"></p>
  
                <br>
  
                <p style="background: #F7F7F8;
                border-radius: 3px;
                padding: 0.5rem;">Email:<input type="email"  required style="    border: none;background: #F7F7F8;"></p>
  
                <br><br>
                <p style="margin-left: 4rem;">Already a User?<a  id="alog" data-dismiss="modal"  data-toggle="modal" data-target="#myModal13" >Login Now</a></p>
  
              </div>
             
            </div>
  
          <hr >
            </div>
      
            
          </div>
  
        </div>
       
        
        <div class="modal-footer" style="border-top: none;    margin-top: -28px;">
          <button type="button" class="btn btn-default" data-dismiss="modal"  data-toggle="modal" data-target="#myModal10"  style="background: #807EE3;color:white">previous</button>
          <button type="button" class="btn btn-default" data-dismiss="modal"   data-toggle="modal" data-target="#myModal12"  style="background: #807EE3;color:white">Next</button>
        </div>
      </div>
  
    </div>
  </div> --}}
  
  <!-- modal 11 end -->
  
  
  <!-- modal 12 submit -->
  
  <div id="myModal12" class="modal fade" role="dialog" style="overflow-y: scroll;overflow-x: hidden;">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #F9F9F9;">
          <p style="display: flex;
          justify-content: end;margin-right: 0.5rem;">Hi, User
            {{-- <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" style="    width: 4%;">
  
            <div style="background: #FFFFFF;"></div> --}}
  
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
                    <img src="{{ asset('assets/img/notebook.png') }}" id="imghouse"> 
                  </div>
                  <div class="col-sm-6 col-md-8" id="txthouse">
                    <p style="font-size: 14px;font-weight: bold;">Contract created Successfully
                    
                      <button type="button" class="close" data-dismiss="modal" style="font-weight: 900;font-size: x-large; margin-top: -4px;margin-right: 3rem;">&times;</button>
                    </p>
                    <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla lacinia risus quis urna egestas, nec faucibus dia</p>
                    <p><b>Created by:</b> affordable home <button class="btn btn-default"  style="background: #00D1B4;color:white;border-radius: 32px;">
                      Download
                    </button> </p>
                    
                  </div>
  
                </div>
            
          
          
          </div>
  
        </div>
       
      </div>
  
    </div>
  </div>
  <!-- modal 13 thankyou for submitting details -->
  <input type="hidden" id="infosSaved" @if (session()->has('infos_saved') && session('infos_saved') == true)
      value="true"
      @endif
  @if (session()->has('infos_saved') && session('infos_saved') == false)
  value="false"
  @endif>

  <!-- Modal -->
  <div class="modal fade" id="myModal13" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
             </div>
  
            <div class="modal-body">
               
    <div class="thank-you-pop">
      <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
      <h1>Thank You!</h1>
      <p>Your submission is received and we will contact you soon</p>
      
     </div>
                 
            </div>
  
        </div>
    </div>
</div>
  
  {{-- <div id="myModal13" class="modal fade" role="dialog" style="overflow-y: scroll;overflow-x: hidden;">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #F9F9F9;">
          @if (session()->has('user_id'))
          <p style="display: flex;
          justify-content: end;margin-right: 0.5rem;">
            {{ 'Hi, '.session('first_name').' '.session('last_name') }}
          </p>
          @endif
  
          <p class="modal-title" style="    color: #1f386e;
          margin-top: -4rem;">AFFORDABLE <br> HOMES </p>
  
        </div>
        
        <div class="modal-body"  id="submitbody"  >
    
            <div style="background: #DCFEF9;
            box-shadow: 0px 0px 80px 40px rgba(0, 209, 180, 0.1);
            border-radius: 32px;">
  
                <div class="row">
                  <div class="col-sm-6 col-md-8" id="txthouse">
                    <p style="font-size: 14px;font-weight: bold;">Thankyou for Submitting Details. Our team will Contact You Soon
                      <button type="button" class="close" data-dismiss="modal" style="font-weight: 900;font-size: x-large; margin-top: -4px;margin-right: 3rem;">&times;</button>
                    </p>
                  
                  </div>
  
                </div>
            
          
          
          </div>
  
        </div>
       
      </div>
  
    </div>
  </div> --}}
  <!-- modal 14 thankyou for submitting details -->
  <input type="hidden" id="sessionFlash" @if (session()->has('success') || session()->has('error'))
      value="true"
      @else
  value="false"
  @endif>
  
  <div id="myModal14" class="modal fade" role="dialog" style="overflow-y: scroll;overflow-x: hidden;">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background: #F9F9F9;">
  
          <p class="modal-title" style="    color: #1f386e;
          margin-top: 0rem;">@if (session()->has('success'))
            Success! @else Error
          @endif </p>
  
        </div>
        
        <div class="modal-body">
    
            <div style="
            box-shadow: 0px 0px 80px 40px rgba(0, 209, 180, 0.1);
            border-radius: 32px;">
  
                <div class="row">
                  <div class="col-sm-6 col-md-12" id="txthouse">
                    <p style="font-size: 14px;font-weight: bold;" class="text-center">@if (session()->has('success'))
                        {{ session('success') }} @else {{ session('error') }} 
                    @endif
                      <button type="button" class="close" data-dismiss="modal" style="font-weight: 900;font-size: x-large; margin-top: -4px;margin-right: 3rem;">&times;</button>
                    </p>
                  
                  </div>
  
                </div>
            
          
          
          </div>
  
        </div>
       
      </div>
  
    </div>
  </div>



@endsection



@section('script')

    <script>

        if ("{{ session()->has('message-sent') }}" && "{{ session('message-sent') }}" == true) {

            document.querySelector('#contactForm').scrollIntoView({

                behavior: 'smooth'

            })

        }

    </script>
    <script>
      var slider = document.getElementById("myRange");
      var output = document.getElementById("demo");
      output.innerHTML = slider.value; // Display the default slider value

      // Update the current slider value (each time you drag the slider handle)
      slider.oninput = function() {
        output.innerHTML = this.value;
      }
</script>
<script>
  jQuery(document).ready(function(){
    // This button will increment the value
    $('[data-quantity="plus"]').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $('[data-quantity="minus"]').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});

// 1

jQuery(document).ready(function(){
    // This button will increment the value
    $('[data-quantity="plus1"]').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $('[data-quantity="minus1"]').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});
// 


// 2

jQuery(document).ready(function(){
    // This button will increment the value
    $('[data-quantity="plus2"]').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $('[data-quantity="minus2"]').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});

// 




// 3


jQuery(document).ready(function(){
    // This button will increment the value
    $('[data-quantity="plus3"]').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $('[data-quantity="minus3"]').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});


// 




// 4

jQuery(document).ready(function(){
    // This button will increment the value
    $('[data-quantity="plus4"]').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $('[data-quantity="minus4"]').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('data-field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});
</script>
<script>
  let infosSaved = document.getElementById("infosSaved").value
  if (infosSaved == "true") {
    // showing thanku modal
    $('#myModal13').modal() 
  }
  if (infosSaved == "false") {
    // show login modal
    $('#myModal1').modal()
  }

  let sessionFlash = document.getElementById("sessionFlash").value
  if (sessionFlash == "true") {
    // showing thanku modal
    $('#myModal14').modal() 
  }
</script>
@endsection

