<?php
//session_start()

?>

<style>
	body,
	html {

		margin: 0;
		font-family: verdana;
	}


	.mycard {
		width: 100%;
		height: 10vw;
		object-fit: cover;
	}






	.carousel-item {
		height: 400px;
	}




	/* Card Styles */

	.card-sl {
		border-radius: 8px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		margin-bottom: 20px;
		width: 250px;
		margin-left: 160px;
		/* margin-right: ; */

	}

	.card-image img {
		max-height: 100%;
		max-width: 100%;
		border-radius: 8px 8px 0px 0;
	}

	.card-action {
		position: relative;
		float: right;
		margin-top: -25px;
		margin-right: 20px;
		z-index: 2;
		color: #E26D5C;
		background: #fff;
		border-radius: 100%;
		padding: 15px;
		font-size: 15px;
		box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19);
	}

	.card-action:hover {
		color: #fff;
		background: #E26D5C;
		-webkit-animation: pulse 1.5s infinite;
	}

	.card-heading {
		font-size: 18px;
		font-weight: bold;
		background: #fff;
		padding: 10px 15px;
	}

	.card-text {
		padding: 10px 15px;
		background: #fff;
		font-size: 14px;
		color: #636262;
	}

	.card-button {
		display: flex;
		justify-content: center;
		padding: 10px 0;
		width: 100%;
		background-color: #1F487E;
		color: #fff;
		border-radius: 0 0 8px 8px;
	}

	.card-button:hover {
		text-decoration: none;
		background-color: #1D3461;
		color: #fff;

	}

	.panel-footer {
		display: flex;
		justify-content: space-between;
	}

	.hero-text {
		position: absolute;
		margin-top: -600px;
		color: orange;
		font-size: 80px;

		margin-left: 600px;


	}

	.hero {
		position: relative;


	}

	/*@media only screen and (max-width:900px) {
    body {

        
    }
     
    .hero{
        

    }
    .hero-text{
        
        
        
    }
    .banner{
        width:500px;
        height:200px
    
        
    
    }
    .card-sl{
        
    }

    

    

    

}

/*@media only screen and(max-width:900px) {
    body {
        align-items: center;
        justify-content: center;
    }

    .hero-text {
        margin-top: 130px;
        margin-right: 600px;
        margin-left:500px;
        font-size: 40px;
        
        
        

        


    }
    .hero{
        display: flex;
        justify-content: center;
        

    }   

    

    .card-image img {
        height: 200px;
    }
    .banner{
        width: 600px;
        height: 300px;
        object-fit: cover;
    }
    .card-sl{
        
        justify-content: center;

        
    }
    
}*/
</style>
<?php
include "header.php";
include_once 'db.php';
#include_once 'insert.php';

?>
<?php
$sql = "SELECT * FROM `package` WHERE `status`=1";
$res = mysqli_query($conn, $sql);
// $name = $_SESSION['mail'];
// $pass = $_SESSION['pass'];

// $log = "select * from myregister where email='$name' and password='$pass'";
// $result = mysqli_query($conn, $log);
// $resultcheck = mysqli_num_rows($result);

// $gmail = $_SESSION["email"];
// $gname = $_SESSION["name"];
// $seclog = "select * from gcredential where email='$gmail' and name='$gname'";
// $gres = mysqli_query($conn, $seclog);
// $gcheck = mysqli_num_rows($gres);
?>
<section>
	<!--<div class="my" style="margin-top: 10px;">
  <div class="text">
    <h1>Explore Multiple Carrers</h1>
  </div>
  </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="my shadow-lg ">
                    <div class="text">
                        <h1><?php //echo $_SESSION['mname']; 
							?></h1>
                    </div>
                </div>
            </div>
        </div>-->
	<div class="container-fluid ">
		<div class="row myrow ">
			<div class="col-md4 hero  ">
				<img class="banner" src="./assets/images/567.jpg" alt="">
				<div class="hero-text ">
					<center>
						<p>Travel is</p>
						<p>AN INVESTMENT

						<p>in yourself</p>
						<?php
						//echo $_SESSION["name"] . date("d M Y H:i");
						?>
					</center>

				</div>


			</div>
		</div>

		<!-- <div class="row ">
			<div class="col-md-12">
				<marquee class="nam " behavior="scroll" direction="right"> Hai
					<?php //echo $_SESSION['mname'];//echo$_SESSION['name'];
					?> Select
					Your Package</marquee>
			</div>
		</div> -->
		<div class="row mt-2">
			<?php while ($data = mysqli_fetch_assoc($res)) { ?>
				<div class="col-md-4 mycol">
					<div class="card-sl">
						<div class="card-image">
							<img src="./admin/assets/picture/<?php echo $data['photo']; ?>" class="card-img-top mycard" alt="">
						</div>
						<div class="card-heading">
							<?php echo $data['package_name'] ?>
						</div>
						<div class="card-text">
							<?php echo $data['desc']
							?>
						</div>
						<div class="card-text panel-footer">
							<span class="text-success"><?php echo $data['price'] ?></span>
							<span class="text-danger pull-right"><s><?php echo $data['old_price'] ?></s></span>
						</div>
						<!-- <a href="<?php echo $data['packagelink'] ?>" class="btn btn-primary"
                            style="padding:5px; margin-top:10px;"><small>Book Now</small></a>-->
						<button class="link card-button" id="<?php echo $data['id'] ?>"><small>Book Now</small></button>
					</div>
				</div>

			<?php
			}
			$conn->close();
			?>
</section>
<?php
include "footer.php";
?>

<script src="https://js.stripe.com/v3/"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
	var stripe = Stripe(
		"pk_test_51MxoMDSHmUtmPHhdBsulLPFprIByEfD8r6zJf5a8XfQE4L4ysQztAM6DiGMEoZaPEF4hBzS6CaVM4smoNp3EECnj00Ed6wvZIc"
	);
	document.querySelectorAll('.link').forEach(function(link) {
		link.addEventListener('click', function() {
			// var x = "<?php //echo $resultcheck; 
						?>"
			// var my = "<?php //echo $gcheck; 
							?>"


			// if (x > 0 || my > 0) {
			id = this.getAttribute('id')
			$.ajax({
				url: 'checkout.php',
				method: 'POST',
				data: {
					id: id,
					// stripe_payment_process: 1
				},
				success: function(response) {
					console.log(response)
					return stripe.redirectToCheckout({
						sessionId: response.id
					});
				}

			});
		})
		// else {
		// 	location.replace('login.php')
		// 	//header("location:login.php");
		// }




	})
</script>