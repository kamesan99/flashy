<?php

require_once 'dbconfig.php';

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function lasdID()
	{
		$stmt = $this->conn->lastInsertId();
		return $stmt;
	}
	
	public function register($uname,$email,$upass,$code)
	{
		try
		{							
			$password = md5($upass);
			$stmt = $this->conn->prepare("INSERT INTO tbl_users(userName,userEmail,userPass,tokenCode) 
			                                             VALUES(:user_name, :user_mail, :user_pass, :active_code)");
			$stmt->bindparam(":user_name",$uname);
			$stmt->bindparam(":user_mail",$email);
			$stmt->bindparam(":user_pass",$password);
			$stmt->bindparam(":active_code",$code);
			$stmt->execute();	
			return $stmt;
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}
	
	public function login($email,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM tbl_users WHERE userEmail=:email_id");
			$stmt->execute(array(":email_id"=>$email));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			
			if($stmt->rowCount() == 1)
			{
				if($userRow['userStatus']=="Y")
				{
					if($userRow['userPass']==md5($upass))
					{
						$_SESSION['userSession'] = $userRow['userID'];
						return true;
					}
					else
					{
						header("Location: index.php?error");
						exit;
					}
				}
				else
				{
					header("Location: index.php?inactive");
					exit;
				}	
			}
			else
			{
				header("Location: index.php?login_error");
				exit;
			}		
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}
	
	
	public function is_logged_in()
	{
		if(isset($_SESSION['userSession']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}

	public function getMember($userID)
	{

	// Get all the member info 
	$query = "SELECT * FROM tbl_users WHERE userID=:ID LIMIT 1";
	$stmt = $this->conn->prepare($query);
	$stmt->bindparam(":ID",$userID);
	$stmt->execute();


	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$username = $row['userName'];
		$email = $row['userEmail'];
		$password = $row['userPass'];
	} 

	return array($username,$email,$password);

	}
	
	public function logout()
	{
		session_destroy();
		$_SESSION['userSession'] = false;
		header("Location: index.php?logout");
		exit;
	}
	
	function send_mail($email,$message,$subject)
	{						
		require 'mailer/PHPMailerAutoload.php';
		$mail = new PHPMailer();
		$mail->SMTPOptions = array(
    	'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    	)
    	);
    	$mail->CharSet =  "utf-8";
		$mail->IsSMTP(); 
		$mail->SMTPDebug  = 0;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "tls";                 
		$mail->Host       = "smtp.gmail.com";      
		$mail->Port       = "587";             
		$mail->AddAddress($email);
		$mail->Username="danieliseli@gmail.com";  
		$mail->Password="U1.MvwmF!";            
		$mail->SetFrom('danieliseli@gmail.com"','Coding Cage');
		$mail->AddReplyTo("you@yourdomain.com","Coding Cage");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->Send();
	}	
}