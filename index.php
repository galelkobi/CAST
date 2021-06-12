<?php 
session_start();
include 'db_connect.php';

	if(!isset($_SESSION['login_id'])){
	$_SESSION['state'] = 'Sign In';
	}else{
	$_SESSION['state'] = 'Sign Out';	
	}
    if(!isset($_SESSION['login_id'])){
	header("location:homepage.php");
	}
    extract($_POST);
?>
<!doctype html>
<html lang="en">
  <head>
  	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>CAST|Actors </title>
		<link rel="stylesheet" href="css/style.css"/>
		<script src="https://kit.fontawesome.com/2bca458f4e.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		    body{
		        background:black;
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
			color :white;
		}
		button{
		    color:black !important;
		    background-color:white !important;
			text-align: center !important;
			margin:auto !important;
			display:flex !important;
		}
		hr{
		    color:white !important;
		    width:67% !important;
			text-align: center !important;
			margin:auto !important;
			display:flex !important;
		}
		.image {
		  display: block;
		  width: 100%;
		  height: auto;
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
  </head>
	
  <body>
		<header>
			<div class="topnav" id="myTopnav">
			    <?php if(isset($_SESSION['login_id'])){?>
			        <a href="homepage.php"><span class="fa fa-home mr-3"></span> Home</a>
			         
			         <?php if($_SESSION['typee'] == 'director'){?>
			            <a class="active" href="index.php"><span class="fa fa-home mr-3"></span> Actors</a>
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
		<h1 style="color:white; text-align:center;">Our Talentes</h1>
		<form class="user" action="index.php" method="POST">
		    <input type="text" name="search" value="1" hidden>
			<div class="row">
    			<div class="col-md-12">
					<div class="text-center">
						<h4 class="h4 text-gray-900 mb-4" style="color:white">Search for an actor</h4>
					</div>
				</div>
			</div>
    		<div class="row mb-3 mb-sm-0">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-4 searchbox">
							<div class="p-5">
								<div class="form-group row">
									<input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Name" value="<?php echo $name;?>">
								</div>
							</div>
						</div>
						<div class="col-md-4 searchbox">
							<div class="p-5">
								<select class="form-control" placeholder="Gender" name="gender" >
								  <option value="">Gender</option>
								  <option value="Female" <?php if($gender=='Female'){echo "selected";}?>>Female</option>
								  <option value="Male" <?php if($gender=='Male'){echo "selected";}?>>Male</option>
								  <option value="Trans" <?php if($gender=='Trans'){echo "selected";}?>>Trans</option>
								</select>
							</div>
						</div>
						<div class="col-md-4 searchbox">
							<div class="p-5">
								<input type="text" class="form-control form-control-user" id="country" name="country" placeholder="Country of birth" value="<?php echo $country;?>">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
			<div class="row mb-3 mb-sm-0">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-4 searchbox">
							<div class="p-5">
								<select class="form-control" placeholder="Hair color" name="hair">
								   <option value="">Hair color</option>
								   <option value="black" <?php if($hair=='black'){echo "selected";}?>>black</option>
								  <option value="blonde" <?php if($hair=='blonde'){echo "selected";}?>>blonde</option>
								  <option value="white" <?php if($hair=='white'){echo "selected";}?>>white</option>
								  <option value="brown" <?php if($hair=='brown'){echo "selected";}?>>brown</option>
								  <option value="pink" <?php if($hair=='pink'){echo "selected";}?>>pink</option>
								</select>
							</div>
						</div>
						<div class="col-md-4 searchbox">
							<div class="p-5">
								<select class="form-control" placeholder="Skin color" name="skin">
								   <option value="">Skin color</option>
									  <option value="black" <?php if($skin=='black'){echo "selected";}?>>black</option>
									  <option value="white" <?php if($skin=='white'){echo "selected";}?>>white</option>
								</select>
							</div>
						</div>
						<div class="col-md-4 searchbox">
							<div class="p-5">
								<select class="form-control" placeholder="Eye color" name="eye">
								  <option value="">Eye color</option>
								  <option value="black" <?php if($eye=='black'){echo "selected";}?>>black</option>
								  <option value="blue" <?php if($eye=='blue'){echo "selected";}?>>blue</option>
								  <option value="green" <?php if($eye=='green'){echo "selected";}?>>green</option>
								  <option value="brown" <?php if($eye=='brown'){echo "selected";}?>>brown</option>
								  <option value="gray" <?php if($eye=='gray'){echo "selected";}?>>gray</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
			<div class="row mb-3 mb-sm-0">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-4 searchbox">
							<select class="form-control" placeholder="Hobbies" name="hobbies" >
							  <option value="">Hobbies</option>
							  <option value="Dancing" <?php if($hobbies=='Dancing'){echo "selected";}?>>Dancing</option>
							  <option value="Singing" <?php if($hobbies=='Singing'){echo "selected";}?>>Singing</option>
							  <option value="Other" <?php if($hobbies=='Other'){echo "selected";}?>>Other</option>
							</select>
						</div>
						<div class="col-md-4 searchbox">
							<select class="form-control" placeholder="Licence" name="Licence">
							  <option value="">Licence</option>
							  <option value="Yes" <?php if($Licence=='Yes'){echo "selected";}?>>Yes</option>
							  <option value="No" <?php if($Licence=='No'){echo "selected";}?>>No</option>
							</select>
						</div>
						<div class="col-md-4 searchbox">
							<input type="number" class="form-control form-control-user" id="age" name="age" placeholder="Maximal age" value="<?php echo $age;?>">
						</div>
					</div>
				</div>
			</div>
			<br>
    		<button class="btn btn-primary btn-user btn-block">
    			Search
    		</button>
    	</form><br>
		<hr>
		<br><br>
		<div class="wrapper d-flex align-items-stretch">

			<div id="msg"></div>
			<main id="clients" class="category-clients">
							   <?php
								$i = 1;
								if(!isset($_POST['search'])){
								$qry0 = $conn->query("SELECT COUNT(*) num FROM users");
								while($row= $qry0->fetch_assoc()):
									$rownum = $row['num'];
								endwhile;
								$qry = $conn->query("SELECT u.id,u.lname,u.fname,MAX(p.photo) photo FROM users u LEFT JOIN users_photo p ON u.id = p.id_user GROUP BY u.id,u.lname,u.fname");
								}else{
								    
								    $filter1 = "WHERE (fname like '%$name%' OR lname like '%$name%') ";
                            		foreach($_POST as $k => $v){
                            		    if(!empty($v)){
                                			if(!in_array($k, array('age','search','name')) && !is_numeric($k)){
                                				if($k =='password')
                                					$v = md5($v);
                                				if(empty($filter1)){
                                					$filter1 .= " $k='$v' ";
                                				}else{
                                					$filter1 .= "and $k='$v' ";
                                				}
                                			}
                            		    }
                            		}
                            		if(!empty($age)){
                            		$today = date("Y-m-d");
                            		if(empty($filter1)){
                                					$filter1 .= " dob > DATE_ADD('$today', INTERVAL -$age YEAR) ";
                                				}else{
                                					$filter1 .= "and dob > DATE_ADD('$today', INTERVAL -$age YEAR) ";
                                				}
                            		}
                            		$filter2 = "WHERE (u.fname like '%$name%' OR u.lname like '%$name%') ";
                            		foreach($_POST as $k => $v){
                            		    if(!empty($v)){
                                			if(!in_array($k, array('age','search','name')) && !is_numeric($k)){
                                				if($k =='password')
                                					$v = md5($v);
                                				if(empty($filter2)){
                                					$filter2 .= " u.$k='$v' ";
                                				}else{
                                					$filter2 .= "and u.$k='$v' ";
                                				}
                                			}
                            		    }
                            		}
                            		if(!empty($age)){
                            		$today = date("Y-m-d");
                            		        if(empty($filter2)){
                                					$filter2 .= " u.dob > DATE_ADD('$today', INTERVAL -$age YEAR) ";
                                				}else{
                                					$filter2 .= "and u.dob > DATE_ADD('$today', INTERVAL -$age YEAR) ";
                                				}
                            		}
								   	$qry0 = $conn->query("SELECT COUNT(*) num FROM users ".$filter1);
								while($row= $qry0->fetch_assoc()):
									$rownum = $row['num'];
								endwhile;
								$qry = $conn->query("SELECT u.id,u.lname,u.fname,MAX(p.photo) photo FROM users u LEFT JOIN users_photo p ON u.id = p.id_user $filter2 GROUP BY u.id,u.lname,u.fname");
 
								}
								echo $filter2;
								while($row= $qry->fetch_assoc()):
								?>
								<?php if($i % 4 == 1){ ?>
								 <div class="row actorsmobileview">
								<?php }  ?>
								
								<?php //if($i < 5){ ?>
									<div class="col-md-3 actors" id="actor-<?php echo $row['id']; ?>">
											<div class="container-<?php echo $row['id']; ?>  text-center">
												<style>
												.container-<?php echo $row['id']; ?> {
												  position: relative;
												  margin: 5px 0;
												}											
.container-<?php echo $row['id']; ?> img {
	width: 100% !important;
}

												.overlay-<?php echo $row['id']; ?> {
												  position: absolute;
												  top: 0;
												  bottom: 0;
												  left: 0;
												  right: 0;
												  height: 300px;
												  width: 100%;
												  opacity: 0;
												  transition: .5s ease;
												  background-color: #fff;
												}
.container-<?php echo $row['id']; ?> .overlay-<?php echo $row['id']; ?> {
	width: 100% !important;
}
												.container-<?php echo $row['id']; ?>:hover .overlay-<?php echo $row['id']; ?> {
												  opacity: 0.7;
												}

												@media screen and (max-width: 768px) {
													.overlay-<?php echo $row['id']; ?> {
														left: 0;
													}
													.container-<?php echo $row['id']; ?> img {
														width: 100% !important;
													}
													.container-<?php echo $row['id']; ?> .overlay-<?php echo $row['id']; ?> {
														width: 100% !important;
													}
												}
												</style>
											  <img src="./images/<?php echo $row['photo']; ?>" style="width:100%; height:300px;">
											  <div class="overlay-<?php echo $row['id']; ?> overlaymobile">
												
													
														<div class="mask">
															<div class="center-vert">
																<div class="center-vert-inside">
																	<div class="title playfair ">
																		<a href="view.php?id=<?php echo $row['id']; ?>">
																			<div class="text1"><small><?php echo $row['fname']; ?></small><br> <small><?php echo $row['lname']; ?> </small> </div>
																		</a>
																	</div>
																	<?php if($_SESSION['typee'] == 'director'){?>
																	<div class="add-to-cast-wrapper">
																		<a href="#" id="<?php echo $row['id']; ?>" onclick = "add_chart(<?php echo $row['id']; ?>)">
																			<div class="text2">ADD TO MY CAST</div>                                         
																		</a>
																	</div>
																	 <?php }?>
																</div>
															</div>
														</div>
													
												
											  </div>
											</div>
									</div>					
								<?php //} ?>
								<?php $i++; if($i % 4 == 1){ ?>
								</div>
								<?php /*$i=1;*/ }  ?>
								<?php endwhile; ?>
								
								<!-- <i class="ti-angle-left"/> -->
								<!-- <i class="ti-angle-right"/> -->
			</main>
			
		</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
		function add_chart(id){
			console.log(id);
			$.ajax({
				url:'ajax.php?action=add_chart',
				data: {id_user: id},
				method: 'POST',
				type: 'POST',
				success:function(resp){
					if(resp == 1){
						alert('Actor added successfully to your cart.');
						setTimeout(function(){
							location.replace('cart.php')
						},750)
					}else if(resp == 2){
						$('#msg').html("<div class='alert alert-danger' style='color:white !important;'>Actor already exist in your cart.</div>");
						setTimeout(function(){
							$('#msg').html("");
						},2000)
					}
				console.log(resp);
				}
			})
		}
	</script>

<script type='text/javascript' src='js/js5.js' id='em-js-js'></script>
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