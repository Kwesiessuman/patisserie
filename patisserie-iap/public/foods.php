<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Foods|La Pâtisserie</title>

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
				<h1 class="heading">Add Food</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="addfood.php" method="post" enctype="multipart/form-data">
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="image" type="file" class="form-control" id="image" placeholder="Image">
				    </div><br><br>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="foodname" type="foodname" class="form-control" id="name" placeholder="Name">
				    </div><br><br>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<textarea name="description" rows="6" class="form-control" id="description" placeholder="Description"></textarea>
                    </div><br><br>
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="price" type="price" class="form-control" id="price" placeholder="Price">
				    </div><br><br>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="add" type="submit" class="form-control" id="submit" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


<section id="add" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
				<h1 class="heading">Update Food</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="updatefood.php" method="post" enctype="multipart/form-data">
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="foodid" type="foodid" class="form-control" id="foodid" placeholder="Food ID">
				    </div><br><br>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="image" type="file" class="form-control" id="image" placeholder="Image">
				    </div><br><br>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="foodname" type="foodname" class="form-control" id="foodname" placeholder="Name">
				    </div><br><br>
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<textarea name="description" rows="6" class="form-control" id="description" placeholder="Description"></textarea>
                    </div><br><br>
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="price" type="price" class="form-control" id="price" placeholder="Price">
				    </div><br><br>
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
				<h1 class="heading">Delete Food</h1>
				<hr>
            </div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="deletefood.php" method="post">
					<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
						<input name="foodname" type="name" class="form-control" id="foodname" placeholder="Name">
				    
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