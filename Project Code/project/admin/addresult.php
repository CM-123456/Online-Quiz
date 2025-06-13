<?php 
	include"header.php";
	if(isset($_POST['btnok']))
	{ 
		$sl=$_POST['sllanguage'];
		$slu=$_POST['slu'];
		$rt=$_POST['rtxt'];
		$rd=$_POST['rdtxt'];
		
		$q="INSERT into result_master values('','$sl','$slu','$rt','$rd')";
		$c=mysqli_query($con,$q);
		
		if($c)
		{
			?>
			<script>
				alert("Record Inserted Successfully");
				window.location="viewresult.php";
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
		<div class="agile-grids">
				<div class="col-md-14 charts-right">
					
					<div class="area-grids">
						
						<div id="graph4">
						   <div class="panel panel-widget forms-panel">
						<div class="forms">
							<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
								<div class="form-title">
									<b><h3>Add New Exam</h3></b>
								</div>
								<div class="form-body">
								<form action="#" method="post" enctype="multipart/form-data">
								
								
									<div class="form-group">
										<b>Select Language</b>
										<br/>
										<select name ="sllanguage">
											<option>Select Exam</option>
											<?php
												$q="select * from oq_examdetail";
												$c=mysqli_query($con,$q);
												while($r=mysqli_fetch_array($c))
												{
											?>
													<option value="<?php echo $r['e_id'];?>">
														<?php echo $r['title'];?>
													</option>
											<?php
												}
											?>
										</select>	
									</div>
									<div class="form-group">
										<b>Select User</b>
										<br/>
										<select name ="slu">
											<option>Select User</option>
											<?php
												$q="select * from user_registration";
												$c=mysqli_query($con,$q);
												while($r=mysqli_fetch_array($c))
												{
											?>
													<option value="<?php echo $r['u_id'];?>">
														<?php echo $r['u_name'];?>
													</option>
											<?php
												}
											?>
										</select>	
									</div>
									<div class="form-group"> 
										<b>Result</b> 
										<input type="text" name="rtxt" class="form-control" placeholder="enter result"> 
									</div>
									<div class="form-group"> 
										<b>Result Date</b> 
										<input type="text" name="rdtxt" class="form-control" placeholder="enter result date"> 
									</div>
									<div class="form-group"> 
										<button type="submit" name="btnok" class="hvr-icon-fade col-7" style="height:30px;width:150px">Insert</button>
										<button type="reset" name="btncl" class="hvr-icon-spin col-5" style="height:30px;width:150px">Cancel</button>	
									</div>
								</form>
								</div>
							</div>
							</div>
						</div>
					</div>
						</div>
					</div>
				
				</div>
				<div class="clen arfix"> </div>
			</div>
			<!-- footer -->
<?php
	include"footer.php";
?>