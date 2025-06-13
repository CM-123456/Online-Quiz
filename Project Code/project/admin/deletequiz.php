<?php
	include "connection.php";
	$qid=$_REQUEST['qid'];
	$q="delete from question_master where q_id='$qid'";
	$c=mysqli_query($con,$q);
	if($c)
	{
		?>
		<script>
			alert('Record Deleted Successfully...');
			window.location="viewquiz.php";
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
