<?php
session_start();
// $mail = $_SESSION['mail'];
include "./header.php";

include_once "db.php";
// $sql="select * from myregister where email='$mail' ";
// $res=mysqli_query($conn,$sql);
// $check=mysqli_fetch_assoc($res);




?>
<section>
	<div class="container  ">
		<div class="row justify-content-center mt-5 text-white p-5">
			<div class="jumbotron bg-dark grey ">
				<h3><?php
					// echo strtoupper( $check['name'] );
					//echo strtoupper($_SESSION["name"]); 
					?> YOUR PAYMENT RECEIVED SUCCESSFULLY.</h3>
				<h5>You Was Booked in <?php echo $_SESSION['my']; ?>.</h5>
				<a href="clearses.php"><button class="btn btn-primary">back</button></a>
			</div>
		</div>
	</div>