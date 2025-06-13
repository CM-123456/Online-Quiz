<?php
	include "connection.php";
	$aid=$_REQUEST['aid'];
	$q="delete from result_master where r_id='$aid'";
	$c=mysqli_query($con,$q);
	if($c)
	{
		?>
		<script>
			alert('Record Deleted Successfully...');
			window.location="applyanswer.php";
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert('Errorrr...please try again...');
		</script>
		<?php
	}
?>
