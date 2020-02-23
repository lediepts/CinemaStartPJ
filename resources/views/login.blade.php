@extends('template.master')
@section('title', 'Login')
@section('linkstyle')
	<!--=============================================================================-->
	<link rel="stylesheet" type="text/css" href="./public/css/font-awesome.min.css">
	<!--=============================================================================-->
	<link rel="stylesheet" type="text/css" href="./public/css/icon-font.min.css">
	<!--=============================================================================-->
	<link rel="stylesheet" type="text/css" href="./public/css/util.css">
	<link rel="stylesheet" type="text/css" href="./public/css/main.css">
@endsection
@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Login
				</span>
				<span class="errorMes" style="color: red">
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="get" action="./">

					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					<div>
						<div class="m-t-20">
							<a href="#" class="fogot-pass">
								Forgot Password?
							</a>
						</div>
					</div>
					<div class="container-login100-form-btn m-t-30">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	<script src="./public/js/jquery-3.4.1.min.js"></script>
	<script src="./public/js/main.js"></script>

@endsection
