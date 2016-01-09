<?php
$memberOnly = true;
include('includes/header.php');

if(isset($_GET['saved']))
{ ?>
	<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
	Your Flashcard deck has been successfully saved, congrats!
	</div>
<?php } 

else if (isset($_GET['error']))
{ ?>
	<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
	Hmm...something went wrong :-(
	</div>
<?php } ?>


				
			</div>
			<!-- Header banner -->
			
		</header>
		<!-- Header -->
		
		<!-- Main page -->
		<section>
			<div class="container">
			
				<!-- Account settings -->
				<div class="rst-account-settings">
				
					<form method='post' action='save-deck.php'>
						
						<h2>Create Flashcard Deck</h2>	
		
						<div class="rst-input-field">
							<label for="deck-title">Title</label>
							<input type="text" name="deck-title" id="deck-title" class="text required" />
						</div>
						<div class="rst-input-field">
							<label for="deck-description">Description</label>
							<input type="text" name="deck-description" id="deck-description" class="text required" />
						</div>
						<div class="s2-docs-container">
						  <select class="js-states form-control" name='topic_id'>
						    <option data-hidden="true">Choose Topic</option>
						    <?php echo $decks->showTopics(); ?>
						  </select>
						</div>
						
						<h2>Add Flashcards</h2>	

						<div class="col-sm-12 field_wrapper">
							<div class="col-sm-6 rst-input-field">
							<label for="acc-password">Front</label>
							<input type="text" name="rows[0][front]" id="card-front" class="text required" />
							</div>
							<div class="col-sm-6 rst-input-field">
							<label for="acc-repassword">Back</label>
							<input type="text" name="rows[0][back]" id="card-back" class="text required" />
							</div>
						</div>
						<a href="javascript:void(0);" class="add_button" title="Add field"><img src="images/add-icon.png"/></a>

						<div class="text-center">
							<input type="submit" class="btn btn-primary" value="Save" name="btn-save" />
						</div>
						
					</form>
				</div>
				<!-- Account settings -->
				
			</div>



<?php
include('includes/footer.php');
?>