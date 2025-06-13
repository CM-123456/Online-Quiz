<?php 
include "header.php";
	
if(isset($_POST['btnok']))
{
		$nm=$_POST['nmtxt'];
		$im=$_FILES['flimg']['name'];
		
		$q="INSERT into oq_category values('','$nm','$im')";
		$c=mysqli_query($con,$q);
		if($c)
		{
			move_uploaded_file($_FILES['flimg']['tmp_name'],"upload/".$im);
			?>
				<script>
					alert("Record Inserted Successfully");
					window.location="viewcategory.php";
				</script>
			<?php
		}
		else
		{
			?>
				<script>
					alert("Something Goes Wrong.....Please try again");
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
									<h3>Add New Category</h3>
								</div>
								<div class="form-body">
								<form action="#" method="post" enctype="multipart/form-data">
								
									<div class="form-group"> 
										<label for="exampleInputEmail1">Category Name</label> 
										<input type="text" name="nmtxt" class="form-control" id="exampleInputEmail1" placeholder="Enter Category Name"> 
									</div>
									
									<div class="form-group"> 
										<label for="exampleInputFile">Category Image</label> 
										<input type="file" name="flimg" id="exampleInputFile"> 
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
				<div class="clen arfix"> </div>
			</div>
			<!-- footer -->
		
		</div>
		<?php
		include"footer.php";
		?>