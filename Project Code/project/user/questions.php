<?php
	
	include "header.php";
	$eid=$_REQUEST['eid'];
	
	if(isset($_POST['btnok']))
	{
		
		$q="Select * from question_master where e_id='$eid'";
		$c=mysqli_query($con,$q);
		$uid=$_SESSION['user_id'];
		$result=0;
		while($r=mysqli_fetch_array($c))
		{
			$qid=$r['q_id'];
			$ans=$_POST[$qid];
			if($ans==$r['answer'])
			{
				$result++;
			}
		}
		
		$dt=date("d-m-Y");
		$qq="INSERT into result_master values('','$eid','$uid','$result','$dt')";
		$cc=mysqli_query($con,$qq);
		if($cc)
		{
			?>
			<script>
				alert("Your Answer Saved Succssfully");
				window.location="result.php";
			</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert("Something is wrong....please try again");
			</script>
			<?php
		}
		
	}
?>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

<link href="css/rd.css" rel="stylesheet">
<!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h4 class="display-4 text-white text-uppercase">exam</h4>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Questions</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
	
	<b style="float:right"><script>
	<?php
		
		$q="Select * from oq_examdetail where e_id='$eid'";
		$c=mysqli_query($con,$q);
		while($r=mysqli_fetch_array($c))
		{
			$a=$r['total_time'];
		}
	?>
	var time=<?php echo $a ;?>;
	setInterval(function() {
	  var seconds = time % 60;
	  var minutes = (time - seconds) / 60;
	  if (seconds.toString().length == 1) {
		seconds = "0" + seconds;
	  }
	  if (minutes.toString().length == 1) {
		minutes = "0" + minutes;
	  }
	  document.getElementById("time").innerHTML = minutes + ":" + seconds;
	  time--;
	  if (time == 0) {
		window.location = "result.php";
	  }
	}, 1000);
</script></b>
<div class="timer" onload="timer(300)">
 
  <div class="time">
    <h3 style="float:right"><strong>Time left: <span id="time">Loading...</span></strong></h3>
  </div>
</div>

	<div class="container-fluid py-2">
        <div class="container py-2">
			<div class="row">
				<div class="col-lg-12">
                    <div class="row pb-3">
						<div>
							<form action="#" method="post">
								<?php 
									$q="Select * from question_master where e_id='$eid'";
									$c=mysqli_query($con,$q);
									$cc=1;
									while($r=mysqli_fetch_array($c))
									{
										?>
										<br/>
											<h4>Que-<?php echo $cc."&nbsp;&nbsp;&nbsp;&nbsp;". $r['question']; ?></h4><br/>
						<table width=70%>
								<tr>
									<td width=70>
										<b class="circle" align="center">A</b>
									</td>
									<td>
										<input type="radio" name="<?php echo $r['q_id'];?>" value="A" checked="checked" id="<?php echo $r['option1'];?>"/>
										<label for="<?php echo $r['option1'];?>">
											<?php echo $r['option1'];?>
										</label>
									</td>
								</tr>
								<tr>
									<td width=70>
										<b class="circle" align="center">B</b>
									</td>
									<td>
									<input type="radio" name="<?php echo $r['q_id'];?>" value="B" id="<?php echo $r['option2'];?>"/> 
									<label for="<?php echo $r['option2'];?>">
										<?php echo $r['option2'];?>
									</label>
									</td>
								</tr>
								<tr>
									<td width=70>
										<b class="circle" align="center">C</b>
									</td>
									<td>
										<input type="radio" name="<?php echo $r['q_id'];?>" value="C" id="<?php echo $r['option3'];?>"/>
										<label for="<?php echo $r['option3'];?>">
											<?php echo $r['option3'];?>
										</label>
									</td>
								</tr>
								<tr>
									<td width=70>
										<b class="circle" align="center">D</b>
									</td>
									<td>
										<input type="radio" name="<?php echo $r['q_id'];?>" value="D" id="<?php echo $r['option4'];?>"/> 
										<label for="<?php echo $r['option4'];?>">
											<?php echo $r['option4'];?>
										</label>
									</td>
								</tr>
							</table>
								
								<?php
									$cc++;
									}
									
								?>
								<div class="text-center">
									<button class="btn btn-primary py-3 px-5" type="submit" name="btnok" id="sendMessageButton">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	include"footer.php";
?>