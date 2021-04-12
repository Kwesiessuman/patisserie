<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Menu|La Pâtisserie</title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    
	<meta name="description" content="">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/client.css">
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
			    <li><a href="/home" class="smoothScroll">HOME</a></li>
				<li><a href="/menu" class="smoothScroll">MENU</a></li>
				<li><a href="/food" class="smoothScroll">FOOD</a></li>
				<li><a href="/orders" class="smoothScroll">ORDERS</a></li>
			</ul>
		</div>
	</div>
</section>


<section id="client" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h1>GRAB A TASTE</h1>
			</div>
		</div>
	</div>		
</section>


<section id="menu" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Menu</h1>
				<hr>
			</div>

			<div class="menu">
            <table style="width:100%">
            <tr>
                <th>No.</th>
                <th>Picture</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
            </tr>

			@foreach($menu1 as $menu)
                    <tr>
                        <td>{{$menu->foodid}}</td>
                        <td><img src ="{{$menu->image}}" width=300 height=200></td>
                        <td>{{$menu->foodname}}</td>
                        <td>{{$menu->description}}</td>
                        <td>{{$menu->price}}</td>
                    </tr>
                    @endforeach 
           
           
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
