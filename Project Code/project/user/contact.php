<?php
	include"header2.php";
	
	if(isset($_POST['btnok']))
	{
		$nm=$_POST['nmtxt'];
		$sub=$_POST['subtxt'];
		$mg=$_POST['mgtxt'];
		$dt=date("d-m-Y");
		
		
		$q="INSERT into oq_feedback values('','$nm','$sub','$mg','$dt')";
		$c=mysqli_query($con,$q);
		
		if($c)
		{
			?>
			<script>
				alert("Message Sent Successfully");
				window.location="contact.php";
			</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert("something is wrong....please try again");
			</script>
			<?php
		}
	}
?>
<!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">contact</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">CONTACT</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Contact</h5>
                <h1>Contact For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form action="#" method="post">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="nmtxt" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="subtxt" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="5" name="mgtxt" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
							<div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" name="btnok" id="sendMessageButton">Send Message</button>
								<button class="btn btn-primary py-3 px-5" type="reset" name="btncl" id="sendMessageButton">Cancel</button>
								 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


<?php
	include"footer.php";
?>