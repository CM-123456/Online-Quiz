<?php
	include"header.php";
?>
		<div class="main-grid">
			 
			<div class="agile-grids">
				<div class="col-md-14 charts-right">
					<!-- chart -->
					<div class="area-grids">
						<div class="area-grids-heading" align="center">
							<!-- table -->
					<div class="area-grids">
						<div class="area-grids-heading">
							<div class="w3l-table-info">
					  <h3>
						  Category Listing
						   <a href="addcategory.php" style="float:right"><b style="font-size:15px">Add New Category</b></a>	
						</h3>   
						   <table id="table">
						<thead>
						  <tr>
							<th>c_id</th>
							<th>Name</th>
							<th>c_image</th>
							<th>Action</th>
						  </tr>
						</thead>
						<tbody>
						<?php
							$q="Select * from oq_category";
							$c=mysqli_query($con,$q);
							while($r=mysqli_fetch_array($c))
							{
						?>
						  <tr>
							<td><?php echo $r['c_id'];?></td>
							<td><?php echo $r['c_name'];?></td>
							<td>
							<img alt="Image Not Found" src="upload/<?php echo $r['c_image'];?>"
							height=80 width=80/>
							</td>
							<td>
								<a href="editcategory.php?cid=<?php echo $r['c_id'];?>">
									<i class="fa fa-edit" style="transform : scale(1.50,1.50); color:green"></i>
								</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
								<a onclick="return confirm('Are you sure you want to delete this record')" href="deletecategory.php?cid=<?php echo $r['c_id'];?>">
									<i class="fa fa-trash-o" style="transform : scale(1.50,1.50); color:red"></i>
								</a>
							</td>
						  </tr>
						 <?php
							}
						 ?>
						  </tbody>
					  </table>
					</div>
						</div>
						<div id="graph4"></div>
						</div>
						</div>
						<div id="graph4"></div>
						</div>
					<!-- //chart -->
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- footer -->
		
		</div>
<?php
	include"footer.php";
?>