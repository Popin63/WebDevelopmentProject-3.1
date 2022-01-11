<?php
session_start();
require_once 'core/init.php';
	
	if(isset($_POST['passresetbutton'])){
		$query1 = "SELECT * FROM members WHERE userName = '".$_POST['username']."'";

		$result1 = $db->query($query1);
		$parent = mysqli_fetch_assoc($result1);

		$newpass = password_generate(8);
		$newpass1 = md5($newpass);

		$msg = "Your new Password is '".$newpass."'. (Without the quotes). Please Log in and Update it asap.";
		$msg = wordwrap($msg, 70);

		$query2 = "UPDATE members SET Password='".$newpass1."' WHERE userName='".$_POST['username']."'";
		$result2 = $db->query($query2);

		mail($parent['Email'], "Changed Password", $msg);
		echo "Mail Sent";
		echo $parent['Email'];
	}

	function password_generate($chars){
		$data='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		return substr(str_shuffle($data), 0, $chars);
	}

?>