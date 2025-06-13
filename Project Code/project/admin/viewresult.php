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
					 Result Listing
					 <a href="addresult.php" style="float:right"><b style="font-size:15px">Add New Result</b></a>	
					 </h3>
					    <table id="table">
						<thead>
						  <tr>
							<th>r_id</th>
							<th>e_id</th>
							<th>u_id</th>
							<th>result</th>
							<th>r_date</th>
							<th>action</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							$q="Select * from result_master";
							$c=mysqli_query($con,$q);
							while($r=mysqli_fetch_array($c))
						{
						?>
						  <tr>
							<td><?php echo $r['r_id'];?></td>
							<td>
								<?php
									$eid=$r['e_id'];
									$qq="Select * from oq_examdetail where e_id='$eid'";
									$cc=mysqli_query($con,$qq);
									while($rr=mysqli_fetch_array($cc))
									{
										echo $rr['title'];
									}
								?>
							</td>
							<td>
								<?php
									$uid=$r['u_id'];
									$qq="Select * from user_registration where u_id='$uid'";
									$cc=mysqli_query($con,$qq);
									while($rr=mysqli_fetch_array($cc))
									{
										echo $rr['u_name'];
									}
								?>
							</td>
							<td><?php echo $r['result'];?></td>
							<td><?php echo $r['r_date'];?></td>
							<td>
								<a href="editresult.php?rid=<?php echo $r['r_id'];?>">
									<i class="fa fa-edit" style="transform : scale(1.50,1.50); color:green"></i>
								</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
								<a onclick="return confirm('Are you sure you want to delete this record')" href="deleteresult.php?rid=<?php echo $r['r_id'];?>">
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