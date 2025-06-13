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
					  <h3 class="w3_inner_tittle two">
							Quiz Listing
							<a href="addquiz.php" style="float:right"><b style="font-size:20px">Add New Quiz</b></a>	
						</h3>
					    <table id="table">
						<thead>
						  <tr>
							<th>q_id</th>
							<th>e_id</th>
							<th>question</th>
							<th>option1</th>
							<th>option2</th>
							<th>option3</th>
							<th>option4</th>
							<th>answer</th>
							<th>Action</th>
						  </tr>
						</thead>
						<tbody>
						<?php 
							$q="Select * from question_master";
							$c=mysqli_query($con,$q);
							while($r=mysqli_fetch_array($c))
						{
						?>
						  <tr>
							<td><?php echo $r['q_id'];?></td>
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
							<td><?php echo $r['question'];?></td>
							<td><?php echo $r['option1'];?></td>
							<td><?php echo $r['option2'];?></td>
							<td><?php echo $r['option3'];?></td>
							<td><?php echo $r['option4'];?></td>
							<td><?php echo $r['answer'];?></td>
							<td>
								<a href="editquiz.php?qid=<?php echo $r['q_id'];?>">
									<i class="fa fa-edit" style="transform : scale(1.50,1.50); color:green"></i>
								</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
								<a onclick="return confirm('Are you sure you want to delete this record')" href="deletequiz.php?qid=<?php echo $r['q_id'];?>">
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