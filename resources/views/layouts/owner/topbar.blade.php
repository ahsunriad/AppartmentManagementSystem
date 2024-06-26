<header class="main-header">
    <!-- Logo -->
    <a href="{{url('dashboard_owner')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>VM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><i class="fa fa-home"></i> <b>{{session('LoggedUser.housename')}}</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


      {{-- This is for top right bar  --}}
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <?php
          // $adminid=$_SESSION['avmsaid'];
          // $ret=mysqli_query($con,"SELECT AdminName from tbladmin where ID='$adminid'");
          // $row=mysqli_fetch_array($ret);
          // $name=$row['AdminName']; 
          ?>  

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('frontend/img/img-ad.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{session('LoggedUser.name')}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{asset('frontend/img/img-ad.jpg')}}" class="img-circle" alt="User Image">

                <p>
                  {{session('LoggedUser.name')}}
                  <small>Member since March 2021</small>
                </p>

              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">

                <div class="pull-left">
                  <a href="{{url('profile/'.session('LoggedUser.username'))}}" class="btn btn-default btn-flat">Profile</a>
                  <a href="{{url('change-password')}}" class="btn btn-default btn-flat">Change Password</a>
                </div>


                <div class="pull-right">
                  <a href="{{url('logout')}}" class="btn btn-default btn-flat"><i class="fa fa-power-off" style="color:red;"></i></a>
                </div>

              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          {{-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> --}}
        </ul>
      </div>
    </nav>
  </header>