<?php 
session_start();
include 'db_connect.php';

	if(!isset($_SESSION['login_id'])){
		$_SESSION['state'] = 'Sign In';
	}else{
		$_SESSION['state'] = 'Sign Out';	
	}


?>
<!doctype html>
<html lang="en">
  <head>
  	<title>CAST|Director profile</title>
    <meta charset="UTF-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="https://kit.fontawesome.com/2bca458f4e.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
	<style>
	body{
	    background:black;
	    color:white;
	}
	
		.form-group{
			width:100% !important;
		}
		label{
			width:100% !important;
		}
		.conta{
			margin-top:45px;
		}
		h2{
			text-align: center !important;
		}
		.backTo{
			margin-top: 20px;
			border:solid;
			color:white;
			background-color:red;
			padding: 5px 10px;
			text-align:center;
			display: inline-block;
		}
		@media only screen and (max-width: 550px) {
		  /* For mobile phones: */
			img {
			transform: scale(0.5);
		  }
		}
	</style>
  <body>
	    <header>
			<div class="topnav" id="myTopnav">
			    <?php if(isset($_SESSION['login_id'])){?>
			        <a href="homepage.php"><span class="fa fa-home mr-3"></span> Home</a>
			         
			         <?php if($_SESSION['typee'] == 'director'){?>
			             <a href="index.php"><span class="fa fa-home mr-3"></span> Actors</a>
    				    <a href="cart.php"><span class="fa fa-shopping-cart mr-3"></span> Cart</a>
    				<?php }else{?>
    				    <a href="int_list.php"><span class="fa fa-shopping-cart mr-3"></span> Interested list</a>
    				<?php }?>
			        <?php if($_SESSION['typee'] == 'director'){?>
    				 <a href="profile_director.php"><span class="fa fa-user  mr-3"></span> My profile</a>
    				<?php }else{?>
    				 <a href="profile.php"><span class="fa fa-user  mr-3"></span> My profile</a>
    				<?php }?>
    				<a href="about_us.php"><span class="fa fa-address-card mr-3"></span> About Us</a>
    				<a href="webform.php"><span class="fa fa-id-card-alt  mr-3"></span> Contact</a>
			  <?php }else{?>
			        <a href="homepage.php"><span class="fa fa-home mr-3"></span> Home</a>
			        <a href="about_us.php"><span class="fa fa-address-card mr-3"></span> About Us</a>
			        <a href="register.php"><span class="fa fa-registered  mr-3"></span> Register</a>
			        <a href="webform.php"><span class="fa fa-id-card-alt  mr-3"></span> Contact</a>
			  <?php }?>

				<?php if($_SESSION['state']=="Sign In"){  echo"<a href='login.php'><span class='fa fa-sign-in mr-3'></span> Sign In</a>";}else{
					  echo"<a href='logout.php'><span class='fa fa-sign-out mr-3'></span> Sign Out</a>";}?>
					  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
						<i class="fa fa-bars"></i>
					  </a>
			</div>
		</header><br>
		<div class="wrapper d-flex align-items-stretch">
			
<main id="clients" class="category-clients">
	<?php
		$i = 1;
		$qry = $conn->query("SELECT u.*,p.photo FROM users_director u LEFT JOIN users_photo p ON u.id = p.id_user WHERE u.id='".$_GET['id']."' LIMIT 1");

		while($row= $qry->fetch_assoc()):
			$lname = $row['lname'];
			$fname = $row['fname'];
			$photo = $row['photo'];
			$id = $row['id'];
			$gender = $row['gender'];
			$dob = $row['dob'];
			$Other = $row['Other'];
			$country = $row['country'];
			$years = $row['y_experience'];
		
			
		endwhile;
	?>
		<div class="text-center">
			<h2 class="h4 text-gray-900 mb-4">Director profile</h2>
		</div>
		<div class="conta row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8 viewdirector" style="border:solid; padding:10px;">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 viewleftcolumn">
								<div class="form-group">
									<label><strong>Name: </strong><?php echo $fname; ?> <?php echo $lname; ?></label>
								</div>
							</div>
							<div class="col-md-6 viewleftcolumn">
								<div class="form-group">
									<label><strong>Gender: </strong><?php echo $gender; ?></label>
								</div>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-md-6 viewleftcolumn">
								<div class="form-group">
									<label><strong>Date of birth: </strong><?php echo $dob; ?></small</label>
								</div>
							</div>
							<div class="col-md-6 viewleftcolumn">
								<div class="form-group">
									<label><strong>Country of birth: </strong><?php echo $country; ?></label>
								</div>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-md-6 viewleftcolumn">
								<div class="form-group">
									<label><strong>Years Experience </strong><?php echo $years; ?></small</label>
								</div>
							</div>
						</div>
						<br/>					
						<div class="row">
							<div class="col-md-12 viewleftcolumn">
								<div class="form-group">
									<label><strong>About me: </strong><?php echo $Other; ?></label>
								</div>
							</div>
						</div>
						<br/>
					</div>
					<div class="col-md-4">
						<div class="row">
						    <?php
							$i = 1;
							$qry = $conn->query("SELECT p.photo FROM users_director u LEFT JOIN users_director_photo p ON u.id = p.id_user WHERE u.id='".$_GET['id']."' LIMIT 3");

							while($row= $qry->fetch_assoc()):?>
							<div class="col-md-4">
								<img src="./images/<?php echo $row['photo']; ?>" style="width:200px;height:200px !important;text-align: center !important;margin:auto !important;display:flex !important;">
						
							</div>
							<?php endwhile; ?>
							
						</div>
						
						
						
					</div>
				</div>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
		<div class="text-center">
		<a href="int_list.php" rel="Back to interested" class="backTo">
			<i class="ti-angle-left"></i>
			<span>Back to Interested List</span>
		</a>
		</div>
    <!-- Main Image -->
</main>
			
		</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		
		<!-- $( document ).ready(function() { -->
			<!-- console.log( "ready!" ); -->
			<!-- document.getElementById("slide1").style.display = "none"; -->
		<!-- }); -->
		function plusSlides(){
					console.log("1");
					document.getElementById("slide").animate([
					  // keyframes
					  { transform: 'translateX(0%)' },
					  { transform: 'translateX(-100%)' }
					  
					], {
					  // timing options
					  duration: 1000,
					});
					document.getElementById("slide1").removeAttribute("hidden");
					document.getElementById("slide1").animate([
					  // keyframes
					  { transform: 'translateX(0%)' },
					  { transform: 'translateX(-100%)' }
					  
					], {
					  // timing options
					  duration: 1000,
					});
				 setTimeout(function(){
						document.getElementById("slide").style.width = "0%";
					},1000)
				  	
		};
	</script>

<script type='text/javascript' src='./js/js5.js' id='em-js-js'></script>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

  </body>
 
</html>