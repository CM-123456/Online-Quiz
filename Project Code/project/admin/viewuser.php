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
					  <h3>Manage User Table</h3>
					    <table id="table">
						<thead>
						  <tr>
							<th>u_id</th>
							<th>u_name</th>
							<th>u_email</th>
							<th>u_password</th>
							<th>u_contact</th>
							<th>u_education</th>
							<th>action</th>
						</tr>
						</thead>
						<tbody>
						<?php 
							$q="Select * from user_registration";
							$c=mysqli_query($con,$q);
							while($r=mysqli_fetch_array($c))
							{
						?>
						  <tr>
							<td><?php echo $r['u_id'];?></td>
							<td><?php echo $r['u_name'];?></td>
							<td><?php echo $r['u_email'];?></td>
							<td><?php echo $r['u_password'];?></td>
							<td><?php echo $r['u_contact-no'];?></td>
							<td><?php echo $r['u_education'];?></td>
							<td>
								<a onclick="return confirm('Are you sure you want to delete this user')" href="deleteuser.php?uid=<?php echo $r['u_id'];?>">
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