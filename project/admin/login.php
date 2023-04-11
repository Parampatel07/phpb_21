<?php
session_start();
require_once("include/css.php");
?>
	</head>
	<body class="error-bg">
		<div class="login-img">
	    <!-- GLOBAL-LOADER -->
		<div id="global-loader">
			<img src="theme/assets/images/loader.svg" class="loader-img" alt="Loader">
		</div>
			<div class="page">
				<div class="">
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto">
						<div class="text-center">
							<img src="theme/assets/images/brand/logo.png" class="header-brand-img" alt="">
						</div>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-0">
							<div class="card-body">
								<form class="login100-form validate-form" method="post" action="submit/verfiy_login.php">
									<span class="login100-form-title">
										Login
									</span>
									<?php
require_once("include/message.php");
									?>
									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100" type="email" name="email" placeholder="Email" required>
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-email" aria-hidden="true"></i>
										</span>
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
										<input class="input100" type="password" name="password" placeholder="Password" required>
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
									</div>
									<div class="text-end pt-1">
										<p class="mb-0"><a href="forgot_password.php" class="text-primary ms-1">Forgot Password?</a></p>
									</div>
									<div class="container-login100-form-btn">
										<button type="submit" class="login100-form-btn btn-primary">
											Login
										</button>
									</div>
									
								</form>
							</div>
							
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
<?php
require_once("include/script.php");
?>
</html>
