<?php
	include "connection.php";
	$fid=$_REQUEST['fid'];
	$q="delete from oq_feedback where f_id='$fid'";
	$c=mysqli_query($con,$q);
	if($c)
	{
		?>
		<script>
			alert('Record Deleted Successfully...');
			window.location="viewfeedback.php";
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
