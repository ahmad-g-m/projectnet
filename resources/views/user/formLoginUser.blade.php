<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap.min.css">
	<title>Bootstrap 4 tutorial</title>
</head>
<body>
	<header class="masterHeader text-center text-white">
		<nav class="navbar navbar-light">
			<div class="container">
				<a href="#" class="navbar-brand">Machine Shop</a>
				<a href="#" class="btn btn-primary">Sign Up</a>
			</div>
		</nav>
		<br/><br/><br/><br/><br/><br/><br/>
		<div class="container">
			<div class="row">
				
				<div class="mx-auto col-lg-5 col-md-7 col-sm-10 col-xs-12">
				<form action="logineduser" method="post">
                    {!!csrf_field()!!}
					<div class="form-row">
						<div class="col-12 mb-2">
							<input type="email" name="email" class="form-control" placeholder="Enter your email...">
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 mb-2">
							<input type="password"  name="password" class="form-control" placeholder="Enter your password...">
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 mb-2">
							<input type="submit" name="btn" class="btn btn-primary btn-block" value="Sign In">
						</div>
						<!-- fault:
							<p class="error ml-5">incorrect information...</p>
						-->
					</div>
				</form>
			</div>
			</div>
		</div>
	</header>
	<footer>
		<div class="container">
			<div class="row d-flex flex-column justify-content-center align-items-center">
				<div class="col-3 col-lg-2 d-flex justify-content-between align-items-center mb-5 mt-4">
					<a href="https://www.twitter.com">
						<img src="001-twitter-logo.svg" alt="" class="sizeContact">
					</a>
					<a href="https://www.instagram.com/">
						<img src="002-instagram-logo.svg" alt="" class="sizeContact">
					</a>
					<a href="https://www.telegram.com">
						<img src="003-telegram-logo.svg" alt="" class="sizeContact">
					</a>
				</div>
			</div>
		</div>
	</footer>
	<script src="bootstrap.min.js"></script>
</body>
</html>



<form action="logineduser" method="post">
    {!!csrf_field()!!}
    email : <input type="text" name="email">
    password : <input type="text" name="password">
    <br>
    <input type="submit" name="btn" value="login">
</form>