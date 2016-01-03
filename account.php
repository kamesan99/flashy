<?php
include('includes/header.php');

if(isset($_GET['login']))
{ ?>
	<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
	You have successfully logged in!
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
				
					<form action="account.html">
						
						<h2>Account</h2>	
						<div class="rst-account-avatar">
							<img class="img-circle" src="http://placehold.it/299x299" alt="" />
							<a href="#">CHANGE</a>
						</div>
						
						<div class="rst-input-field">
							<label for="acc-firstname">Username</label>
							<input type="text" name="acc-firstname" id="acc-firstname" class="text required" value="<?=$username; ?>" />
						</div>
						<div class="rst-input-field">
							<label for="acc-email">email name</label>
							<input type="text" name="acc-email" id="acc-email" class="text required email" value="<?=$email; ?>" />
						</div>
						
						<h2>Password</h2>	
						<div class="rst-input-field">
							<label for="acc-password">password</label>
							<input type="password" name="acc-password" id="acc-password" class="text required" />
						</div>
						<div class="rst-input-field">
							<label for="acc-repassword">repeat password</label>
							<input type="password" name="acc-repassword" id="acc-repassword" class="text required" />
						</div>
						
						<div class="rst-input-field">
							<input id="country" type="text" readonly="readonly">
						</div>
						
						<div class="text-center">
							<input type="submit" class="btn btn-primary" value="Save"/>
						</div>
						
					</form>
				</div>
				<!-- Account settings -->
				
			</div>



<?php
include('includes/footer.php');
?>