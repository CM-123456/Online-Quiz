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
					  <h3>Feedback Listing</h3>
					    <table id="table">
						<thead>
						  <tr>
							<th>f_id</th>
							<th>name</th>
							<th>f_subject</th>
							<th>f_discription</th>
							<th>f_date</th>
							<th>action</th>
						  </tr>
						</thead>
						<tbody>
						<?php 
							$q="Select * from oq_feedback";
							$c=mysqli_query($con,$q);
							while($r=mysqli_fetch_array($c))
						{
						?>
						  <tr>
							<td><?php echo $r['f_id'];?></td>
							<td><?php echo $r['name'];?></td>
							<td><?php echo $r['f_subject'];?></td>
							<td><?php echo $r['f_discription'];?></td>
							<td><?php echo $r['f_date'];?></td>
							<td>
								<a onclick="return confirm('Are you sure you want to delete this record')" href="deletefeedback.php?fid=<?php echo $r['f_id'];?>">
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