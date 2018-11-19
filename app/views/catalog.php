<div class="container">
	<div class="row">
		<div class="col-lg-3">
			<h1 id ="nowCategories">Categories</h1>
			<!-- <div class="col-lg-3 text-center">
				<h1>Categories</h1>
 -->
				<div class="row text">
				<div class ='list-group w-100 text-center'>
			      <?php require_once 'app/controllers/connection.php';
			      	$sql = "SELECT * FROM categories";
			      	$result = mysqli_query($conn, $sql);	

			      	if(mysqli_num_rows($result)>0){
			      		while ($row = mysqli_fetch_assoc($result)){
			            echo "<a href='#nowCategories' class = 'list-group-item' onclick='showCategories($row[id])'>$row[name]</a>";			                   
			      		}
			      	}
			      ?>
			      </div>
			     </div>
			<!-- <div class="list-group">
				<a href="#" class="list-group-item">Category 1</a>
				<a href="#" class="list-group-item">Category 2</a>
			</div> -->
		</div>
		<div class="col-lg-9">
			<div id="carouselExampleindicators" class="carousel slide my-4" data-ride="carousel">
				<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
				<img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
				</div>
				<div class="carousel-item">
				<img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
				</div>
				<div class="carousel-item">
				<img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
				</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
				</div>

				 <div class="row" id="products">
		       <?php require "app/controllers/connection.php";
			       	$sql = "SELECT * FROM items";
			       	$result = mysqli_query($conn,$sql);
			       	if (mysqli_num_rows($result)>0) {
			       		while ($row = mysqli_fetch_assoc($result)) {
			       		/*	$name = $row["name"];
			       			echo $name. "<br>";*/
			            echo "<div class='col-md-4 mb-2 mt-2'>
			                	<div class='card h-100'>
			                  <img src='$row[img_path]'>
			                  <div class='card-body'>
			                  <h4 class='card-title font-weight-bold'>$row[name]</h4>
			                  <h5>$row[price]</h5>
			                  <p class='card-text'>
			                  $row[description]</p>
			                  </div>
			                  <div class='card-footer'>
			                  <input class='form-control w-100' type='number'>
			                  <button class='btn w-100 btn-primary mt-2 font-weight-bold'><i class='fas fa-cart-arrow-down'></i> Add to cart</button>
			                  </div>
			                </div>
			            </div>";
			       		}
			       	}
		    	?>
      </div>
      <!-- /.row -->

			</div>
		</div>

	</div><!-- end of row -->

</div><!-- end of container -->

<script type="text/javascript">
	function showCategories(categoryID){
		// alert(categoryID);
		document.getElementById('nowCategories').innerHTML = "Category" + " " + categoryID;
		$.ajax({
				url:"app/controllers/show_items.php",
				method:"POST",
				data:{
					categoryID:categoryID
				},
				dataType:"text",
				success: function(data){
					$("#products").html(data)
				}
			});
		}
</script>