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
					  Exam Listing
					  <a href="addexam.php" style="float:right"><b style="font-size:15px">Add New Category</b></a>	
						
					  </h3>
					    <table id="table">
						<thead>
						  <tr>
							<th>eid</th>
							<th>image</th>
							<th>cid</th>
							<th>title</th>
							<th>total-marks</th>
							<th>total-question</th>
							<th>total-time</th>
							<th>exam date</th>
							<th>per-que-mark</th>
							<th width=15>Action</th>
						  </tr>
						</thead>
						<tbody>
						<?php 
							$q="Select * from oq_examdetail";
							$c=mysqli_query($con,$q);
							while($r=mysqli_fetch_array($c))
						{
						?>
						  <tr>
							<td><?php echo $r['e_id'];?></td>
							<td>
								<img alt="Image Not Found" src="upload/<?php echo $r['e_image'];?>"
								height=50 width=50/>
								</td>
							<td>
								<?php
									$cid=$r['c_id'];
									$qq="Select * from oq_category where c_id='$cid'";
									$cc=mysqli_query($con,$qq);
									while($rr=mysqli_fetch_array($cc))
									{
										echo $rr['c_name'];
									}
								?>
							</td>
							<td><?php echo $r['title'];?></td>
							<td><?php echo $r['total_marks'];?></td>
							<td><?php echo $r['total_questions'];?></td>
							<td><?php echo $r['total_time'];?></td>
							<td><?php echo $r['exam_date'];?></td>
							<td><?php echo $r['per_que_mark'];?></td>
							<td>
								<a href="editexam.php?eid=<?php echo $r['e_id'];?>">
									<i class="fa fa-edit" style="transform : scale(1.50,1.50); color:green"></i>
								</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
								<a onclick="return confirm('Are you sure you want to delete this record')" href="deleteexam.php?eid=<?php echo $r['e_id'];?>">
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