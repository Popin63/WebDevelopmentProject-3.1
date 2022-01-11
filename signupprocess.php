<?php
session_start();
require_once 'core/init.php';
	
	if(isset($_POST['signupbutton'])){
		$query1 = "SELECT * FROM members WHERE userName = '".$_POST['username']."'";

		$result1 = $db->query($query1);

		if(mysqli_num_rows($result1)>0){
			echo "<script type='text/javascript'>alert('User Name Taken Already');</script>";
		}
		else if($_POST['password'] == $_POST['cpassword']){
			$query = "INSERT INTO members(userName, firstName, lastName, Email, Password, Address, Phone)
					  Values ('".$_POST['username']."', '".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['email']."', '".md5($_POST['password'])."', '".$_POST['address']."', '".$_POST['phone']."')";
			$result1 = $db->query($query);

			$_SESSION['User']=$_POST['firstname'];
			header("location:index.php");
		}
		else{
			echo "<script type='text/javascript'>alert('Password Did Not Match');</script>";
			die();
		}
	}
?>