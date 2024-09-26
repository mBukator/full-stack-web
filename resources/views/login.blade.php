<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

	<div class="login_container">
		<div class="login_wrapper">
			<h2 class="form_title">Sign In</h2>
			<form class="login_form">
				<div class="input_wrapper">
					<input id="email" type="email" placeholder="Email address" class="input_field" required />
					<i class="fas fa-envelope icon label_icon"></i>
				</div>

				<div class="input_wrapper">
					<input id="password" type="password" placeholder="Password" class="input_field" required />
				</div>

				<a href="/forgot-password" class="link">
					Forgot Password?
				</a>

				<button type="submit" class="login_btn">
					Log In
				</button>
			</form>

			<p class="signup_text">
				Don't have an account? <a href="/auth/sign-up" class="link">Create one now!</a>
			</p>
		</div>
	</div>
</body>

</html>