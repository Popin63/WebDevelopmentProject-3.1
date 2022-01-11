<?php
session_start();
require_once 'core/init.php';
	
	if(isset($_GET['id'])){
			echo $_GET['id'];
			$query = "DELETE FROM orders WHERE id='".$_SESSION['User']."'";
			$result1 = $db->query($query);
			//header("location:cart.php");
			echo "<script type='text/javascript'>alert('Product Deleted From Cart Successfully');</script>";
	}
?>