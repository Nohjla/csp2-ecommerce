
<?php
require_once '../partials/header.php';
require_once '../partials/navbar.php';
?>
<div class="container">
	<div class="row">
		       <?php require "../controllers/connection.php";
		       		$id = $_GET['id'];
			       	$sql = "SELECT * FROM items where id= $id";
			       	$result = mysqli_query($conn,$sql);
			       	if (mysqli_num_rows($result)>0) {
			       	$row = mysqli_fetch_assoc($result);
			            echo "<div class='col-lg-4 mb-2 mt-2'>
			            		<img src='$row[img_path]'>
			            	</div>";
			        	echo "<div class='col-lg-8 mb-2 mt-2'>
				        		<h2>Product Information</h2>
				        		<hr>
				        		<p>$row[name]</p>
				        		<p>$row[description]</p>
				        		<p>&#8369; $row[price]</p>
				        		<div class='row'>
					        		<div class='col-md-4'>
					                  <input class='form-control w-100' type='number'>
					                </div>
					                <div class='col-md-4'>
					                  <button class='btn w-100 btn-primary font-weight-bold'><i class='fas fa-cart-arrow-down'></i> Add to cart</button>
					                </div>
				                </div>
			        		</div>
			        	";
			       	}
		    	?>
		</div>
	</div>
</div>





<?php
require_once '../partials/footer.php';
?>