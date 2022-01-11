<?php
session_start();
require_once 'core/init.php';
	
	if(isset($_POST['submitmessage'])){
		$query = "INSERT INTO message(userName, Email, Message)
					  Values ('".$_POST['full-name']."', '".$_POST['contact-email']."', '".$_POST['Message']."')";
			$result1 = $db->query($query);
			echo "<script type='text/javascript'>alert('Your Message has been submitted');</script>";
			//header("location:index.php");
	}