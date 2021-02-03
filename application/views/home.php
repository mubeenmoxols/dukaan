<!DOCTYPE html>
<html>
<head>
	<title>Dukaan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
</head>



<body>
		<header class="header mx-auto fixed-top bgc">
		<div class="row justify-content-md-center">
			<div class="col-md-1"></div>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-auto">
					<span class="fa fa-search fa-3x"> </span>
					</div>	
					<div class="col">
					<input type="search" class="searchbar border-bottom fa-2x" placeholder="Search">
					</div>
					<div class="col-md-1"></div>
				</div>						
			</div>
		</header>
<div class="container cnmargin justify-content-md-center">
	
	<div class="row">
	<?php foreach ($categories as $category): ?>	
				<div  class="card col-6 bordpd br">
  					<img src="<?= base_url('assets/img/dalda-canola-cooking-oils-ghee-png-favpng-qKDVvmW8L3R90CuT0qWskK7WB-removebg-preview.png')?>" class="card-img-top" alt="...">
  					<div class="card-body">
    					<h3 class="card-title"><center><?php echo $category['name'] ?></center></h3>
    				<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
 				 	</div>
				</div>
				<!-- <div  class="card col-md-6 bordpd">
  					<img src="<?php echo $category['img'] ?>" class="card-img-top" alt="...">
  					<div class="card-body">
    					<h3 class="card-title"><center><?php echo $category['name'] ?></center></h3>
    				<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
 				 	<!-- </div> -->
				<!-- </div> --> 
				<?php endforeach; ?>
	</div>

</div>
</div>
<div class="row">
	<div class="col">
<footer class="fixed-bottom bgc">	
	<div class="row justify-content-md-center">
		<div class="col-md-4">
			<a href="<?= site_url('welcome/index') ?>" class="btn home">
				<span class="fal fa-home fa-2x"><br>Home</span>
			</a>
		</div>
		<div class="col-md-4" class="btn">
			<a href="<?= site_url('welcome/cart') ?>" class="btn">
			<span class="fal fa-shopping-cart fa-2x"><br>Order</span>
		</a>
		</div>
		<div class="col-auto" class="btn">
			<a href="<?= site_url('welcome/store') ?>" class="btn">
			<span class="fal fa-user fa-2x"><br>Profile</span>
		</a>
		</div>
	</div>
</footer>
	</div>

</body>
</html>