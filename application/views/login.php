<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CI Admin</title>
	<!-- Bootstrap CSS Core -->
	<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Login CSS -->
	<link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
				<div class="card-body">
					<h5 class="card-title text-center">Sign In</h5>
					<?php echo form_open("auth/cek_login"); ?>
						<div class="form-label-group">
							<input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
							<label for="username">Username</label>
						</div>

						<div class="form-label-group">
							<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
							<label for="password">Password</label>
						</div>

						<!-- <div class="custom-control custom-checkbox mb-3">
						<input type="checkbox" class="custom-control-input" id="customCheck1">
						<label class="custom-control-label" for="customCheck1">Remember password</label>
						</div> -->
						<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
	<?php //echo form_open("auth/cek_login"); ?>
		<!-- <p>Username : <br>
		<input type="text" name="username">
		</p>
		<p>Password : <br>
		<input type="password" name="password"></p>
		<p><button type="submit">Submit</button></p> -->
	<?php //echo form_close(); ?>

	<script src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/bootstrap/bootstrap.min.js"></script>
</body>
</html>