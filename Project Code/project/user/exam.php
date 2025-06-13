<?php
	include"header2.php";
	$cid=$_REQUEST['cid'];
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
				<div class="col-lg-12">
                    <div class="row pb-3">
	<?php 
	
		$q="Select * from oq_examdetail where c_id='$cid'";
		$c=mysqli_query($con,$q);
		while($r=mysqli_fetch_array($c))
	{
	?>
	
						<div class="col-lg-4 mb-4">
								<div class="blog-item position-relative overflow-hidden rounded mb-2">
									<img alt="Image Not Found" src="../admin/upload/<?php echo $r['e_image'];?>"
									height=350 width=350/>
									<a class="blog-overlay text-decoration-none" href="examdetail.php?eid=<?php echo $r['e_id'];?>"></a>
								</div>
										<h5><?php echo $r['title']; ?></h5>
										<?php echo $r['exam_date']; ?>
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