<!--
/**
* File: app.blade.php
* Path: resources/views/layouts/app.blade.php
* Purpose: The base layout for the display of Evaluator dashboard
* Created On: 22-03-2017
* Last Modified On: 23-03-2017
* Author: R S DEVI PRASAD
*/
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    @yield('header')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="nav-md">
      <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{URL::to('evaluators')}}" class="site_title"><i class="fa fa-life-bouy"></i> <span>KidzQui!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('KidzQuiApp/public/bower_components/gentelella/production\images/img.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Session::get('name')}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

                <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="{{ URL::to('evaluators') }}"><i class="fa fa-home"></i> Home </a></li>
                  <li><a><i class="fa fa-question-circle"></i> Questions <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ URL::to('addquestions') }}">Add Questions</a></li>
                      <li><a href="{{ URL::to('questionlist') }}">Show Questions</a></li>
                      <li><a href="{{ URL::to('questiondetails') }}">Show Question Details</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-child"></i> Students <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ URL::to('studentform') }}">Add New Students</a></li>
                      <li><a href="{{ URL::to('studentlist') }}">List Students</a></li>
                      <li><a href="{{ URL::to('studentdetails') }}">Edit Student Details</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-university"></i> Tutorials <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ URL::to('addtutorials') }}">Add New</a></li>
                      <li><a href="{{ URL::to('tutorialdetails') }}">Edit Tutorials</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{URL::to('evaluatorlogin')}}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('KidzQuiApp/public/bower_components/gentelella/production/images/img.jpg') }}" alt="">{{ Session::get('name')}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{ URL::to('profile') }}">Profile</a></li>
                    <li><a href="{{URL::to('evaluatorlogin')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

    @yield('content')

    <!-- footer content -->
        <footer>
          <div class="pull-right">
            KidzQui - Online Maths Tutor by <a href="https://mindfiresolutions.com">Mindfire</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    @yield('footer')

  </body>
</html>