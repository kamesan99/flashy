<?php
require_once 'class.user.php';
require_once 'dbconfig.php';
require_once 'class.crud.php';
Session_start();
$user_login = new USER();
$user_login->logout();

?>