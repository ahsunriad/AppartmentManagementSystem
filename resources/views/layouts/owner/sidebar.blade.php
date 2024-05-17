 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('frontend/img/img-ad.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><a href="{{url('profile/'.session('LoggedUser.username'))}}">{{session('LoggedUser.name')}}</a></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="search-result.php" method="POST" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="searchdata" id="searchdata" class="form-control" placeholder="Enter Contact or Name....">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{Request::is('dashboard_owner')?'active':''}}">
          <a href="{{url('dashboard_owner')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>


        <li class="{{Request::is('tentes')?'active':''}}">
          <a href="{{url('tenets')}}">
            <i class="fa fa-users"></i> <span>Tenets</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>


        <li class="{{Request::is('visitors')?'active':''}}">
          <a href="visitor-entry.php">
            <i class="fa fa-plus"></i> <span>Entry Visitors</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php //include './counters/todays-visitor-count.php'?></small>
            </span>
          </a>
        </li>

        <li class="{{Request::is('checkout_visitors')?'active':''}}">
          <a href="checkout_visitor.php">
            <i class="fa fa-sign-out"></i> <span>Check-Out Visitors</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php //include './counters/checkout-visitor.php'?></small>
            </span>
          </a>
        </li>


        <li class="{{Request::is('visitor-management')?'active':''}}">
          <a href="visitor-mgmt.php">
            <i class="fa fa-address-card"></i> <span>Visitor Management</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <li class="{{Request::is('reports')?'active':''}}">
          <a href="report.php">
            <i class="fa fa-file-pdf-o"></i> <span>Reports</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>  