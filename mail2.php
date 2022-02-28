


<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $phone = $_POST['phone'];
  $dtype = $_POST['Dtype'];
  $message = $_POST['message'];
  $lead = $_POST['lead_area'];
  $lead_org = $_POST['lead_org_price'];
 
  $email_from = 'support@websodesign.com';
  $to = "sherwin.shakir@gmail.com, developertwo02@gmail.com";

  $email_subject = "New Lead Websodesign";

	$email_body = "You have received a new message from the user $name.\n".
						"Phone Number $phone. \n".
						"Email Address $visitor_email. \n".
						"Dtype $dtype. \n". 
                            "Here is the message:\n $message".
							

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);





?>

<?php 
include 'header.php';
?>
<section class="breadcrumb-area banner-6">
	<div class="text-block">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 v-center">
					<div class="bread-inner">
						<div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="#">Thank You</a></li>
							</ul>
						</div>
						<div class="bread-title wow fadeInUp" data-wow-delay=".5s">
							<h2>Thank You</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<h1>

<span><?php echo $name ?></span>
</h1>




<?php 
include 'footer.php';
?>

