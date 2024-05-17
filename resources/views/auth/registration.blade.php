@extends('layouts.auth.auth')
@section('title', 'Tenet Registration')
@section('content')
    <div class="wrap-login100">
        <div class="login100-pic js-tilt custom-padding-img" data-tilt>
            <img src="{{asset('assets/auth/images/img-01.png')}}" alt="IMG">
        </div>

        <form class="login100-form validate-form" method="POST" action="{{url('register')}}"
              enctype="multipart/form-data">
            @csrf
            <span class="login100-form-title">
						Tenet Registration Form
					</span>
            {{--First Name Input--}}
            <div class="wrap-input100 validate-input" data-validate="First Name is required">
                <input class="input100" type="text" name="fname" placeholder="First Name">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
            </div>
            {{--Last Name Input--}}
            <div class="wrap-input100 validate-input" data-validate="Last Name is required">
                <input class="input100" type="text" name="lname" placeholder="Last Name">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </span>
            </div>
            {{--Date of Birth Input--}}
            <div class="wrap-input100 validate-input" data-validate="Date of Birth is required">
                <input class="input100" type="date" name="dob">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </span>
            </div>
            {{--NID Input--}}
            <div class="wrap-input100 validate-input" data-validate="NID is required">
                <input class="input100" type="text" name="nid" placeholder="National ID No.">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                </span>
            </div>

            {{--Mobile Number Input--}}
            <div class="wrap-input100 validate-input" data-validate="Mobile Number is required">
                <input class="input100" type="text" name="phone" placeholder="Mobile Number">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-mobile-phone fa-2x" aria-hidden="true"></i>
                </span>
            </div>
            {{--Gender Input--}}
            <div class="wrap-input100 gender">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="1">
                    <label class="form-check-label" for="male">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="2">
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>
            {{-- Permanent Address Input--}}
            <div class="wrap-input100 validate-input" data-validate="Permanent Address is required">
                <textarea class="input100 permanentAddress" type="text" name="permanent_address"
                          placeholder="Permanent Address"></textarea>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </span>
            </div>


            {{--Email Input--}}
            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                <input class="input100" type="text" name="email" placeholder="Email">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
            </div>
            {{--Password Input--}}
            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input class="input100" type="password" name="password" placeholder="Password">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
            </div>
            {{--Confrirm Password Input--}}
            <div class="wrap-input100 validate-input" data-validate="Password is required">
                <input class="input100" type="password" name="confirm_password" placeholder="Confirm Password">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
            </div>

            {{--Confrirm Password Input--}}
            <div class="wrap-input100 validate-input" data-validate="Image is required">
                <input class="input100 custom-padding-img-upload" type="file" name="image" accept="image/*">
                <span class="focus-input100"></span>
                <span class="symbol-input100">
							<i class="fa fa-picture-o" aria-hidden="true"></i>
						</span>
            </div>


            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                    Register
                </button>
            </div>

            <div class="text-center custom-p-t-136">
                <a class="txt2" href="{{url('login')}}">
                    Login to Your Account
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                </a>
            </div>
        </form>
    </div>

@endsection
