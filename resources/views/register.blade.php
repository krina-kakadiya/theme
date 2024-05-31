<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
	data-sidebar-image="none">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Smarthr - Bootstrap Admin Template">
	<meta name="keywords"
		content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
	<meta name="author" content="Dreamguys - Bootstrap Admin Template">
	<title>Register - HRMS admin template</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/img/favicon.png') }}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{ asset('admin/css/style.css') }}">


</head>

<body class="account-page">

	<!-- Main Wrapper -->
	<div class="main-wrapper">
		<div class="account-content">
			<div class="container">

				<!-- Account Logo -->
				<div class="account-logo">
					<a href="dashboard"><img src="{{ asset('admin/img/logo2.png') }}" alt="Dreamguy's Technologies"></a>
				</div>
				<!-- /Account Logo -->

				<div class="account-box">
					<div class="account-wrapper">
						<h3 class="account-title">Register</h3>
						<p class="account-subtitle">Access to our dashboard</p>

						<!-- Account Form -->
						<form action="register">
							<div class="input-block mb-4">
								<label for="email" class="col-form-label">Email<span class="mandatory">*</span></label>
								<input class="form-control" type="text" name="email" id="email" placeholder="Email">
							</div>
							<div class="input-block mb-4">
								<label for="password" class="col-form-label">Password<span class="mandatory">*</span></label>
								<input class="form-control" type="password" name="password" id="password" placeholder="Password">
							</div>
							<div class="input-block mb-4">
								<label for="con_password" class="col-form-label">Repeat Password<span class="mandatory">*</span></label>
								<input class="form-control" type="password" name="con_password" id="con_password" placeholder="Confirm Password">
							</div>
							<div class="input-block mb-4 text-center">
								<button class="btn btn-primary account-btn" type="submit">Register</button>
							</div>
							<div class="account-footer">
								<p>Already have an account? <a href="/">Login</a></p>
							</div>
						</form>
						<!-- /Account Form -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="{{ asset('admin/js/jquery-3.7.1.min.js') }}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>

	<!-- Custom JS -->
	<script src="{{ asset('admin/js/app.js') }}"></script>

</body>

</html>