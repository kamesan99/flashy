<?php
include('includes/header.php');
?>
				
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
								<li><a href="about.html">About</a></li>
								<li><a href="flashcards.php">Flashcards</a></li>
<!-- 								<li>
									<a href="#">Pages</a>
									<ul>
										<li><a href="prices.html">Prices</a></li>
										<li><a href="category.html">Category</a></li>
										<li><a href="shortcodes.html">Shortcodes</a></li>
										<li><a href="faq.html">FAQs</a></li>
									</ul>
								</li> -->
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
			
			<!-- What we have -->
			<div id="rst-home-whatwehave" class="wpb_row">
				<div class="container">
					<div class="rst-group-title text-center">
						<span>About</span>
						<h3>What We Have?</h3>
						<p>Duis mattis semper risus sit amet porttitor turpis egestas vitae</p>
					</div>
					<div>
						<div class="rst-home-whatwehave text-center wow animated slideInLeft">
							<div class="rst-borderdashed">
								<i class="pe-7s-search"></i>
							</div>
							<h5>Find Your article</h5>
							<p>Duis posuere nec libero efficitur maecenas ut aliquam augue dapibus elit nullam eleifend odio aliquam gravida mauris.</p>
						</div>
						<div class="rst-home-whatwehave text-center ">
							<div class="rst-borderdashed">
								<i class="pe-7s-note2"></i>
							</div>
							<h5>Knowledge Base</h5>
							<p>Duis posuere nec libero efficitur maecenas ut aliquam augue dapibus elit nullam eleifend odio aliquam gravida mauris.</p>
						</div>
						<div class="rst-home-whatwehave text-center wow animated slideInRight">
							<div class="rst-borderdashed ">
								<i class="pe-7s-wallet "></i>
							</div>
							<h5>Easy Payment</h5>
							<p>Duis posuere nec libero efficitur maecenas ut aliquam augue dapibus elit nullam eleifend odio aliquam gravida mauris.</p>
						</div>
					</div>
				</div>
				<div class="rst-scroll-down text-center">
					<a href="#"><i class="fa fa-arrow-down"></i></a>
				</div>
			</div>
			<!-- What we have -->
			
			<!-- Support products -->
			<div id="rst-support-products" class="wpb_row">
				<div class="container">
					<div class="rst-group-title text-center">
						<span>helpdesk</span>
						<h3>Support Products</h3>
						<p>Duis mattis semper risus sit amet porttitor turpis egestas vitae</p>
					</div>
					
					<!-- Support products slider -->
					<div class="owl-carousel rst-whatwehave-owl rst-home-sp-products-owl">
						<div class="row">
							<div class="col-sm-4">
								<div class="rst-product-box rst-product-box-2">
									<div class="rst-box-image">
										<img src="http://placehold.it/370x183" alt="" />
										<div class="rst-box-overlay ">
											<a class="btn btn-primary" href="#">support now</a>
										</div>
									</div>
									<div class="rst-box-data">
										<span>Psd</span>
										<h4><a href="product-single.html">Run road</a></h4>
										<div class="rst-box-metadata">
											<p>Duis egestas orci eros venenatis tincidunt nulla sagittis suspendisse vitae facilisis erat integer dictum imperdiet.</p>
											<img src="http://placehold.it/299x299" alt="" />
											<span>Updated 1 day ago</span>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="rst-product-box rst-product-box-2">
									<div class="rst-box-image">
										<img src="http://placehold.it/370x183" alt="" />
										<div class="rst-box-overlay ">
											<a class="btn btn-primary" href="#">support now</a>
										</div>
									</div>
									<div class="rst-box-data">
										<span>Psd</span>
										<h4><a href="product-single.html">Run road</a></h4>
										<div class="rst-box-metadata">
											<p>Duis egestas orci eros venenatis tincidunt nulla sagittis suspendisse vitae facilisis erat integer dictum imperdiet.</p>
											<img src="http://placehold.it/299x299" alt="" />
											<span>Updated 1 day ago</span>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="rst-product-box rst-product-box-2">
									<div class="rst-box-image">
										<img src="http://placehold.it/370x183" alt="" />
										<div class="rst-box-overlay ">
											<a class="btn btn-primary" href="#">support now</a>
										</div>
									</div>
									<div class="rst-box-data">
										<span>Psd</span>
										<h4><a href="product-single.html">Run road</a></h4>
										<div class="rst-box-metadata">
											<p>Duis egestas orci eros venenatis tincidunt nulla sagittis suspendisse vitae facilisis erat integer dictum imperdiet.</p>
											<img src="http://placehold.it/299x299" alt="" />
											<span>Updated 1 day ago</span>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="rst-product-box rst-product-box-2">
									<div class="rst-box-image">
										<img src="http://placehold.it/370x183" alt="" />
										<div class="rst-box-overlay ">
											<a class="btn btn-primary" href="#">support now</a>
										</div>
									</div>
									<div class="rst-box-data">
										<span>Psd</span>
										<h4><a href="product-single.html">Run road</a></h4>
										<div class="rst-box-metadata">
											<p>Duis egestas orci eros venenatis tincidunt nulla sagittis suspendisse vitae facilisis erat integer dictum imperdiet.</p>
											<img src="http://placehold.it/299x299" alt="" />
											<span>Updated 1 day ago</span>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="rst-product-box rst-product-box-2">
									<div class="rst-box-image">
										<img src="http://placehold.it/370x183" alt="" />
										<div class="rst-box-overlay ">
											<a class="btn btn-primary" href="#">support now</a>
										</div>
									</div>
									<div class="rst-box-data">
										<span>Psd</span>
										<h4><a href="product-single.html">Run road</a></h4>
										<div class="rst-box-metadata">
											<p>Duis egestas orci eros venenatis tincidunt nulla sagittis suspendisse vitae facilisis erat integer dictum imperdiet.</p>
											<img src="http://placehold.it/299x299" alt="" />
											<span>Updated 1 day ago</span>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="rst-product-box rst-product-box-2">
									<div class="rst-box-image">
										<img src="http://placehold.it/370x183" alt="" />
										<div class="rst-box-overlay ">
											<a class="btn btn-primary" href="#">support now</a>
										</div>
									</div>
									<div class="rst-box-data">
										<span>Psd</span>
										<h4><a href="product-single.html">Run road</a></h4>
										<div class="rst-box-metadata">
											<p>Duis egestas orci eros venenatis tincidunt nulla sagittis suspendisse vitae facilisis erat integer dictum imperdiet.</p>
											<img src="http://placehold.it/299x299" alt="" />
											<span>Updated 1 day ago</span>
											<div class="clear"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Support products slider -->
					
				</div>
				<div class="rst-scroll-down text-center">
					<a href="#"><i class="fa fa-arrow-down"></i></a>
				</div>
			</div>
			<!-- Support products -->
			
			<!-- Who we are -->
			<div id="rst-home-whoweare" class="wpb_row">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<div class="rst-group-title text-left wow animated slideInLeft">
								<span>Story</span>
								<h3>Who We Are?</h3>
								<p>Duis ut velit tincidunt, pretium augue et pharetra tellus nulla vulputate feugiat pulvinar nunc non facilisis ex vivamus hendrerit mi ut metus maximus eu pellentesque.</p>
							</div>
							<a href="#" class="btn">read more</a>
						</div>
						<div class="col-sm-6 wow animated zoomIn">
							<img src="http://placehold.it/590x607" alt="" />
						</div>
					</div>
				</div>
				<div class="rst-scroll-down text-center">
					<a href="#"><i class="fa fa-arrow-down"></i></a>
				</div>
			</div>
			<!-- Who we are -->
			
			<!-- What about -->
			<div id="rst-home-whatabout" class="wpb_row">
				<div class="container">
					<div class="rst-group-title text-center">
						<span>Fun fact</span>
						<h3>What About?</h3>
						<p>Duis mattis semper risus sit amet porttitor turpis egestas vitae</p>
					</div>
					<div class="rst-home-funfacts clearfix">
						<div class="rst-funfact">
							<span class="rst-funnumber counter">10,000</span>
							<div class="rst-funfact-line"></div>
							<h5>Articles</h5>
						</div>
						<div class="rst-funfact">
							<span class="rst-funnumber counter">1,300,000</span>
							<div class="rst-funfact-line"></div>
							<h5>Register users</h5>
						</div>
						<div class="rst-funfact">
							<span class="rst-funnumber counter">3,000</span>
							<div class="rst-funfact-line"></div>
							<h5>agencies</h5>
						</div>
					</div>
				</div>
				<div class="rst-scroll-down text-center">
					<a href="#"><i class="fa fa-arrow-down"></i></a>
				</div>
			</div>
			<!-- What about -->
			
			<!-- Live chat -->
			<div id="rst-home-livechat" class="wpb_row">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 wow animated slideInLeft">
							<img src="http://placehold.it/516x808" alt="" />
						</div>
						<div class="col-sm-6 wow animated slideInRight">
							<div class="rst-group-title text-left">
								<span>Support</span>
								<h3>Start Live Chat</h3>
								<p>Duis ut velit tincidunt, pretium augue et pharetra tellus nulla vulputate feugiat pulvinar nunc non facilisis ex vivamus hendrerit mi ut metus maximus eu pellentesque.</p>
							</div>
							<a href="#" class="btn btn-primary">Support now</a>
						</div>
					</div>
				</div>
				<div class="rst-scroll-down text-center">
					<a href="#"><i class="fa fa-arrow-down"></i></a>
				</div>
			</div>
			<!-- Live chat -->
			
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
			
			<!-- Knowledge Base -->
			<div id="rst-knowledgebase" class="wpb_row">
				<div class="container">
					<div class="rst-group-title text-center">
						<span>helpdesk</span>
						<h3>Knowledge Base</h3>
						<p>Duis mattis semper risus sit amet porttitor turpis egestas vitae</p>
					</div>
				
					<div class="row">
						<div class="col-sm-4">
							<div class="rst-knowledgebase wow animated slideInUp">
								<span class="rst-knowledge-number">01 <b>.</b></span>
								<span>design</span>
								<h5>This is article headline</h5>
								<p>Duis ut velit tincidunt pretium augue et pharetra tellus nulla vulputate feugiat pulvinar nunc non facilisis ex vivamus hendrerit mi ut metus maximus.</p>
								<a href="#" class="btn">read more</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="rst-knowledgebase wow animated slideInUp">
								<span class="rst-knowledge-number">02<b>.</b></span>
								<span>design</span>
								<h5>This is article headline</h5>
								<p>Duis ut velit tincidunt pretium augue et pharetra tellus nulla vulputate feugiat pulvinar nunc non facilisis ex vivamus hendrerit mi ut metus maximus.</p>
								<a href="#" class="btn">read more</a>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="rst-knowledgebase wow animated slideInUp">
								<span class="rst-knowledge-number">03<b>.</b></span>
								<span>design</span>
								<h5>This is article headline</h5>
								<p>Duis ut velit tincidunt pretium augue et pharetra tellus nulla vulputate feugiat pulvinar nunc non facilisis ex vivamus hendrerit mi ut metus maximus.</p>
								<a href="#" class="btn">read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Knowledge Base -->



<?php
include('includes/footer.php');
?>