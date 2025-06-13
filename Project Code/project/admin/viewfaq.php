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
					  Faq Listing
					  <a href="addfaq.php" style="float:right"><b style="font-size:15px">Add New FAQ</b></a>	
					  </h3>
					    <table id="table">
						<thead>
						  <tr>
							<th>faq_id</th>
							<th>faq_question</th>
							<th>faq_answer</th>
							<th>action</th>
						  </tr>
						</thead>
						<tbody>
						<?php 
							$q="Select * from faq_tbl";
							$c=mysqli_query($con,$q);
							while($r=mysqli_fetch_array($c))
						{
						?>
						  <tr>
							<td><?php echo $r['fa_id'];?></td>
							<td><?php echo $r['fa_question'];?></td>
							<td><?php echo $r['fa_answers'];?></td>
							<td>
								<a href="editfaq.php?faqid=<?php echo $r['fa_id'];?>">
									<i class="fa fa-edit" style="transform : scale(1.50,1.50); color:green"></i>
								</a>
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
								<a onclick="return confirm('Are you sure you want to delete this record')" href="deletefaq.php?faqid=<?php echo $r['fa_id'];?>">
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