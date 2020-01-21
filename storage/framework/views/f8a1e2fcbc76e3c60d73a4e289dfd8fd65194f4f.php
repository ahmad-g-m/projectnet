<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>register admin</title>
	<?php 
		use Illuminate\Support\Facades\Storage;
		$path = 'photo_2020-01-16_20-11-18.jpg';//background
		$conte1 = Storage::get($path);
		// dd($id);
	?>
	<style>
		.masterHeader{
		background:  url('data:image/jpeg;base64,<?php echo e(base64_encode($conte1)); ?>')
		 no-repeat center center;
		padding-bottom: 18rem;
		background-size: cover;
		}
		#tableBackground{
		background-color: rgba(225, 246, 247, 0.89);
		}
	 </style> 
</head>
<body>
	<header class="masterHeader text-center text-white">
		<nav class="navbar navbar-light">
			<div class="container">
				<a href="http://127.0.0.1:8000/" class="navbar-brand">Machine Shop</a>
				<a href="<?php echo e(route('loginadmin')); ?>" class="btn btn-primary">Sign In</a>
			</div>
		</nav>
		<br/><br/><br/><br/><br/><br/><br/>
		<div class="container">
			<div class="row">
				
				<div class="mx-auto col-lg-5 col-md-7 col-sm-10 col-xs-12">
				<form action="saveregadmin" method="post">
						<?php echo csrf_field(); ?>

					<div class="form-row">
						<div class="col-12 mb-2">
							<input type="email" name="email" class="form-control" placeholder="Enter your email...">
						</div>
						<div class="col-12 mb-2">
							<input type="username" name="name" class="form-control" placeholder="Choose your username...">
						</div>
						<div class="col-12 mb-2">
							<input type="password" name="password" class="form-control" placeholder="Choose your password...">
                        </div>
						<div class="col-12 mb-2">
							<input type="password" name="reppassword" class="form-control" placeholder="Repeat your password...">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 mb-2">
							<input type="number" name="age" class="form-control" placeholder="Enter your age...">
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-2">
							<button type="submit" name="button" class="btn btn-primary btn-block">Sign Up</button>
						</div>
						
						<?php if(isset($error)): ?>
							<p class="error ml-5" style="color: red">incorrect information</p>
						<?php endif; ?>
					</div>
				</form>
			</div>
			</div>
		</div>
	</header>
	<footer>
		<?php
			$path1 = '001-twitter-logo.svg';
			$path2 = '002-instagram-logo.svg';
			$path3 = '003-telegram-logo.svg';
			$conte1 = Storage::get($path1);
			$conte2 = Storage::get($path2);
			$conte3 = Storage::get($path3);


		?>
		<div class="container">
			<div class="row d-flex flex-column justify-content-center align-items-center">
				<div class="col-3 col-lg-2 d-flex justify-content-between align-items-center mb-5 mt-4">
					<a href="https://www.twitter.com">
						<img src="data:image/svg+xml;base64,<?php echo e(base64_encode($conte1)); ?>" style="max-width: 20px;" alt="twitter" class="sizeContact">
					</a>
					<a href="https://www.instagram.com/">
						<img src="data:image/svg+xml;base64,<?php echo e(base64_encode($conte2)); ?>" style="max-width: 20px;" alt="instagram" class="sizeContact">
					</a>
					<a href="https://www.telegram.com">
						<img src="data:image/svg+xml;base64,<?php echo e(base64_encode($conte3)); ?>" style="max-width: 20px;" alt="telegram" class="sizeContact">
					</a>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH E:\wamp64\www\projectnet\projectnet\resources\views/admin/signUp.blade.php ENDPATH**/ ?>