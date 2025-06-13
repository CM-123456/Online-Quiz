<?php
	$con=mysqli_connect("localhost","root","","online quiz");
	$cid=$_REQUEST['cid'];
	$q="delete from oq_category where c_id='$cid'";
	$c=mysqli_query($con,$q);
	if($c)
	{
		?>
		<script>
			alert('Record Deleted Successfully...');
			window.location="viewcategory.php";
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
