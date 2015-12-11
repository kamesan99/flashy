<?php
header("Content-Type: text/html;charset=utf-8");
include('includes/header.php');
require_once 'class.user.php';
?>

				
				<!-- Banner content -->
				<div class="rst-banner-content">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<div class="text-left">
									<h5>Search by topic</h5>	
									<h1>Flashcard database</h1>
								</div>
							</div>
							<div class="col-sm-6">
								<form action="flashcards.php?page=1" method="get" class="rst-search-form rst-search">
									<input type="text" placeholder="Search ..."  name="s" value="<?php if (isset($_GET['s'])) { echo $_GET['s']; } ?>">
									<button type="submit"  class="sb"><i class="fa fa-long-arrow-right"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Banner content -->
				
			</div>
			<!-- Header banner -->
			
		</header>
		<!-- Header -->
		
		<!-- Main page -->
		<section>
			
			<!-- Breadcrumb bar -->
			<div class="rst-breadcrumb-bar">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-lg-6">
							<p><b><?php echo $decks->countCardsTotal();?></b> Flashcards</p>
						</div>
						<div class="col-sm-12 col-lg-6">
							<ul class="breadcrumb">
								<li>
									<a href="index.html">Home</a>	
								</li>
								<li><span>Products</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Breadcrumb bar -->
			
			<!-- Single Content -->
			<div class="rst-post-container">
				<div class="container">
					
					<!-- Products -->
					<div role="tabpanel" class="rst-products-page-tabs">
						<!-- Nav tabs -->
<!-- 						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#tabs1-1" role="tab" data-toggle="tab">web design</a></li>
							<li role="presentation"><a href="#tabs1-2" role="tab" data-toggle="tab">dewelopment</a></li>
							<li role="presentation"><a href="#tabs1-3" role="tab" data-toggle="tab">optimization</a></li>
						</ul> -->
						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="tabs1-1">
								<div class="row">

								<?php
								if(isset($search_string))
								{
								$decks->showDecks($search_string);
								}
								?> 

					<!-- Products -->
					
					
				</div>
			</div>
			<!-- Single Content -->

<?php
include('includes/footer.php');
?>
