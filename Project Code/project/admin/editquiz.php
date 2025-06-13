<?php 
	include"header.php";
	
		$qid=$_REQUEST['qid'];
		$q="select * from question_master where q_id='$qid'";
		$c=mysqli_query($con,$q);
		while($r=mysqli_fetch_array($c))
		{
			$csl=$r['e_id'];
			$cqu=$r['question'];
			$cop1=$r['option1'];
			$cop2=$r['option2'];
			$cop3=$r['option3'];
			$cop4=$r['option4'];
			$can=$r['answer'];
		}
	
	if(isset($_POST['btnok']))
	{
		$sl=$_POST['sllanguage'];
		$qu=$_POST['qutxt'];
		$op1=$_POST['op1txt'];
		$op2=$_POST['op2txt'];
		$op3=$_POST['op3txt'];
		$op4=$_POST['op4txt'];
		$an=$_POST['antxt'];
		
		$q="UPDATE question_master SET e_id='$sl',question='$qu',option1='$op1',option2='$op2',option3='$op3',option4='$op4',answer='$an' where q_id='$qid'";
		$c=mysqli_query($con,$q);
		
		if($c)
		{
			?>
			<script>
				alert("Record Updated Successfully");
				window.location="viewquiz.php";
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
									<b><h3>Edit Quiz</h3></b>
								</div>
								<div class="form-body">
								<form action="#" method="post">
								
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
													if($r['e_id']==$csl)
													{
														?>
															<option value="<?php echo $r['e_id'];?>" selected>
																<?php echo $r['title'];?>
															</option>														
														<?php
													}
													else
													{
														?>
														<option value="<?php echo $r['e_id'];?>">
															<?php echo $r['title'];?>
														</option>
														<?php
													}
												}
											?>
										</select>	
									</div>
									<div class="form-group"> 
										<b>Question</b> 
										<input type="text" name="qutxt" value="<?php echo $cqu;?>" class="form-control" id="exampleInputEmail1" placeholder="enter question"> 
									</div>
									<div class="form-group"> 
										<b>Option 1</b> 
										<input type="text" name="op1txt" value="<?php echo $cop1;?>" class="form-control" id="exampleInputEmail1" placeholder="enter option1"> 
									</div>
									<div class="form-group"> 
										<b>Option 2</b> 
										<input type="text" name="op2txt" value="<?php echo $cop2;?>" class="form-control" id="exampleInputEmail1" placeholder="enter option2"> 
									</div>
									<div class="form-group"> 
										<b>Option 3</b> 
										<input type="text" name="op3txt" value="<?php echo $cop3;?>" class="form-control" id="exampleInputEmail1" placeholder="enter option3"> 
									</div>
									<div class="form-group"> 
										<b>Option 4</b> 
										<input type="text" name="op4txt" value="<?php echo $cop4;?>" class="form-control" id="exampleInputEmail1" placeholder="enter option4"> 
									</div>
									<div class="form-group"> 
										<b>Answer</b> 
										<select name="antxt" Select>
											<option value=""selected>Select Options</option> 
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="C">C</option>
											<option value="D">D</option>
										</select>
									</div>
									<div class="form-group"> 
										<button type="submit" name="btnok" class="hvr-icon-fade col-7" style="height:30px;width:150px">Upate</button>
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