<!doctype html>
<html lang="en">

<head>
	<title>E-Pengaduan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/login/css/style.css">

</head>

<body class="img js-fullheight" style="background-image: url(assets/login/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-3">
					<h2 class="heading-section">E-Pengaduan</h2>

				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-1 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Pengadilan Tinggi Sulawesi Tenggara</h3>
						<form action="<?php echo base_url();?>C_login/cek_login" method="post">
						
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Username" name="email" required>
							</div>
							<div class="form-group">
								<input id="password-field" type="password" name= "password" class="form-control" placeholder="Password" required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" name="submit" style="background-color:#00acac;;" class="form-control submit px-3">Sign In</button>
							</div>
							
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" checked>
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo base_url(); ?>assets/login/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/login/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/login/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/login/js/main.js"></script>

</body>

</html>