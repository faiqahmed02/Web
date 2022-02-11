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
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
						<div class="bread-title wow fadeInUp" data-wow-delay=".5s">
							<h2>Contact</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact-page pad-tb">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 v-center">
				<div class="common-heading text-l">
					<span>Contact Now</span>
					<h2 class="mt0 mb0">Have Question? Write a Message</h2>
					<p class="mb60 mt20">We will catch you as early as we receive the message</p>
				</div>
				<div class="form-block">
					<!-- <form data-toggle="validator" class="shake"> -->
						<form id="contactForm" action="mail2.php" class="jform validate shake" method="POST">
						<div class="row">
							<div class="form-group col-sm-6">
								<input type="text" name="name" id="name" placeholder="Enter name" required data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group col-sm-6">
								<input name="email" type="email" id="email" placeholder="Enter email" required>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-sm-6">
								<input name="phone" type="text" id="mobile" placeholder="Enter mobile" required data-error="Please fill Out">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group col-sm-6">
								<select name="Dtype" id="Dtype" required>
									<option value="">Select Requirement</option>
									<option value="web">E-commerce</option>
									<option value="graphic">Digital Marketing</option>
									<option value="video">Web Portal</option>
									<option value="video">Web Website</option>
									<option value="video">Logo</option>
								</select>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
							<div class="help-block with-errors"></div>
						</div>
						<button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Submit <span class="circle"></span>Submit</button>
						<input type="hidden" id="" name="lead_area" value="for $35" />
                <input type="hidden" id="" name="lead_org_price" value="" />
                <input type="hidden" name="send" value="1" />
                
                <!-- <input type="hidden" name="lb_source" value="" />
                <input type="hidden" name="lb_source_cat" value="" />
                <input type="hidden" name="lb_source_nam" value="" />
                <input type="hidden" name="lb_source_ema" value="" />
                <input type="hidden" name="lb_source_con" value="" />
                <input type="hidden" name="lb_source_pho" value="" />
                <input type="hidden" name="lb_source_off" value="" /> -->
                
                <input type="hidden" name="fullpageurl" value="" />
                <input type="hidden" name="pageurl" value="" />
                
                <!-- <input type="hidden" name="ip2loc_ip" value="" />
                <input type="hidden" name="ip2loc_isp" value="" />
                <input type="hidden" name="ip2loc_org" value="" />
                <input type="hidden" name="ip2loc_country" value="" />
                <input type="hidden" name="ip2loc_region" value="" /> -->
                <input type="hidden" name="service_id" value="5669" class="service_id">
					</form>
				</div>
</div>
			<div class="col-lg-5 v-center">
				<div class="contact-details">
					<div class="contact-card wow fadeIn" data-wow-delay=".2s">
						<div class="info-card v-center">
							<span><i class="fas fa-phone-alt"></i> Phone:</span>
							<div class="info-body">
								<p>Assistance hours: Monday – Friday, 9 am to 5 pm</p>
								<a href="tel:+1-347-704-2880">+1-347-704-2880</a>
							</div>
						</div>
					</div>
					<div class="email-card mt30 wow fadeIn" data-wow-delay=".5s">
						<div class="info-card v-center">
							<span><i class="fas fa-envelope"></i> Email:</span>
							<div class="info-body">
								<p>Our support team will get back to in 24-h during standard business hours.</p>
								<a href="mailto:support@websodesign.com"><span class="__cf_email__">support@websodesign.com</span></span></a>
							</div>
						</div>
					</div>
					<!-- <div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s">
						<div class="info-card v-center">
							<span><i class="fab fa-skype"></i> Skype:</span>
							<div class="info-body">
								<p>We Are Online: Monday – Friday, 9 am to 5 pm</p>
								<a href="javascript:;">Websodesign Web Solution.company</a>
							</div>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
include 'footer.php';
?>