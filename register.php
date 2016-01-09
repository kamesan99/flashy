<?php
header("Content-Type: text/html;charset=utf-8");
require_once ('includes/header.php');
require_once 'class.user.php';

$reg_user = new USER();

if (isset($_GET['needed_login_error']))
{ ?>
	<div class="alert alert-warning alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-close"></i></button>
	You need to be registered &amp; logged in to create flashcards.
	</div>
<?php } ?>

<?php
if(isset($_POST['btn-signup']))
{
	$uname = trim($_POST['txtuname']);
	$email = trim($_POST['txtemail']);
	$upass = trim($_POST['txtpass']);
	$code = md5(uniqid(rand()));
	
	$stmt = $reg_user->runQuery("SELECT * FROM tbl_users WHERE userEmail=:email_id");
	$stmt->execute(array(":email_id"=>$email));
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if($stmt->rowCount() > 0)
	{
		$msg = "
		      <div class='alert alert-error'>
				<button class='close' data-dismiss='alert'>&times;</button>
					<strong>Sorry !</strong>  email allready exists , Please Try another one
			  </div>
			  ";
	}
	else
	{
		if($reg_user->register($uname,$email,$upass,$code))
		{			
			$id = $reg_user->lasdID();		
			$key = base64_encode($id);
			$id = $key;
			
			$message = "					
						Hello $uname,
						<br /><br />
						Welcome to Coding Cage!<br/>
						To complete your registration  please , just click following link<br/>
						<br /><br />
						<a href='http://www.SITEURL.com/verify.php?id=$id&code=$code'>Click HERE to Activate :)</a>
						<br /><br />
						Thanks,";
						
			$subject = "Confirm Registration";
						
			$reg_user->send_mail($email,$message,$subject);	
			$msg = "
					<div class='alert alert-success'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<strong>Success!</strong>  We've sent an email to $email.
                    Please click on the confirmation link in the email to create your account. 
			  		</div>
					";
		}
		else
		{
			echo "sorry , Query could no execute...";
		}		
	}
}

?>

</header>
		
		<!-- Main page -->
		<section>
			<div class="container">

				<?php if(isset($msg)) echo $msg;  ?>
			
				<!-- Account settings -->
				<div class="rst-register-settings">
				
					<form class="form-signin" method="post">
					
						<h2>Register</h2>	
						
						
						<input type="text" id="reg-name" class="text required" placeholder="Username" name="txtuname" required />
					
						<input type="text" id="reg-email" class="text required email" placeholder="Email address" name="txtemail" required />
					
						<input type="password" id="reg-password" class="text required" placeholder="Password" name="txtpass" required />
						
<!-- 						<input type="password" name="reg-repassword" id="reg-repassword" class="text required" placeholder="Confirm Password" /> -->
						
						
						<div class="text-center">
							<input type="submit" class="btn btn-primary" value="Register" type="submit" name="btn-signup"/>
							<p>Already have an Account? <a href="#">Sign In</a></p>
						</div>
						
					</form>
				</div>
				<!-- Account settings -->
				
			</div>



<?php
include('includes/footer.php');
?>