<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fazlul Huq Hall Management System</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

@if(Auth::user()->role_id == 1)

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/profile') }}">Profile</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/user') }}">User Management</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/request') }}">Request</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/view_allotment') }}">View Allotment</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/room') }}">Room Management</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/viewroom') }}">Room Status</a></li>
                </ul>

                

                <ul class="nav navbar-nav">
                    
                    
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Bill Information<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/hall_entry_fee') }}">Hall Entry Fee</a></li>
                                <li><a href="{{ url('/hall_utility_fee') }}">Hall Utility Fee</a></li>
                                <li><a href="{{ url('/hall_establishment_fee') }}">Hall Establishment Fee</a></li>
                            </ul>
                        </li>
                    
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/student') }}">Student</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/teacher') }}">Teacher</a></li>
                </ul>

                

               

                

@endif

@if(Auth::user()->role_id == 2)
                
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/profile') }}">Profile</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/complain') }}">Complain</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/allotment') }}">Apply Seat</a></li>
                </ul>

@endif

@if(Auth::user()->role_id == 3)

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/profile') }}">Profile</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/request') }}">Request</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/view_allotment') }}">View Allotment</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/viewroom') }}">Room Status</a></li>
                </ul>


                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/assignroom') }}">Assign Room</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/student') }}">Student</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/teacher') }}">Teacher</a></li>
                </ul>
                
@endif

@if(Auth::user()->role_id == 4)

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/profile') }}">Profile</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/request') }}">Request</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/view_allotment') }}">View Allotment</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/viewroom') }}">Room Status</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/student') }}">Student</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/teacher') }}">Teacher</a></li>
                </ul>

@endif
                

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/change_password') }}">Change Password</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                
                            </ul>
                        </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
