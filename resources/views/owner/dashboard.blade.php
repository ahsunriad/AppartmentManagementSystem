@extends('layouts.owner.body')
@section('title','Dashboard')
@section('pageContent')
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Dashboard
          <!-- <small>Control panel</small> -->
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{url('dashboard_owner')}}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
  
      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php //include 'counters/total-visitor-count.php'?></h3>
                <p>Total Aparment Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-people"></i>
              </div>
              <a href="visitor-mgmt.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php //include 'counters/todays-visitor-count.php'?></h3>
  
                <p>Today's Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-contacts"></i>
              </div>
              <a href="visitor-mgmt.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php //include 'counters/occ-apartment.php'?></h3>
  
                <p>Occupied Apartments</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="manage-apartment.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php //include 'counters/av-apartment.php'?></h3>
  
                <p>Available Apartments</p>
              </div>
              <div class="icon">
                <i class="ion ion-home"></i>
              </div>
              <a href="manage-apartment.php" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
        
        <!-- Main row -->
        
        <!-- / Main row -->
  
      </section>
      <!-- /.content -->
  
@endsection
