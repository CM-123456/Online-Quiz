<?php
	include "connection.php";
	$eid=$_REQUEST['eid'];
	$q="delete from oq_examdetail where e_id='$eid'";
	$c=mysqli_query($con,$q);
	if($c)
	{
		?>
		<script>
			alert('Record Deleted Successfully...');
			window.location="viewexam.php";
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
