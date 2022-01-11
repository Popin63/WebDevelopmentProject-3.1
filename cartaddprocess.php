<?php
session_start();
require_once 'core/init.php';
	
	if(isset($_POST['submitbutton'])){
			if(isset($_SESSION['User'])){
				if($_POST['quantity']>0){
					$query = "INSERT INTO orders(userName, bookid, quantity)
							  Values ('".$_SESSION['User']."', '".$_GET['id']."', '".$_POST['quantity']."')";
					$result1 = $db->query($query);
					header("location:products.php");
					echo "<script type='text/javascript'>alert('Product Added To Cart Successfully');</script>";
				}
				else{
					echo "<script type='text/javascript'>alert('Incorrect Quantity!');</script>";
				}
				
		    }else{
		    	header("location:login.php");
		    }
	}
?>