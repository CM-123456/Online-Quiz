<?php

	session_start();
	unset($_SESSION['admin'])
?>

	<script>
		alert('You have Successfully Logout...');
		window.location="login.php";
	</script>