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
  	<title>Actors list</title>
    <meta charset="UTF-8" />
	<link rel="stylesheet" href="css/style.css"/>
	<script src="https://kit.fontawesome.com/2bca458f4e.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
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
			float:left;
			margin-top: 20px;
			margin-left: 20px;
			border:solid;
			color:white;
			background-color:red;
			width:130px;
			text-align:center;
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
			<div class="topnav">
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
			</div>
		</header><br>
		<div class="wrapper d-flex align-items-stretch">
			
<main id="clients" class="category-clients">
	<?php
		$i = 1;
		$qry = $conn->query("SELECT u.*,p.photo FROM users u LEFT JOIN users_photo p ON u.id = p.id_user WHERE u.id='".$_GET['id']."' LIMIT 1");

		while($row= $qry->fetch_assoc()):
			$lname = $row['lname'];
			$fname = $row['fname'];
			$photo = $row['photo'];
			$id = $row['id'];
			$facebook = $row['facebook'];
			$gender = $row['gender'];
			$dob = $row['dob'];
			$address = $row['address'];
			$eye = $row['eye'];
			$hair = $row['hair'];
			$skin = $row['skin'];
			$height = $row['height'];
			$languages = $row['languages'];
			$hobbies = $row['hobbies'];
			$Licence = $row['Licence'];
			$Other = $row['Other'];
			$country = $row['country'];
			$email = $row['email'];
			$mobile = $row['mobile'];
		endwhile;
	?>
		<div class="text-center">
			<h2 class="h4 text-gray-900 mb-4">Actor profile</h2>
		</div>
		<div class="conta row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8" style="border:solid;padding:10px;">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Name: </strong><?php echo $fname; ?> <?php echo $lname; ?></label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Gender: </strong><?php echo $gender; ?></label>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Date of birth: </strong><?php echo $dob; ?></small</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Country of birth: </strong><?php echo $country; ?></label>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label><strong>Instagram: </strong><?php echo $address; ?></label>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Eye color: </strong><?php echo $eye; ?></label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Hair color: </strong><?php echo $hair; ?></label>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Skin color: </strong><?php echo $skin; ?></label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Height: </strong><?php echo $height; ?> cm</label>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label><strong>Languages: </strong><?php echo $languages; ?></label>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Hobbies: </strong><?php echo $hobbies; ?></label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label><strong>Licence: </strong><?php echo $Licence; ?></label>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label><strong>About me: </strong><?php echo $Other; ?></label>
								</div>
							</div>
						</div><br>
					</div>
					<div class="col-md-4">
						<div class="row">
							<img src="./images/<?php echo $photo; ?>" style="width:200px;height:200px !important;text-align: center !important;margin:auto !important;display:flex !important;">
						</div>
						
						<div class="row" style="text-align: center !important;margin-top:10px !important;">
							<a href="mailto:<?php echo $email; ?>">
								Send a message by mail
							</a>
							 
						</div>
						<div class="row" style="text-align: center !important;margin-top:10px !important;">
							
							 <a href="https://wa.me/972<?php echo $mobile; ?>/?text=Hi%20<?php echo $lname; ?>,%20I%20add%20you%20to%20my%20CAST!%20lets%20move%20forward:)">
							     <img src="../images/whatsapp.png" alt="whatsapp" width="60" height="60"></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
					
						
					</div>
					<div class="col-md-4">
						
					</div>
				</div>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
		<a href="index.php" rel="Back to Actors" class="backTo">
			<i class="ti-angle-left"></i>
			<span>Back to Actors</span>
		</a>
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


  </body>
 
</html>