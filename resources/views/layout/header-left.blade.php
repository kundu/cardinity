@yield('header')



@auth

@else
    <script> window.location.href = '{{url("/login")}}';</script>
@endauth







<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a href="{{ URL::to('/') }}" class="site_title"><i class="fa fa-paw"></i> <span>71words</span></a>
      </div>

      <div class="clearfix"></div>

      <!-- menu profile quick info -->
      <div class="profile clearfix">
        <div class="profile_pic">
          {{-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> --}}
        </div>
        <div class="profile_info">
          <span>Welcome,</span>
        <h2>{{Session::get('name')}}</h2>
        </div>
      </div>
      <!-- /menu profile quick info -->

      <br />

      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">

            <li><a><i class="fa fa-home"></i> Home<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{URL::to('/')}}">Dashboard</a></li>
                </ul>
            </li>


            @if (auth()->user()->is_admin == 1)
                <li><a><i class="fa fa-home"></i> Category<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="{{URL::to('/category-details')}}">Create & View</a></li>
                    </ul>
                </li>

                <li><a><i class="fa fa-home"></i> Paper<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="{{URL::to('/paper-details')}}">Create & View</a></li>
                    </ul>
                </li>

                <li><a><i class="fa fa-home"></i> Advertisement<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::to('/publish-add')}}">Post Web Ad</a></li>
                      <li><a href="{{URL::to('/publish-mobile-add')}}">Post Mobile Ad</a></li>
                    </ul>
                </li>
            @endif


            <li><a><i class="fa fa-home"></i> Articles<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{URL::to('/article-publish')}}">Publish Article</a></li>
                </ul>
            </li>

            <li><a><i class="fa fa-home"></i> Publish News<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="{{URL::to('/last-50-news')}}">Last 50 News</a></li>
                </ul>
            </li>


          </ul>
        </div>

      </div>
      <!-- /sidebar menu -->

      <!-- /menu footer buttons -->
      <div class="sidebar-footer hidden-small">

        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ URL::to('/logout') }}">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
        </a>
      </div>
      <!-- /menu footer buttons -->
    </div>
  </div>





  <div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
          <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
        <ul class=" navbar-right">
          <li class="nav-item dropdown open" style="padding-left: 15px;">
            <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
              <img src="images/img.jpg" alt="">{{Session::get('name')}}
            </a>
            <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item"  href="#"> Profile</a>
              <a class="dropdown-item"  href="{{ URL::to('/logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
            </div>
          </li>


        </ul>
      </nav>
    </div>
  </div>



  @yield('content')
