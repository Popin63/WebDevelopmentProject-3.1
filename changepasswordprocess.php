<?php
	session_start();
	require_once 'core/init.php';
	if(isset($_POST['updatebutton'])){

		if($_POST['npassword'] == $_POST['cpassword']){
				$query = "UPDATE members 	
						  SET Password='".md5($_POST['npassword'])."'
						  WHERE userName = '".$_SESSION['User']."'";
		        $result = mysqli_query($db, $query);
		        header("location: myaccount.php");
		    }
			else{
				echo "<script type='text/javascript'>alert('Passwords did not match');</script>";
			}

	}
		
?>