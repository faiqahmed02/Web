
<?php 
    $to = "sherwin.shakir@gmail.com, developertwo02@gmail.com"; // this is your Email address
    $from = $_POST['ce']; // this is the sender's Email address
    $name = $_POST['cn'];
    $email = $_POST['ce'];
    $phone = $_POST['phn'];
    $formtype = $_POST['form_type'];
    $msg = $_POST['desc'];
    // $last_name = $_POST['last_name'];
    $subject = "Form submission Lead From Web So Design";
    $subject2 = "Copy of your form submission";
    $message = "Name". " ". $name  . "\n" .
    "Email" . " " . $email . "\n" . 
        "Phone Number". " " .$phone. "\n".
        "message" . " " . $msg. "\n".
        "Form from" . " " . $formtype. "\n".
        "URL". " ". $pageurl.
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['msg'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.

  ?>


<?php 
include 'header.php';
?>


<body>
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
							 <p>Here is the information you have submitted:</p>
    <ol style="list-style: none;">
        <li><em>Name:</em> <?php echo $_POST["cn"]?></li>
        <li><em>Email:</em> <?php echo $_POST["ce"]?></li>
        <li><em>Subject:</em> <?php echo $_POST["phn"]?></li>
        <li><em>Message:</em> <?php echo $_POST["desc"]?></li>
    </ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
   
</body>

<?php 
include 'footer.php';
?>