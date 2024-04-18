@if (session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">

        <strong>{{ ucfirst('success') }}</strong> {{ session()->get('success') }}

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>

@endif

@if (session()->has('error'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">

        <strong>{{ ucfirst('error') }}</strong> {{ session()->get('error') }}

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

    </div>

@endif

<!-- Navigation

    ==========================================-->

<nav id="menu" class="navbar navbar-default navbar-fixed-top">

    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"

                data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span

                    class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

            <a class="navbar-brand page-scroll" href="{{ route('users.home') }}" id="logo">Affordable

                <BR /><BR /> Homes</a>

            <!-- <div class="phone"><span>Call Today</span>320-123-4321</div> -->

        </div>



        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">

                {{-- <li><a href="#about" class="page-scroll">About</a></li>

                <li><a href="#services" class="page-scroll">Services</a></li>

                <li><a href="#portfolio" class="page-scroll">Projects</a></li>

                <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>

                <li><a href="#goals" class="page-scroll">Goals</a></li>

                <li><a href="#contact" class="page-scroll">Contact</a></li> --}}

                <span id="log">

                    @if (session()->has('user_id'))

                        <a href="{{ route('users.logout') }}" type="button" class="btn btn-danger"

                            style="margin-top: 1rem;margin-right: 2rem;">Logout</a>

                    @else

                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal1"

                            style="margin-top: 1rem;margin-right: 2rem;">Login</button>



                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal2"

                            style="margin-top: 1rem;">Sign up</button>

                    @endif

                </span>

            </ul>

        </div>

        <!-- /.navbar-collapse -->

    </div>

</nav>



<!-- MODAL LOGIN -->

<div class="container">

    <!-- Button to Open the Modal -->

    <!-- The Modal -->

    <div class="modal" id="myModal1">

        <div class="modal-dialog">

            <div class="modal-content" style="background-color: rgba(0,0,0,.75);" id="mc">



                <!-- Modal Header -->

                <div class="modal-header" style="border: none;">

                    <h4 class="modal-title"

                        style="    font-size: 32px;

          font-weight: 500;

          margin-bottom: -8px;

          margin-left: 4rem;

          margin-top: 5rem;

          font-family: emoji;">

                        Login</h4>
                    @if (session()->has('infos_msg'))
                        <p style="    font-size: 20px;
                        font-weight: 200;
                        margin-bottom: -8px;
                        margin-left: 4rem;
                        margin-top: 1rem;
                        color: white;
                        font-family: emoji;">{{ session('infos_msg') }}</p>
                    @endif

                </div>

                

                <!-- Modal body -->

                <form action="{{ route('users.login.post') }}" method="post">

                    @csrf

                    <div class="modal-body">

                        <input type="email" name="email" tabindex="0" autocomplete="email" spellcheck="false"

                            dir="" placeholder="Email" id="em">

                        <br><br>

                        <input type="password" name="password" tabindex="0" dir="" placeholder="Password"

                            id="pass">

                        <br><br>

    

                        <button type="submit" class="btn btn-danger"

                            style="margin-left: 4rem;background-color: #e50914;;">Login</button>



                        {{-- <p style="margin-left: 4rem;">New to Affordable Home?<a style="color: white;">SignUp Now</a></p> --}}

                    </div>

                </form>



                <!-- Modal footer -->

                <div class="modal-footer" style="border: none;">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>



            </div>

        </div>

    </div>



</div>



<!-- sign up -->

<div class="container">

    <!-- Button to Open the Modal -->

    <!-- The Modal -->

    <div class="modal" id="myModal2">

        <div class="modal-dialog">

            <div class="modal-content" style="background-color: rgba(0,0,0,.75);" id="mc">



                <!-- Modal Header -->

                <div class="modal-header" style="border: none;">

                    <h4 class="modal-title"

                        style="    font-size: 32px;

          font-weight: 500;

          margin-bottom: -8px;

          margin-left: 4rem;

          margin-top: 5rem;

          font-family: emoji;">

                        Sign Up</h4>

                </div>



                <!-- Modal body -->

                <form action="{{ route('users.signup.post') }}" method="post">

                    @csrf

                    <div class="modal-body">

                        <input type="text" name="first_name" value="{{ old('first_name') }}" tabindex="0"

                            placeholder="First Name" id="em">

                        <br><br>

                        <input type="text" name="last_name" value="{{ old('last_name') }}" tabindex="0"

                            placeholder="Last Name" id="em">

                        <br><br>

                        <input type="text" name="phone_number" value="{{ old('phone_number') }}" tabindex="0"

                            autocomplete="email" spellcheck="false" dir="" placeholder="Phone Number"

                            id="em">

                        <br><br>

                        <input type="text" name="email" value="{{ old('email') }}" tabindex="0"

                            autocomplete="email" spellcheck="false" dir="" placeholder="Email"

                            id="em">

                        <br><br>

                        <input type="password" name="password" tabindex="0" dir="" placeholder="Password"

                            id="pass">

                        <br><br>

                        <input type="password" name="password_confirmation" tabindex="0" dir=""

                            placeholder="Confirm Password" id="pass">

                        <br><br>



                        <button type="submit" class="btn btn-danger"

                            style="margin-left: 4rem;background-color: #e50914;;">Signup</button>

                        <br><br><br>

                        {{-- <p style="margin-left: 4rem;">Already a User?<a style="color: white;">Login Now</a></p> --}}

                    </div>

                </form>



                <!-- Modal footer -->

                <div class="modal-footer" style="border: none;">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </div>



            </div>

        </div>

    </div>



</div>

