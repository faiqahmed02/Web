
<?php 
if(isset($_POST['submit'])){
    $to = "developertwo02@gmail.com"; // this is your Email address
    $from = $_POST['em']; // this is the sender's Email address
    $name = $_POST['cn'];
    $email = $_POST['em'];
    $phone = $_POST['pn'];
    $msg = $_POST['msg'];
    // $last_name = $_POST['last_name'];
    $subject = "Form submission Lead From New York Design";
    $subject2 = "Copy of your form submission";
    $message = $name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }

  // servername => localhost
  // username => root
  // password => empty
  // database name => staff
  $conn = mysqli_connect("localhost", "root", "", "newyorkdesignhub");
    
  // Check connection
  if($conn === false){
      die("ERROR: Could not connect. " 
          . mysqli_connect_error());
  }
    
  // Taking all 5 values from the form data(input)
  $name = $_POST['cn'];
  $email = $_POST['em'];
  $phone = $_POST['pn'];
  $msg = $_POST['msg'];
    
  // Performing insert query execution
  // here our table name is college
  $sql = "INSERT INTO new_lead (full_name, email, phone, u_message)  VALUES ('$name', 
      '$email','$phone','$msg')";
    
  if(mysqli_query($conn, $sql)){
    //   echo "<h3>data stored in a database successfully." 
    //       . " Please browse your localhost php my admin" 
    //       . " to view the updated data</h3>"; 

    //   echo nl2br("\n$name\n $email\n "
    //       . "$phone\n $msg\n");
  } else{
    //   echo "ERROR: Hush! Sorry $sql. " 
    //       . mysqli_error($conn);
  }
    
  // Close connection
  mysqli_close($conn);
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Name:</em> <?php echo $_POST["cn"]?></li>
        <li><em>Email:</em> <?php echo $_POST["em"]?></li>
        <li><em>Subject:</em> <?php echo $_POST["pn"]?></li>
        <li><em>Message:</em> <?php echo $_POST["msg"]?></li>
    </ol>
</body>

<?php 
include 'footer.php';
?>