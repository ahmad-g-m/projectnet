<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="../bootstrap.min.css">
	<title>Bootstrap 4 tutorial</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  
	  
	  
</head>
<body>
	<header class="masterHeader text-center text-white">
		<div id="cover">
			<!-- Nav tabs -------->
			<ul class="nav nav-tabs" role="tablist" id="tableBackground">
				<li class="nav-item col-4">
					<a class="nav-link active" data-toggle="tab" href="#persInf">Personal Information</a>
			  	</li>
			  	<li class="nav-item col-4">
					<a class="nav-link" data-toggle="tab" href="#edit">Edit Inofromaton</a>
			  	</li>
			  	<li class="nav-item col-4">
					<a class="nav-link" data-toggle="tab" href="#intCar">Interested Cars</a>
			  	</li>
			</ul>
		
			<!-- Tab panes -->
			<div class="tab-content">
			  	<div id="persInf" class="container tab-pane col-lg-8 col-xs-11 active"><br><br><br><br>
					<table class="table text-dark table-striped" id="tableBackground">
						<thead>
							<tr>
								<th>Username</th>
								<td>mehdikhorsand</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Email</th>
								<td>mehdi@gmail.com</td>							
							</tr>
							<tr>
								<th>Password</th>
								<td>can not be shown</td>							
							</tr>
							<tr>
								<th>Age</th>
								<td>20</td>						   
							</tr>
						</tbody>
					</table>
			  	</div>
			  	<div id="edit" class="container tab-pane col-12 fade">
					
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist" id="tableBackground">
						<li class="nav-item col-6">
							<a class="nav-link active" data-toggle="tab" href="#e-password">Password</a>
						</li>
						<li class="nav-item col-6">
							<a class="nav-link" data-toggle="tab" href="#e-information">Information</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div id="e-password" class="container tab-pane active"><br><br><br>
							<form>
								<div class="mx-auto col-lg-5 col-md-7 col-sm-10 col-xs-12">
									<div class="mb-2">
										<input type="password" class="form-control" placeholder="Enter current password...">
									</div>
									<div class="mb-2">
										<input type="password" class="form-control" placeholder="Choose a password...">
									</div>
									<div class="mb-2">
										<input type="password" class="form-control" placeholder="Repeat choosen password...">
									</div>
									<div class="col-12 mb-2">
										<button type="button" name="button" class="btn btn-primary btn-block">Change password</button>
									</div>
								</div>		
							</form>
						</div>
						<div id="e-information" class="container tab-pane fade"><br><br><br>
							<form>
								<div class="mx-auto col-lg-5 col-md-7 col-sm-10 col-xs-12">
									<div class="mb-2">
										<input type="username" class="form-control" placeholder="Change username...">
									</div>
									<div class="mb-2">
										<input type="email" class="form-control" placeholder="Change email...">
									</div>
									<div class="mb-2">
										<input type="input" class="form-control" placeholder="Change age...">
									</div>
									<div class="col-12 mb-2">
										<button type="button" name="button" class="btn btn-primary btn-block">Change</button>
									</div>
								</div>		
							</form>
						</div>
					</div>
				</div> 
				<div id="intCar" class="container tab-pane fade" id="cover"><br>
					<div class="container">
						<div class="row">

							<!-- in ja bayad ye method php bashe ke be ezaye har post ye bar ino echo kone -->

							<div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
								<a  class="btn" href="#" >
									<div class="card mb-1">
										<img class="card-img-top" src="photo_2020-01-16_20-11-18.jpg" alt="Card image" style="width:100%">
										<div class="card-body-down">
											<h6 class="text-dark text-center">salam</h6>
										</div>
									</div>
								</a>
							</div>
							<!---------------------------------------------------------------->




						</div>
					</div>
							  
				</div>
			</div>
		</div>
	</header>
	
</body>
</html>
