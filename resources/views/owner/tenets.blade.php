@extends('layouts.owner.body')
@section('title','Profile')
@section('pageContent')
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Profile</h1>
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
                <h4><i class='icon fa fa-check-circle'></i> Success!</h4>
                    The Profile of {{session('updated')}} has been updated successfully.
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
            {{-- {{dd($userData);}} --}}
            <div class="box-body">
                <div class="row">
                    <form action="{{url('updateProfile/'.$userData->username)}}" method="post" enctype="multipart/form-data">
                        {{method_field('put')}}
                        @csrf
                        @if($userData->image)
                            <div class="col-md-12">
                                <div class="form-group ">
                                    {{-- <label>Role As</label> --}}
                                    {{-- <input type="text" class="form-control" value="{{$userData->status ? 'Owner' : ''}}" readonly> If 1 then Owner, if 0 then Tenet --}}
                                    <img src="{{asset('assets/uploads/users/'.$userData->image)}}"  class="w-25 rounded mx-auto d-block">
                                    
                                </div>
                            </div>
                        @endif    
                        {{-- Role As can't be changed--}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Role As</label>
                                <input type="text" class="form-control" value="{{$userData->status ? 'Owner' : ''}}" readonly> {{--If 1 then Owner, if 0 then Tenet--}}
                            </div>
                        </div>

                        {{-- Username can't be changed' --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" readonly value="{{$userData->username}}">
                            </div>
                        </div>

                        {{-- Name can be changed --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fname" value="{{$userData->fname}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lname" value="{{$userData->lname}}">
                            </div>
                        </div>

                        {{-- NID  can't be changed --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>National ID No</label>
                                <input type="text" class="form-control" readonly value="{{$userData->nid}}">
                            </div>
                        </div>

                        {{-- Date of Birth can't be changed --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="text" class="form-control" readonly value="{{$userData->dob}}">
                            </div>
                        </div>

                        {{-- Gender can't be changed. --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <input type="text" class="form-control" readonly value="{{$userData->gender ? 'Male':'Female'}}"> {{--If 1 then male, if 0 then Female--}}
                            </div>
                        </div>

                        {{-- Contact No can be changed --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Contact No</label>
                                <input type="text" class="form-control" name="phone" value="{{$userData->phone}}">
                            </div>
                        </div>

                        {{-- Permanent Address can be changed --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Permanent Address</label>
                                <input type="text" class="form-control" name="permanent_address" value="{{$userData->permanent_address}}">
                            </div>
                        </div>

                        {{-- Account Creation Date can't be changed --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Account Registered At</label>
                                <input type="text" class="form-control" readonly value="{{$userData->created_at}}">
                            </div>
                        </div>
                        
                </div> <!-- /.row -->
                                
                            </div> <!-- /.box-body -->
                            
                            <div class="box-footer">
                                <button type="submit" class="btn btn-block btn-primary btn-lg" name="submit">Make Changes</button>
                            </div>
        </div>
                    </form> <!-- /Form -->
        
        <!-- Main row -->
        
        <!-- / Main row -->
    </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
