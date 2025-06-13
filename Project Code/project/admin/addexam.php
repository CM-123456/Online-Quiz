<?php 
	include"header.php";
	if(isset($_POST['btnok']))
	{
		$im=$_FILES['flimg']['name'];
		$sl=$_POST['sllanguage'];
		$title=$_POST['ttxt'];
		$mark=$_POST['tmtxt'];
		$que=$_POST['tqtxt'];
		$tt=$_POST['tttxt'];
		$ed=$_POST['edtxt'];
		$pqm=$_POST['pqmtxt'];
		
		$q="INSERT into oq_examdetail values('','$im','$sl','$title','$mark','$que','$tt','$ed','$pqm')";
		$c=mysqli_query($con,$q);
		
		if($c)
		{
			move_uploaded_file($_FILES['flimg']['tmp_name'],"upload/".$im);
			?>
			<script>
				alert("Record Inserted Successfully");
				window.location="viewexam.php";
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
										<label for="exampleInputFile">Exam Image</label> 
										<input type="file" name="flimg" id="exampleInputFile"> 
									</div>
									
									<div class="form-group">
										<b>Select Language</b>
										<br/>
										<select name ="sllanguage">
											<option>Select Language</option>
											<?php
												$q="select * from oq_category";
												$c=mysqli_query($con,$q);
												while($r=mysqli_fetch_array($c))
												{
											?>
													<option value="<?php echo $r['c_id'];?>">
														<?php echo $r['c_name'];?>
													</option>
											<?php
												}
											?>
										</select>	
									</div>
									<div class="form-group"> 
										<b>Title</b> 
										<input type="text" name="ttxt" class="form-control" id="exampleInputEmail1" placeholder="enter exam title"> 
									</div>
									<div class="form-group"> 
										<b>total_marks</b> 
										<input type="text" name="tmtxt" class="form-control" id="exampleInputEmail1" placeholder="enter exam total marks"> 
									</div>
									<div class="form-group"> 
										<b>total_questions</b> 
										<input type="text" name="tqtxt" class="form-control" id="exampleInputEmail1" placeholder="enter exam total questions"> 
									</div>
									<div class="form-group"> 
										<b>total time</b> 
										<input type="text" name="tttxt" class="form-control" id="exampleInputEmail1" placeholder="enter exam total time in minutes"> 
									</div>
									<div class="form-group"> 
										<b>exam date</b> 
										<input type="text" name="edtxt" class="form-control" id="exampleInputEmail1" placeholder="enter exam date"> 
									</div>
									<div class="form-group"> 
										<b>per_que_mark</b> 
										<input type="text" name="pqmtxt" class="form-control" id="exampleInputEmail1" placeholder="enter exam per questions marks"> 
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