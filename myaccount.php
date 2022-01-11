<?php
	session_start();
	if(!isset($_SESSION['User']))
		header("location:index.php");
	require_once 'core/init.php';
	include 'includes/navbar.php';
	include 'includes/header.php';
?>

<?php
	include 'includes/myaccount.php';
?>

<?php
	include 'includes/footer.php';
?>