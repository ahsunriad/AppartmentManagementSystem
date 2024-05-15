@extends('layouts.owner.body')
@section('title','Profile')
@section('pageContent')
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
            Profile
            <!-- <small>Control panel</small> -->
            </h1>
            <ol class="breadcrumb">
            <li><a href="{{url('dashboard_owner')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{url('profile/'.session('LoggedUser.username'))}}"><i class="fa fa-user"></i> Profile</a></li>
            </ol>
        </section>    
            <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        @if(session('updated'))
            <div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-info-circle'></i> Alert!</h4>
                    The Profile {{session('updated')}} has been added successfully.
            </div>
        @endif
  
           <!-- Forms -->
       
        
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Please update your details below</h3>
  
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            
            <?php
            //   $adminid=$_SESSION['avmsaid'];
            //   $ret=mysqli_query($con,"SELECT * from tbladmin where ID='$adminid'");
            //   $cnt=1;
            //   while ($row=mysqli_fetch_array($ret)) {
  
              ?>
  {{-- {{dd($user);}} --}}
              <div class="box-body">
                <div class="row">
                  <form method="POST" class="">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Account Registered At</label>
                      <input type="text" class="form-control" value="{{$user->created_at}}" readonly>
                    </div>
                    <!-- /.form-group -->
  
                    <div class="form-group">
                      <label>Full Name</label>
                      <input type="text" class="form-control" name="adminname" id="adminname" value="" required>
                    </div>
  
                    <div class="form-group">
                      <label>Username</label>
                          <input type="text" class="form-control" readonly value="{{$user->username}}">
                      </div>
  
                      
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-6">
                  <div class="form-group">
                      <label>Contact Number</label>
                      <input type="number" class="form-control" id="mobilenumber" name="mobilenumber" value="" required>
                  </div>
  
  
                  <div class="form-group">
                      <label>Email Address</label>
                      <input type="email" class="form-control" name="email" id="email" value="" required>
                  </div>
  
                    <!-- /.form-group -->
                    
                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->
                </div>
  
                
                <!-- /.row -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              <button type="submit" class="btn btn-block btn-primary btn-lg" name="update">Make Changes</button>
              </div>
            </div>
            </form>
        
        <!-- /Form -->
          
      
        
        <!-- Main row -->
        
        <!-- / Main row -->
  
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
