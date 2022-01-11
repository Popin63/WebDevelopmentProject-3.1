<?php
	session_start();
	require_once 'core/init.php';
	if(isset($_POST['updatebutton'])){

		$query1 = "SELECT * FROM members WHERE userName = '".$_SESSION['User']."'";
		$result1 = mysqli_query($db, $query1);
		$pass = mysqli_fetch_assoc($result1);

		if($_POST['password'] == $_POST['cpassword']){
			if(md5($_POST['password']) == $pass['Password']){
				$query = "UPDATE members 	
						  SET firstName='".$_POST['firstname']."',
						  	  lastName='".$_POST['lastname']."',
						  	  Email='".$_POST['email']."',
						  	  Address='".$_POST['address']."',
						  	  Phone= '".$_POST['phone']."'
						  WHERE userName = '".$_SESSION['User']."'";
		        $result = mysqli_query($db, $query);
		        header("location: myaccount.php");
			}
			else{
				echo "<script type='text/javascript'>alert('Wrong password');</script>";
			}
		}
		else{
			echo "<script type='text/javascript'>alert('Please enter correct username or password');</script>";
		}

	}
	if(isset($_POST['passwordchangebutton'])){
		header("location: changepassword.php");
	}
		
?>