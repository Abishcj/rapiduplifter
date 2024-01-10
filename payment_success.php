<?php
// session_start();
// $name = $_SESSION['name'];
include "./header.php";


// $sql="select * from myregister where email='$name' ";
// $res=mysqli_query($conn,$sql);
// $check=mysqli_fetch_assoc($res);

?>
<section>
	<div class="container  ">
		<div class="row justify-content-center mt-5 text-white p-5">
			<div class="jumbotron bg-dark grey ">
				<h3><?php
					//echo strtoupper($check['name']);
					//echo strtoupper($_SESSION["name"]);
					?> YOUR PAYMENT RECEIVED SUCCESSFULLY.</h3>
				<h5>You Was Booked in <?php echo $_SESSION['my']; ?>.</h5>
				<a href="clearses.php"><button class="btn btn-primary">back</button></a>
			</div>
		</div>
	</div>
</section>
<?php
// include_once "db.php";
// $name = $_SESSION['name'];
//echo $name;
// $package = $_SESSION['my'];
// $sql = "INSERT INTO `pur_history`(`name`, `Package`) VALUES('$name','$package')";
// $result = $conn->query($sql);
// if ($result == TRUE) {
// 	header("Location:clearses.php");
// } else {
// 	echo 'error';
// }
?>