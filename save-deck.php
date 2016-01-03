<?php
session_start();
require_once 'class.user.php';
require_once 'dbconfig.php';
require_once 'class.crud.php';

$decks = new FlashCard();
$user_login = new USER();

if(isset($_POST['btn-save']) && isset($_SESSION['userSession']))
{
	$post_count = count($_POST['card-front']);
	$rows = $_POST['rows'];
/*	$front = $_POST['card-front'];
	$back = $_POST['card-back'];*/
	$userId = $_SESSION['userSession'];
	$title = $_POST['deck-title'];
	$description = $_POST['deck-description'];
	$topic_id = $_POST['topic_id'];
	$decks->create($post_count, $front, $back, $userId, $topic_id, $title, $description);
	$user_login->redirect('add-fc.php?saved?count='.$post_count);
/*	}
	else
	{
	$user_login->redirect('add-fc.php?error');
	}*/

/*	header("Location: add-fc.php?inserted");*/
}
else 
{
$user_login->redirect('add-fc.php?error');
}

/*else
	{
		header("Location: add-fc.php?failure");
	}*/

?>
