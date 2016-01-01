<?php
include('includes/header.php');

if(isset($_POST['btn-save']))
{
	$front = $_POST['card-front'];
	$back = $_POST['card-back'];
	$cardId = '21238961';
	$userId = '1';
	$topic_id = '1';
	$title = $_POST['deck-title'];
	$description = $_POST['deck-description'];
	$decks->create($front, $back, $cardId, $userId, $topic_id, $title, $description);

	header("Location: add-fc.php?inserted");
}

else
	{
		header("Location: add-fc.php?failure");
	}

?>
				
			</div>
			<!-- Header banner -->
			
		</header>
		<!-- Header -->
		
		<!-- Main page -->
		<section>
			<div class="container">
			
				<!-- Account settings -->
				<div class="rst-account-settings">
				
					<form method='post'>
						
						<h2>Create Flashcard Deck</h2>	
		
						<div class="rst-input-field">
							<label for="deck-title">Title</label>
							<input type="text" name="deck-title" id="deck-title" class="text required" />
						</div>
						<div class="rst-input-field">
							<label for="deck-description">Description</label>
							<input type="text" name="deck-description" id="deck-description" class="text required" />
						</div>
						
						<h2>Flashcards</h2>	

						<div class="col-sm-12">
							<div class="col-sm-6 rst-input-field">
							<label for="acc-password">Front</label>
							<input type="text" name="card-front" id="card-front" class="text required" />
							</div>
							<div class="col-sm-6 rst-input-field">
							<label for="acc-repassword">Back</label>
							<input type="text" name="card-back" id="card-front" class="text required" />
							</div>
						</div>
						
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