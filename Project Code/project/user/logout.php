<?php
	session_start();
	unset($_SESSION['user']);
	unset($_SESSION['user_id']);
?>

	<script>
		alert('You have Successfully Logout...');
		window.location="login.php";
	</script>