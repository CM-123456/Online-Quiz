<?php 
include "header.php";
	
	
		$cid=$_REQUEST['cid'];
		$q="select * from oq_category where c_id='$cid'";
		$c=mysqli_query($con,$q);
		while($r=mysqli_fetch_array($c))
		{
			$cnm=$r['c_name'];
			$cimg=$r['c_image'];
		}
	
if(isset($_POST['btnok']))
{
		$nm=$_POST['nmtxt'];
		if($_FILES['flimg']['name']!="")
		{
			$im=$_FILES['flimg']['name'];
		}
		else
		{
			$im=$cimg;
		}
		$q="UPDATE oq_category set c_name='$nm',c_image='$im' where c_id='$cid'";
		$c=mysqli_query($con,$q);
		if($c)
		{
			move_uploaded_file($_FILES['flimg']['tmp_name'],"upload/".$im);
			?>
				<script>
					alert("Record Updated Successfully");
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
									<h3>Edit Category</h3>
								</div>
								<div class="form-body">
								<form action="#" method="post" enctype="multipart/form-data">
								
								
								
									<div class="form-group"> 
										<label for="exampleInputEmail1">Category Name</label> 
										<input type="text" name="nmtxt" value="<?php echo $cnm;?>" class="form-control" id="exampleInputEmail1" placeholder="Enter Ctegory Name"> 
									</div>
									
									<div class="form-group"> 
										<label for="exampleInputFile">Category Image</label>
											<img src="upload/<?php echo $cimg;?>" height=100 width=100/>
										<input type="file" name="flimg" id="exampleInputFile"> 
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
				<div class="clen arfix"> </div>
			</div>
			<!-- footer -->
		
		</div>
		<?php
		include"footer.php";
		?>