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
	if(!isset($_POST['type'])){
	header('location:ask_login.php');}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="stylesheet" href="css/style.css"/>
	<script src="https://kit.fontawesome.com/2bca458f4e.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
  </head>
<style>
        body{
	        background-image: url(../images/background/asklogin.png);
            height: 100vh;
            background-size: 100% 100%;
            background-position: center;
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
			color:white;
		}
		button{
			text-align: center !important;
			margin:auto !important;
			display:flex !important;
		}
	</style>
  <body>
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
			        <a href="register.php"><span class="fa fa-registered  mr-3"></span> Register</a>
			        <a href="webform.php"><span class="fa fa-id-card-alt  mr-3"></span> Contact</a>
			  <?php }?>

				<?php if($_SESSION['state']=="Sign In"){  echo"<a href='login.php'><span class='active' class='fa fa-sign-in mr-3'></span> Sign In</a>";}else{
					  echo"<a href='logout.php'><span class='fa fa-sign-out mr-3'></span> Sign Out</a>";}?>
			</div>
		</header><br>
		<div class="h-100 wrapper d-flex align-items-stretch">
			
			<div class="h-100 reg">

						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<div class="p-5">
									<div class="text-center">
										<h2 class="h4 text-gray-900 mb-4">Welcome Back !</h2>
									</div>
									<div id="message">
									</div>
									<form class="user" id="login-form">
										<input type="text" name="table" hidden value="<?php if($_POST['type']=='actor'){echo "users";}else{echo "users_director";}?>">
										<input type="text" name="type" hidden value="<?php echo $_POST['type'];?>">
										<div class="form-group" >
											<input type="email" class="form-control form-control-user"
											   id="email" name="email" aria-describedby="emailHelp"
												placeholder="Enter Email Address...">
										</div>
										<div class="form-group">
											<input type="password" class="form-control form-control-user"
												id="password" name="password" placeholder="Password">
										</div><br>
										<button class="btn btn-primary btn-user btn-block">Login</button>
									</form>
									<hr>
									<div class="text-center">
										<a class="small" href="register.php">Create an Account !</a>
									</div>
								</div>
							</div>
							<div class="col-md-3"></div>
						</div>

			</div>
			
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$('#login-form').submit(function(e){
			event.preventDefault();
			$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
			if($(this).find('.alert-danger').length > 0 )
				$(this).find('.alert-danger').remove();
			$.ajax({
				url:'ajax.php?action=login',
				method:'POST',
				data:$(this).serialize(),
				error:err=>{
					console.log(err)
			$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

				},
				success:function(resp){
					if(resp == 1){
						location.href = 'profile.php';
					}else if(resp == 2){
						location.href = 'index.php';
					}
					else{
						$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
						$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
					}
				}
			})
		})
		$('.number').on('input',function(){
			var val = $(this).val()
			val = val.replace(/[^0-9 \,]/, '');
			$(this).val(val)
		})
	</script>

<script type='text/javascript' src='./js/js5.js' id='em-js-js'></script>


  </body>
 
</html>