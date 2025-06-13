<?php
	include"header.php";
?>
<!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">result</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">RESULT</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Detail Start -->

<link href="css/table.css" rel="stylesheet">
<div class="container-fluid py-2">
	<div class="container pt-2 pb-3">
		<div class="">
		<div class="main-grid">
			<div class="agile-grids">
		<div class="agile-tables">
				<div class="w3l-table-info">
					  <center><h3>User Result</h3></center>
					    <table id="table">
						<thead>
						  <tr>
							<th>No.</th>
							<th>Name</th>
							<th>Exam Title</th>
							<th>Result</th>
							<th>Result Date</th>
						  </tr>
						</thead>
						<tbody>
						<?php 
						$uiid=$_SESSION['user_id'];
							$q="Select * from result_master WHERE u_id='$uiid'";
							$c=mysqli_query($con,$q);
							while($r=mysqli_fetch_array($c))
							{
								$c1=1;
						?>
						  <tr>
						  <td><?php echo $c1;?></td>
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
							<td><?php echo $r['result'];?></td>
							<td><?php echo $r['r_date'];?></td>
							</tr>
							<?php	
								$c1++;
								}
							?>		
							</tbody>
						</table>
					</div>
				</div>
					</div>
					</div>
		</div>
	</div>
</div>


 <!-- Detail End -->


<?php
	include"footer.php";
?>