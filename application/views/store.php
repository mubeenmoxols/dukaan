<!DOCTYPE html>
<html>
<head>
	<title>Dukaan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>



<body class="bordpd">
<div class="container-fluid bgc">
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
	<div class="d-flex justify-content-center row">
        <div class="col-md-12">
            <div class="p-2">
                <h1><center>Daal</center></h1>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded fa-1x">
                <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                </div>
                <div class="d-flex flex-row align-items-center qty">Quantity : 
                   <input id="qty" type="number" name="qty">
                </div>
                <div>
                	 <input type="text" hidden="" id="bprice" name="price" style="border: none;" value="200">
                    <h5 id="price" class="text-grey">Rs.200</h5>
                </div>
                <div class="d-flex align-items-center"><i class="fas fa-shopping-cart mb-1 btn"><br>Add To Cart</i></div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded fa-1x">
                <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                </div>
                 <div class="d-flex flex-row align-items-center qty">Quantity : 
                   <input id="qty" type="number" name="qty">
                </div>
                <div>
                	 <input type="text" hidden="" id="bprice" name="price" style="border: none;" value="200">
                    <h5 id="price" class="text-grey">Rs.200</h5>
                </div>
                <div class="d-flex align-items-center"><i class="fas fa-shopping-cart mb-1 btn"><br>Add To Cart</i></div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded fa-1x">
                <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                </div>
                <div class="d-flex flex-row align-items-center qty">Quantity : 
                   <input id="qty" type="number" name="qty">
                </div>
                <div>
                	 <input type="text" hidden="" id="bprice" name="price" style="border: none;" value="200">
                    <h5 id="price" class="text-grey">Rs.200</h5>
                </div>
                <div class="d-flex align-items-center"><i class="fas fa-shopping-cart mb-1 btn"><br>Add To Cart</i></div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded fa-1x">
                <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                </div>
                <div class="d-flex flex-row align-items-center qty">Quantity : 
                   <input id="qty" type="number" name="qty">
                </div>
                <div>
                	 <input type="text" hidden="" id="bprice" name="price" style="border: none;" value="200">
                    <h5 id="price" class="text-grey">Rs.200</h5>
                </div>
                <div class="d-flex align-items-center"><i class="fas fa-shopping-cart mb-1 btn"><br>Add To Cart</i></div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded fa-1x">
                <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                </div>
                <div class="d-flex flex-row align-items-center qty">Quantity : 
                   <input id="qty" type="number" name="qty">
                </div>
                <div>
                	 <input type="text" hidden="" id="bprice" name="price" style="border: none;" value="200">
                    <h5 id="price" class="text-grey">Rs.200</h5>
                </div>
                <div class="d-flex align-items-center"><i class="fas fa-shopping-cart mb-1 btn"><br>Add To Cart</i></div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded fa-1x">
                <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                </div>
                <div class="d-flex flex-row align-items-center qty">Quantity : 
                   <input id="qty" type="number" name="qty">
                </div>
                <div>
                	 <input type="text" hidden="" id="bprice" name="price" style="border: none;" value="200">
                    <h5 id="price" class="text-grey">Rs.200</h5>
                </div>
                <div class="d-flex align-items-center"><i class="fas fa-shopping-cart mb-1 btn"><br>Add To Cart</i></div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded fa-1x">
                <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                </div>
                <div class="d-flex flex-row align-items-center qty">Quantity : 
                   <input id="qty" type="number" name="qty">
                </div>
                <div>
                	 <input type="text" hidden="" id="bprice" name="price" style="border: none;" value="200">
                    <h5 id="price" class="text-grey">Rs.200</h5>
                </div>
                <div class="d-flex align-items-center"><i class="fas fa-shopping-cart mb-1 btn"><br>Add To Cart</i></div>
            </div>
            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded fa-1x">
                <div class="mr-1"><img class="rounded" src="https://i.imgur.com/XiFJkhI.jpg" width="70"></div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold">Basic T-shirt</span>
                </div>
                <div class="d-flex flex-row align-items-center qty">Quantity : 
                   <input id="qty" type="number" name="qty">
                </div>
                <div>
                	 <input type="text" hidden="" id="bprice" name="price" style="border: none;" value="200">
                    <h5 id="price" class="text-grey">Rs.200</h5>
                </div>
                <div class="d-flex align-items-center"><i class="fas fa-shopping-cart mb-1 btn"><br>Add To Cart</i></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="row">
	<div class="col">
<footer class="fixed-bottom bgc ">	
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
</div>
</div>
<script type="text/javascript">
	$("#qty").keyup(function(){
  		var price = $("#bprice").val();
  		var qty = $("#qty").val();
  		var final = qty*price;
  		$("#price").html("Rs."+final);
  		if(qty == ""){
  			$("#price").html("Rs."+price);
  		}
	}); 
</script>
</body>
</html>
