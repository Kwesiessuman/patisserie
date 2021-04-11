<!---Adding food to the menu--->
<section id="add" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
				<h1 class="heading">Add Food</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="/food/add" method="post" enctype="multipart/form-data">
                @csrf
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

<!---Updating food in the menu--->
<section id="add" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
				<h1 class="heading">Update Food</h1>
				<hr>
			</div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="/food/update" method="post" enctype="multipart/form-data">
                @csrf
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

<!---Deleting food in the menu--->
<section id="delete" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
				<h1 class="heading">Delete Food</h1>
				<hr>
            </div>
			<div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
				<form action="deletefood.php" method="post">
                @csrf
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