<?php 

	include"header.php";
		$eid=$_REQUEST['eid'];
		$q="select * from oq_examdetail where e_id='$eid'";
		$c=mysqli_query($con,$q);
		while($r=mysqli_fetch_array($c))
		{
			$cimg=$r['e_image'];
			$csl=$r['c_id'];
			$ct=$r['title'];
			$ctm=$r['total_marks'];
			$cque=$r['total_questions'];
			$ctt=$r['total_time'];
			$ced=$r['exam_date'];
			$cpqm=$r['per_que_mark'];
		}
	
	if(isset($_POST['btnok']))
	{
		if($_FILES['flimg']['name']!="")
		{
			$im=$_FILES['flimg']['name'];
		}
		else
		{
			$im=$cimg;
		}
		$sl=$_POST['sllanguage'];
		$title=$_POST['ttxt'];
		$mark=$_POST['tmtxt'];
		$que=$_POST['tqtxt'];
		$tt=$_POST['tttxt'];
		$ed=$_POST['edtxt'];
		$pqm=$_POST['pqmtxt'];
		
		$q="UPDATE oq_examdetail set e_image='$im',c_id='$sl',title='$title',total_marks='$mark',
		total_questions='$que',total_time='$tt',exam_date='$ed',per_que_mark='$pqm' where e_id='$eid'";
		$c=mysqli_query($con,$q);
		
		if($c)
		{
			move_uploaded_file($_FILES['flimg']['tmp_name'],"upload/".$im);
			?>
			<script>
				alert("Record Updated Successfully");
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
									<b><h3>Edit Exam</h3></b>
								</div>
								<div class="form-body">
								<form action="#" method="post" enctype="multipart/form-data">
								
								
									<div class="form-group"> 
										<label for="exampleInputFile">Exam Image</label>
											<img src="upload/<?php echo $cimg;?>" height=100 width=100/>
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
													if($r['c_id']==$csl)
													{
														?>
															<option value="<?php echo $r['c_id'];?>" selected>
																<?php echo $r['c_name'];?>
															</option>														
														<?php
													}
													else
													{
														?>
														<option value="<?php echo $r['c_id'];?>">
															<?php echo $r['c_name'];?>
														</option>
														<?php

													}
												}
											?>
										</select>	
									</div>
									<div class="form-group"> 
										<b>Title</b> 
										<input type="text" name="ttxt" value="<?php echo $ct; ?>" class="form-control"  placeholder="enter exam title"> 
									</div>
									<div class="form-group"> 
										<b>total_marks</b> 
										<input type="text" name="tmtxt" value="<?php echo $ctm;?>" class="form-control"  placeholder="enter exam total marks"> 
									</div>
									<div class="form-group"> 
										<b>total_questions</b> 
										<input type="text" name="tqtxt" value="<?php echo $cque;?>" class="form-control" placeholder="enter exam total questions"> 
									</div>
									<div class="form-group"> 
										<b>total time</b> 
										<input type="text" name="tttxt" value="<?php echo $ctt;?>" class="form-control" placeholder="enter exam total time in minutes"> 
									</div>
									<div class="form-group"> 
										<b>exam date</b> 
										<input type="text" name="edtxt" value="<?php echo $ced;?>" class="form-control" placeholder="enter exam date"> 
									</div>
									<div class="form-group"> 
										<b>per_que_mark</b> 
										<input type="text" name="pqmtxt" value="<?php echo $cpqm;?>" class="form-control" placeholder="enter exam per questions maeks"> 
									</div>
									<div class="form-group"> 
										<button type="submit" name="btnok" class="hvr-icon-fade col-7" style="height:30px;width:150px">Update</button>
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