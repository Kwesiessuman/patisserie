<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Orders|La Pâtisserie</title>

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
				<li><a href="/users" class="smoothScroll">USERS</a></li>
				<li><a href="/food" class="smoothScroll">FOODS</a></li>
				<li><a href="/orders" class="smoothScroll">ORDERS</a></li>
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


<section id="orders" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				<h1 class="heading">Orders</h1>
				<hr>
			</div>

			<div class="orders">
            <table style="width:100%">
                <tr>
                    <th>No.</th>
                    <th>Customer</th>
                    <th>Delivery Address</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
                @foreach($orders_in as $order)
                        <tr>
                    
                            <td>{{$order->orderNo}}</td>
                            <td>{{$order->customer}}</td>
                            <td>{{$order->deliveryAddress}}</td>
                            <td>{{$order->total}}</td>
                            <td>{{$order->status}}</td>
                            <td>{{$order->created_at}}</td>
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