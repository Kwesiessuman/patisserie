<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Users|La Pâtisserie</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/admin.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins:400,500' rel='stylesheet' type='text/css'>
</head>


<body>

<section class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</section>

<section class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">LA PÂTISSERIE</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="adminhome.php" class="smoothScroll">HOME</a></li>
				<li><a href="users.php" class="smoothScroll">USERS</a></li>
				<li><a href="foods.php" class="smoothScroll">FOODS</a></li>
				<li><a href="orders.php" class="smoothScroll">ORDERS</a></li>
			</ul>
		</div>
	</div>
</section>


<section id="admin" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>ADMIN UNIT</h1>
			</div>
		</div>
	</div>		
</section>


<section id="add" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
				<h1 class="heading">Update User</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="updateuser.php" method="post" enctype="multipart/form-data">
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="userid" type="userid" class="form-control" id="userid" placeholder="User ID">
				    </div><br><br>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="name" type="name" class="form-control" id="name" placeholder="Name">
				    </div><br><br>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="email" type="email" class="form-control" id="email" placeholder="Email">
				    </div><br><br>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="phone" type="phone" class="form-control" id="phone" placeholder="Phone">
                    </div><br><br>
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="password" type="password" class="form-control" id="password" placeholder="Password">
				    </div><br><br>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<label for="usertype">Select User Type:</label>
						<select name="usertype" id="usertype">
							<option name=usertype value="client">Client</option>
							<option name=usertype value="admin">Admin</option>
						</select>
					</div>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="update" type="submit" class="form-control" id="submit" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>



<section id="delete" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
				<h1 class="heading">Delete Users</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="deleteusers.php" method="post">
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="name" type="name" class="form-control" id="name" placeholder="Name">
				    
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="delete" type="submit" class="form-control" id="submit" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<section id="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h3>LA PÂTISSERIE</h3>
				<p>Copyright © La Pâtisserie Restaurant and Café 
			</div>
		</div>
	</div>
</section>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/index.js"></script>

</body>
</html>
