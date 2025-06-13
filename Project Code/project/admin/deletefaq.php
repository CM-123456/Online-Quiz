<?php
	include "connection.php";
	$faqid=$_REQUEST['faqid'];
	$q="delete from faq_tbl where fa_id='$faqid'";
	$c=mysqli_query($con,$q);
	if($c)
	{
		?>
		<script>
			alert('Record Deleted Successfully...');
			window.location="viewfaq.php";
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
