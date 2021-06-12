<?php 
session_start();
include 'db_connect.php';
	if(!isset($_SESSION['login_id'])){
	$_SESSION['state'] = 'Sign In';
	}else{
	$_SESSION['state'] = 'Sign Out';	
	}
?>
<?php 
	if(!isset($_SESSION['login_id']))
	    header('location:login.php');

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>CAST|Intersted list</title>
    <meta charset="UTF-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<link rel="stylesheet" href="css/style.css"/>
	<script src="https://kit.fontawesome.com/2bca458f4e.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		    body{
		        background-image: url(images/background/abouts.png);
                
                height: 100vh;
                background-size: 100% 100%;
                background-position: center;
		    }
		</style>
  </head>

  <body>
		<header>
			<div class="topnav" id="myTopnav">
			    <?php if(isset($_SESSION['login_id'])){?>
			        <a href="homepage.php"><span class="fa fa-home mr-3"></span> Home</a>
			        
			         
			         <?php if($_SESSION['typee'] == 'director'){?>
			             <a  href="index.php"><span class="fa fa-home mr-3"></span> Actors</a>
    				    <a href="cart.php"><span class="fa fa-shopping-cart mr-3"></span> Cart</a>
    				<?php }else{?>
    				    <a class="active" href="int_list.php"><span class="fa fa-shopping-cart mr-3"></span> Interested list</a>
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
		<h1 style="color:white; padding: 10px;">Added Me To Cast:</h1>
		<div class="wrapper d-flex align-items-stretch">
<main id="clients" class="category-clients">
    <div class="">
					
		<?php
			$i = 1;
			$qry0 = $conn->query("SELECT IFNULL(COUNT(*),0) num FROM users_director e LEFT JOIN cart c ON e.id = c.id WHERE c.user_id='" . $_SESSION['login_id'] . "'");
			while($row= $qry0->fetch_assoc()):
				$rownum = $row['num'];
			endwhile;
			$qry = $conn->query("SELECT e.id,e.lname,e.fname,MAX(p.photo) photo FROM users_director e LEFT JOIN cart c ON e.id = c.id LEFT JOIN users_director_photo p ON e.id = p.id_user WHERE c.user_id='" . $_SESSION['login_id'] . "' GROUP BY e.id,e.lname,e.fname");
			
			while($row= $qry->fetch_assoc()):
			?>
			<?php if($i == 1){?>
			 <div class="container row">
			<?php };?>
			<?php if($i < 5){ ?>
				<div class="col-md-3 intactor" id="actor-<?php echo $row['id'] ?>">
						<div class="container-<?php echo $row['id'] ?>">
							<style>
							.container-<?php echo $row['id'] ?> {
							  position: relative;
							}

							.image {
							  display: block;
							  width: 100%;
							  height: auto;
							}

							.overlay-<?php echo $row['id'] ?> {
							  position: absolute;
							  top: 0;
							  bottom: 0;
							  left: 0;
							  right: 0;
							  height: 200px;
							  width: 200px;
							  opacity: 0;
							  transition: .5s ease;
							  background-color: #fff;
							}

							.container-<?php echo $row['id'] ?>:hover .overlay-<?php echo $row['id'] ?> {
							  opacity: 0.7;
							}

							.text1 {
							  color: black;
							  font-size: 20px;
							  position: absolute;
							  top: 50%;
							  left: 50%;
							  opacity: 1;
							  -webkit-transform: translate(-50%, -50%);
							  -ms-transform: translate(-50%, -50%);
							  transform: translate(-50%, -50%);
							  text-align: center;
							}
							.text2 {
							  color: black;
							  font-size: 10px;
							  position: absolute;
							  top: 90%;
							  left: 50%;
							  opacity: 1;
							  -webkit-transform: translate(-50%, -50%);
							  -ms-transform: translate(-50%, -50%);
							  transform: translate(-50%, -50%);
							  text-align: center;
							}
							</style>
						  <img src="./images/<?php echo $row['photo'] ?>" style="width:200px; height:200px;">
						  <div class="overlay-<?php echo $row['id'] ?> overlaymobile">
							
								
									<div class="mask">
										<div class="center-vert">
											<div class="center-vert-inside">
												<div class="title playfair ">
													<a href="view_director.php?id=<?php echo $row['id'] ?>">
														<div class="text1"><small><?php echo $row['fname']; ?></small><br> <small><?php echo $row['lname']; ?> </small> </div>
													</a>
												</div>
											</div>
										</div>
									</div>
								
							
						  </div>
						</div>
				</div>					
			<?php };
			?>
			<?php if($i == min(4,$rownum)){?>
			</div>
			<?php $i=1;}
			$i++;?>
			<?php endwhile; ?>
			<?php if ($rownum = 0){ echo '<div>There no actor in your cart</div>' ;} ?>
					
	</div>
</main>
			
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


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