<link rel="stylesheet" type="text/css" href="{{ asset('login/') }}/css/style.css">
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('login/') }}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/') }}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/') }}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/') }}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login/') }}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/') }}/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/') }}/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login/') }}/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login/') }}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('login/') }}/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	  <!-- Session Status -->
	  <x-auth-session-status class="mb-4" :status="session('status')" />
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{ asset('login/') }}/images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Selamat Datang
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ route('login') }}">
					@csrf
					   
								  {{-- <input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus > --}}
						<div class="wrap-input100 validate-input" data-validate = "Enter username">
							<input id="email" class="input100" type="email" name="email" :value="old('email')" required autofocus placeholder="Email">
							<span class="focus-input100" data-placeholder="&#xe82a;"></span>
						</div>
						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input id="password" class="input100" type="password" name="password" placeholder="Password">
							<span class="focus-input100" data-placeholder="&#xe80f;"></span>
						</div>
						<div class="container-login100-form-btn m-t-32">
							<button class="login100-form-btn">
								Login
							</button>
						</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('login/') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/') }}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/') }}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{ asset('login/') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/') }}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/') }}/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{ asset('login/') }}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/') }}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/') }}/js/main.js"></script>

</body>
</html>
{{-- <body>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <img class="wave" src="{{ asset('login/') }}/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="{{ asset('login/') }}/img/bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="{{ route('login') }}">
                @csrf
				<img src="{{ asset('login/') }}/img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input id="password" class="input"
                           type="password"
                           name="password"
                           required autocomplete="current-password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('login/') }}/js/main.js"></script>
</body>
</html> --}}
