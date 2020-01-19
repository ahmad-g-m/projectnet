<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap 4 tutorial</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<?php 
		use Illuminate\Support\Facades\Storage;
		$path = 'photo_2020-01-16_20-11-18.jpg';//background
		$conte1 = Storage::get($path);
		// dd($id);
	?>
	 <style>
		.masterHeader{
		background:  url('data:image/jpeg;base64,{{base64_encode($conte1)}}')
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
		<div id="cover">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist" id="tableBackground">
				<li class="nav-item col-4">
					<a class="nav-link {{$active1}}" data-toggle="tab" href="#persInf">Personal Information</a>
			  	</li>
			  	<li class="nav-item col-4">
					<a class="nav-link {{$active2}}" data-toggle="tab" href="#edit">Edit Inofromaton</a>
			  	</li>
			  	<li class="nav-item col-4">
					<a class="nav-link {{$active3}}" data-toggle="tab" href="#intCar">Interested Cars</a>
			  	</li>
			</ul>
		
			<!-- Tab panes -->
			
			<div class="tab-content">
			  	<div id="persInf" class="container tab-pane col-lg-8 col-xs-11 {{$active1}}"><br><br><br><br>
					<table class="table text-dark table-striped" id="tableBackground">
						<thead>
							<tr>
								<th>Username</th>
								<td>{{$admin->name}}</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th>Email</th>
								<td>{{$admin->email}}</td>							
							</tr>
							<tr>
								<th>Password</th>
								<td>can not be shown</td>							
							</tr>
							<tr>
								<th>Age</th>
								<td>{{$admin->age}}</td>						   
							</tr>
						</tbody>
					</table>
			  	</div>
			  	<div id="edit" class="container tab-pane col-12 {{$active2}}">
					
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist" id="tableBackground">
						<li class="nav-item col-6">
							<a class="nav-link {{$active2_1}}" data-toggle="tab" href="#e-password">Password</a>
						</li>
						<li class="nav-item col-6">
							<a class="nav-link {{$active2_2}}" data-toggle="tab" href="#e-information">Information</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div id="e-password" class="container tab-pane {{$active2_1}}"><br><br><br>
							<form action="{{url('dashbordadmin/changepassword/'.$id)}}" method="post">
							{!!csrf_field()!!}
								<div class="mx-auto col-lg-5 col-md-7 col-sm-10 col-xs-12">
									<div class="mb-2">
										<input type="password" name="currentpass" class="form-control" placeholder="Enter current password...">
									</div>
									<div class="mb-2">
										<input type="password" name ="newpass" class="form-control" placeholder="Choose a password...">
									</div>
									<div class="mb-2">
										<input type="password" name="repeatpass" class="form-control" placeholder="Repeat choosen password...">
									</div>
									<div class="col-12 mb-2">
										<button type="submit" name="changeBtn" class="btn btn-primary btn-block">Change password</button>
									</div>
									@if($error == 1)
									<p style="text-align: center ; color: red;font-weight:bold;;font-size:large">current password incorrectly</p>
									@elseif($error == 2)
									<p style="text-align: center ; color: red;font-weight:bold;;font-size:large">new password and its repetition do not match</p>
									@elseif($error == 0)
									<p style="text-align: center ; color: green;font-weight:bold;;font-size:large">successfuly changed ... </p>
									@endif
								</div>		
							</form>
						</div>
						<div id="e-information" class="container tab-pane {{$active2_2}}"><br><br><br>
							<form action="{{url('dashbordadmin/changeinfo/'.$id)}}" method="post">
							{!!csrf_field()!!}
								<div class="mx-auto col-lg-5 col-md-7 col-sm-10 col-xs-12">
									<div class="mb-2">
										<label for="usernametxt" style="color: blue;font-size:large"> username </label>
										<input type="username" name="usernametxt" id="usernametxt" class="form-control" value="{{$admin->name}}">
									</div>
									<div class="mb-2">
									<label for="emailtxt" style="color: blue;font-size:large"> email </label>
										<input type="email" name="emailtxt" id="emailtxt" class="form-control" value="{{$admin->email}}">
									</div>
									<div class="mb-2">
									<label for="agetxt" style="color: blue;font-size:large"> age </label>
										<input type="input" name="agetxt" id="agetxt" class="form-control" value="{{$admin->age}}">
									</div>
									<div class="col-12 mb-2">
										<button type="submit" name="changebtn" class="btn btn-primary btn-block">Change</button>
									</div>
									@if($active2_2 == 'active')
										<p style="text-align: center ; color: green ;font-weight:bold;;font-size:large">successfuly changed ... </p>
									@endif
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
										<img class="card-img-top" src="data:image/jpeg;base64,{{ base64_encode($conte1)}}" alt="Card image" style="width:100%">
										<div class="card-body-down">
											<h6 class="text-dark text-center">salam</h6>
										</div>
									</div>
								</a>
							</div>
							<!----x------------------------------------------------------------>




						</div>
					</div>
							  
				</div>
			</div>
		</div>
	</header>
	
</body>
</html>
