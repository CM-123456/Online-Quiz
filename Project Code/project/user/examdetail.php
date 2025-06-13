<?php
	include"header2.php";
	$eid=$_REQUEST['eid'];
	if(isset($_POST['btnok']))
	{
		?>
		<script>
			window.location="questions.php?eid=<?php echo $eid;?>";
		</script>
		<?php
	}
?>
<!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h4 class="display-4 text-white text-uppercase">exam</h4>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">EXAM</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Detail Start -->
	<div class="container-fluid py-2">
        <div class="container py-2">
			<div class="row">
				<div class="col-lg-8">
                    <div class="row pb-3">
	<?php 
	
		
	
		$q="Select * from oq_examdetail where e_id='$eid'";
		$c=mysqli_query($con,$q);
		while($r=mysqli_fetch_array($c))
	{
	?>
	
						<div class="col-lg-6 mb-4">
								<div class="blog-item position-relative overflow-hidden rounded mb-2">
									<img alt="Image Not Found" src="../admin/upload/<?php echo $r['e_image'];?>"
									height=350 width=350/>
									<a class="blog-overlay text-decoration-none"></a>
								</div>
							<form action="#" method="post">	
								<p class="m-0"><b>CATEGORY NAME :</b>
								<?php
									$cid=$r['c_id'];
											$qq="Select * from oq_category where c_id='$cid'";
											$cc=mysqli_query($con,$qq);
											while($rr=mysqli_fetch_array($cc))
											{
												echo $rr['c_name'];
											}
								?>
								</p>
										
									<p class="m-0"><b>TITLE :</b> <?php echo $r['title']; ?></p>
									<p class="m-0"><b>TOTAL-MARKS :</b> <?php echo $r['total_marks']; ?></p>
									<p class="m-0"><b>TOTAL-QUESTIONS :</b> <?php echo $r['total_questions']; ?></p>
									<p class="m-0"><b>TOTAL-TIME :</b> <?php echo $r['total_time']; ?></p>
									<p class="m-0"><b>EXAM-DATE :</b> <?php echo $r['exam_date']; ?></p>
									<p class="m-0"><b>PER-QUE-MARK :</b> <?php echo $r['per_que_mark'];?></p>
									
										<div class="text-center">
											<button class="btn btn-primary py-3 px-5" type="submit" name="btnok">Apply</button>
										</div>
							</form>
						
					</div>
					
	<?php
		}
	?>
							
				</div>
			</div>
		</div>
	</div>
 </div>
	
	<!-- Detail End -->


<?php
	include"footer.php";
?>