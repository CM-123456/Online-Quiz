<?php 
	include"header.php";

	if(isset($_POST['btnok']))
	{ 
		$fque=$_POST['fqtxt'];
		$fans=$_POST['fatxt'];
	
		$q="insert into faq_tbl values('','$fque','$fans')";
		$c=mysqli_query($con,$q);
		
		if($c)
		{
			?>
			<script>
				alert("Record Inserted Successfully");
				window.location="viewfaq.php";
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
									<b><h3>Add New FAQ</h3></b>
								</div>
								<div class="form-body">
								<form action="#" method="post">
									<div class="form-group"> 
										<b>FAQ QUESTION</b> 
										<input type="text" name="fqtxt" class="form-control" placeholder="enter FAQ's QUESTION?"> 
									</div>
									<div class="form-group"> 
										<b>FAQ ANSWER</b> 
										<input type="text" name="fatxt" class="form-control" placeholder="enter FAQ's ANSWER."> 
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
			
			<!-- footer -->
<?php
	include"footer.php";
?>