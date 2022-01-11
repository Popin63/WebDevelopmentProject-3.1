<?php
	session_start();
	require_once 'core/init.php';
	if(isset($_POST['loginbutton'])){
		$query = "SELECT * FROM members WHERE userName = '".$_POST['username']."' and Password = '".md5($_POST['password'])."'";
		$result = mysqli_query($db, $query);

		if(mysqli_fetch_assoc($result)){
			$_SESSION['User']=$_POST['username'];
			header("location:index.php");
			exit();
		}
		else{
			header("location: login.php");
			echo "<script type='text/javascript'>alert('Please enter correct username or password');</script>";
		}

	}
		
?>