<?php
$conn = new mysqli("127.0.0.1", "root", "", "mywebsite", "3307");
?>

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
			    <li><a href="clienthome.php" class="smoothScroll">HOME</a></li>
				<li><a href="menu.php" class="smoothScroll">MENU</a></li>
				<li><a href="cart.php" class="smoothScroll">CART</a></li>
				<li><a href="history.php" class="smoothScroll">ORDER HISTORY</a></li>
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

            <?php
            $sql = "SELECT * FROM foods";
            $result = mysqli_query($conn,$sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0){
                while ($row = mysqli_fetch_assoc($result)){
                
                    ?>

                    <tr>
                        <td><?php echo $row['foodid']; ?></td>
                        <td><img src = "<?php echo $row['image']?>" width=200 height=150/></td>
                        <td><?php echo $row['foodname']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                    </tr>
            
            <?php        
                }
            }
            ?>
           
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