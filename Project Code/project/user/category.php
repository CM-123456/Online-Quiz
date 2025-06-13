<?php
	include"header2.php";
?>
<!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">category</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">CATEGORY</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Detail Start -->
<div class="container-fluid py-5">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-8">
				<div class="row pb-3">
					<?php
						$q="Select * from oq_category";
						$c=mysqli_query($con,$q);
						while($r=mysqli_fetch_array($c))
						{
					?>
	
						<div class="col-lg-6 mb-4">
							<div class="blog-item position-relative overflow-hidden rounded mb-2">
								<img alt="Image Not Found" src="../admin/upload/<?php echo $r['c_image'];?>"
								height=350 width=350/>
								<a class="blog-overlay text-decoration-none" href="exam.php?cid=<?php echo $r['c_id'];?>"></a>
							</div>
							<h5><i><u><?php echo $r['c_name'];?></u></i></h5>
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