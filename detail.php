<?php
header("Content-Type: text/html;charset=utf-8");
$count = 1;
include('includes/header.php');
?>

		</header>
		<!-- Header -->
		
		<!-- Main page -->
		<section>
			
			<!-- Breadcrumb bar -->
			<!-- <div class="rst-breadcrumb-bar">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-lg-6">
							<ul class="breadcrumb">
								<li>
									<a href="index.html">Home</a>	
								</li>
								<li><span>Category</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div> -->
			<!-- Breadcrumb bar -->
			

		<div class="clearfix"></div><br />



		<div id="fc" class="container">
			<div class='first stage'>
			  <div class='flashcard'>
			    <div class='front'>
			      <p> 
			      <?php echo $decks->viewFront($count, $total, $c); ?>
			      </p>
			    </div>

			    <div class='back'>
			      <p>
			      <?php echo $decks->viewBack($count, $total, $c); ?> 
			      </p>
			    </div>
			  </div>  
			</div>

			<?php echo $count; 
			echo " of "; 
			echo $total ?>
			<div class="progress progress-success progress-striped">
			    <div class="bar" style="width:<?php echo $percentage;?>"></div>
			</div>

		</div>

		<div id="fcNavi" class="container">

								<!-- Flashcard Menu -->
			    <form id="shuffle" name="shuffle" method="post" action="">
			        <div class="center-block">
			        <input type="hidden" id="counter" name="counter" value="1" class="form_result"/>
					<input type="hidden" id="total" name="total" value="<?php echo $total; ?>" class="form_result"/>
					<input type="hidden" id="category" name="category" value="<?php if(isset($c)) {echo $c;} ?>" class="form_result"/>
					<button class="btn btn-large hidden-xs hidden-sm btn-info" id="first" name="first" value="1" type="submit">First</button>
			        <button class="btn btn-large btn-info" id="previous" name="previous" type="submit">Previous</button>
			        <button class="btn btn-large btn-info" id="next" name="next" type="submit" class="slide">Next</button>
			        <button class="btn btn-large hidden-xs hidden-sm btn-info" id="last" name="last" type="submit" class="slide">Last</button>
			        <a href="add-data.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
			        <p></p>
			    </form>
			<!-- Flashcard Menu end -->


		</div>

	

			</div>
			</div>


<?php
include('includes/footer.php');
?>