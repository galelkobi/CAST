<?php 
session_start();
include 'db_connect.php';
	if(!isset($_SESSION['login_id'])){
	$_SESSION['state'] = 'Sign In';
	}else{
	$_SESSION['state'] = 'Sign Out';	
	}
	if(isset($_SESSION['login_id'])){
	     if($_POST['type']=='director'){
	header('location:profile_director.php');}else{
	    header('location:profile.php');
	}
	}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>register</title>
    <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<script src="https://kit.fontawesome.com/2bca458f4e.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">

		
  </head>
<style>
        body{
             
                background-image: url(../images/dark.png);
                
                height: 100vh;
                background-size: 100% 100%;
                background-position: center;
        }
        h1{
            font-family: 'Alfa Slab One', cursive;
            text-align:center;
            margin-bottom:50px;
            letter-spacing:3px;
            color:white;
            
            
        }
        h2
        {   text-align:center;
            color:white;
        }
		textarea{
			margin-top:10px !important;
			height:75px !important;
		}
		input{
			margin-top:10px !important;
			height:30px !important;
		}
		select{
			margin-top:10px !important;
			height:30px !important;
		}
		label{
			margin-top:10px !important;
			height:30px !important;
		}
		h2{
			text-align: center !important;
		}
		button{
			text-align: center !important;
			margin:auto !important;
			display:flex !important;
		}
	</style>
  <body  >
		<header>
			<div class="topnav">
			    <?php if(isset($_SESSION['login_id'])){?>
			        <a href="homepage.php"><span class="fa fa-home mr-3"></span> Home</a>
			         
			         <?php if($_SESSION['typee'] == 'director'){?>
			            <a  href="index.php"><span class="fa fa-home mr-3"></span> Actors</a>
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
			        <a class="active" href="register.php"><span class="fa fa-registered  mr-3"></span> Register</a>
			        <a href="webform.php"><span class="fa fa-id-card-alt  mr-3"></span> Contact</a>
			  <?php }?>

				<?php if($_SESSION['state']=="Sign In"){  echo"<a href='login.php'><span class='fa fa-sign-in mr-3'></span> Sign In</a>";}else{
					  echo"<a href='logout.php'><span class='fa fa-sign-out mr-3'></span> Sign Out</a>";}?>
			</div>
		</header><br>
		<h1>Registration</h1>
		<h2>
		    Join To Our Cast!
		</h2>
		<div class="h-100 wrapper d-flex align-items-stretch">
			
			<div class="h-100 reg">

						<div class="row" style="margin-top:65px !important;">
							<div class="col-md-3"></div>
							<div class="col-md-3">
								<form action="register.php" method="POST">
									<input type="text" hidden name="type" value="actor">
									<button class="btn btn-primary btn-user btn-block" >Register as an Actor</button>
								</form>
							</div>
							<div class="col-md-3">
								<form action="register_director.php" method="POST">
								<input type="text" hidden name="type" value="director">
									<button class="btn btn-danger" style="background-color:pink !important;">Register as Director</button>
								</form>
							</div>
							<div class="col-md-3"></div>
						</div>

			</div>
			
		</div>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>

	</script>

<script type='text/javascript' src='./js/js5.js' id='em-js-js'></script>


  </body>
 
</html>