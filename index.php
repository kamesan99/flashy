<?php
include('includes/header.php');

if (isset($_GET['login_error']))
{ ?>
	<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
	Hmm...something went wrong. You could not be logged in :-(
	</div>
<?php } ?>
				
			</div>
			<!-- Header banner -->
			
		</header>
		<!-- Header -->
  <body>


			<!-- Header banner -->
			<div class="rst-header-banner rst-banner-background rst-banner-3 rst-index-page-banner">
			
				<!-- Menu bar -->
				<div class="rst-header-menu-bar">
					<div class="container">
						<div class="rst-header-logo">
							<a href="index.php"><img src="images/header-logo-1.png" alt="" /></a>
							<a class="rst-logo-sticky" href="index.php"><img src="images/header-logo-2.png" alt="" /></a>
						</div>
						<nav class="rst-header-menu">
							<button class="rst-menu-trigger">
								<span>Toggle navigation</span>
							</button>
							<ul>
								
								<li><a href="flashcards.php?s=">Flashcards</a></li>
								<li>
									<a href="#">Categories</a>
									<ul>
										<li><a href="flashcards.php?s=">Languages</a></li>
										<li><a href="flashcards.php?s=">Biology</a></li>
										<li><a href="flashcards.php?s=">Mathematics</a></li>
									</ul>
								</li> 
								<li><a href="contact.html">Contact</a></li>
							</ul>
							<a class="btn btn-mds btn-success" type="button" href="register.php">Register</a>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<!-- Menu bar -->
				
				<!-- Banner content -->
				<div class="rst-banner-content">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<div class="text-left">
									<h1>Find Flashcards</h1>
									<h5>or create your own</h5>	
										
								</div>
							</div>
							<div class="col-sm-6">
								<form action="flashcards.php" method="get" class="rst-search-form rst-search">
									<div class="rst-si">
										<input type="text" placeholder="Search ..."  name="s">
										<span class="rst-artinbase"><b><?php echo $decks->countCardsTotal();?></b> flashcards</span>
										<i class="fa fa-search rst-search-icon"></i>
										<button type="submit"  class="sb"><i class="fa fa-long-arrow-right"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
					
				</div>
				<!-- Banner content -->
				
			</div>
			<!-- Header banner -->
			
			<div class="rst-scroll-down text-center">
				<a href="#"><i class="fa fa-arrow-down"></i></a>
			</div>

		</header>
		<!-- Header -->
		
		<!-- Main page -->
		<section>
			
			<!-- Support products -->
			<div id="rst-support-products" class="wpb_row">
				<div class="container">
					<div class="rst-group-title text-center">
						<span>Learn with</span>
						<h3>Flashcards</h3>
						<p>Never forget anything anymore</p>
					</div>

				<div class="rst-scroll-down text-center">
					<a href="#"><i class="fa fa-arrow-down"></i></a>
				</div>
			</div>
			<!-- Support products -->
			
			<!-- What about -->
			<div id="rst-home-whatabout" class="wpb_row">
				<div class="container">
					<div class="rst-group-title text-center">
						<span>Fun fact</span>
						<h3>Why do flashcards work?</h3>
						<p>Flashcards help to create stronger neuron connections</p>
					</div>
					<div class="rst-home-funfacts clearfix">
						<div class="rst-funfact">
							<span class="rst-funnumber counter"><?php echo $decks->countDecksTotal();?></span>
							<div class="rst-funfact-line"></div>
							<h5>Flashcard Decks</h5>
						</div>
						<div class="rst-funfact">
							<span class="rst-funnumber counter"><?php echo $decks->countCardsTotal();?></span>
							<div class="rst-funfact-line"></div>
							<h5>Flashcards</h5>
						</div>
						<div class="rst-funfact">
							<span class="rst-funnumber counter"><?php echo $decks->countUsersTotal();?></span>
							<div class="rst-funfact-line"></div>
							<h5>Users</h5>
						</div>
					</div>
				</div>
				<div class="rst-scroll-down text-center">
					<a href="#"><i class="fa fa-arrow-down"></i></a>
				</div>
			</div>
			<!-- What about -->
			

			<!-- What people say -->
			<div id="rst-home-whatpeoplesay" class="wpb_row">
				<div class="container">
					<div class="rst-group-title text-center">
						<span>testimonials</span>
						<h3>What People Say?</h3>
						<p>Duis mattis semper risus sit amet porttitor turpis egestas vitae</p>
					</div>
					<div class="owl-carousel rst-whatpeople-owl">
						<div class="row">
							<div class="col-sm-4">
								<div class="rst-peoplesay rst-peoplesay2 text-center">
									<img src="http://placehold.it/299x299" alt="" />
									<h5>Liza doe</h5>
									<span>coder</span>
									<p>"Duis vulputate, lacus nec aliquam eleifend, sapien faucibus tellus  tempus eros orci eu nulla. Nam eu consectetur mauris vivamus sed. Sed at porta id ullamcorper mi donec. </p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="rst-peoplesay rst-peoplesay2 text-center">
									<img src="http://placehold.it/299x299" alt="" />
									<h5>Liza doe</h5>
									<span>coder</span>
									<p>"Duis vulputate, lacus nec aliquam eleifend, sapien faucibus tellus  tempus eros orci eu nulla. Nam eu consectetur mauris vivamus sed. Sed at porta id ullamcorper mi donec. </p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="rst-peoplesay rst-peoplesay2 text-center">
									<img src="http://placehold.it/299x299" alt="" />
									<h5>Liza doe</h5>
									<span>coder</span>
									<p>"Duis vulputate, lacus nec aliquam eleifend, sapien faucibus tellus  tempus eros orci eu nulla. Nam eu consectetur mauris vivamus sed. Sed at porta id ullamcorper mi donec. </p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="rst-peoplesay rst-peoplesay2">
									<img src="http://placehold.it/299x299" alt="" />
									<h5>Liza doe</h5>
									<span>coder</span>
									<p>"Duis vulputate, lacus nec aliquam eleifend, sapien faucibus tellus  tempus eros orci eu nulla. Nam eu consectetur mauris vivamus sed. Sed at porta id ullamcorper mi donec. </p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="rst-peoplesay rst-peoplesay2">
									<img src="http://placehold.it/299x299" alt="" />
									<h5>Liza doe</h5>
									<span>coder</span>
									<p>"Duis vulputate, lacus nec aliquam eleifend, sapien faucibus tellus  tempus eros orci eu nulla. Nam eu consectetur mauris vivamus sed. Sed at porta id ullamcorper mi donec. </p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="rst-peoplesay rst-peoplesay2">
									<img src="http://placehold.it/299x299" alt="" />
									<h5>Liza doe</h5>
									<span>coder</span>
									<p>"Duis vulputate, lacus nec aliquam eleifend, sapien faucibus tellus  tempus eros orci eu nulla. Nam eu consectetur mauris vivamus sed. Sed at porta id ullamcorper mi donec. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="rst-scroll-down text-center">
					<a href="#"><i class="fa fa-arrow-down"></i></a>
				</div>
			</div>			
			<!-- What people say -->
		


<?php
include('includes/footer.php');
?>