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
  	<title>Update your profile</title>
    <meta charset="UTF-8" />
	<link rel="stylesheet" href="css/style.css"/>
	<script src="https://kit.fontawesome.com/2bca458f4e.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
 
  </head>
	<style> 
	    body{
             
                background-image: url(../images/background/registration.png);
                height: 100vh;
                background-size: 100% 100%;
                background-position: center;
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
		
		.preview-images-zone {
			width: 100%;
			border: 1px solid #ddd;
			min-height: 180px;
			/* display: flex; */
			padding: 5px 5px 0px 5px;
			position: relative;
			overflow:auto;
		}
		.preview-images-zone > .preview-image:first-child {
			height: 185px;
			width: 185px;
			position: relative;
			margin-right: 5px;
		}
		.preview-images-zone > .preview-image {
			height: 90px;
			width: 90px;
			position: relative;
			margin-right: 5px;
			float: left;
			margin-bottom: 5px;
		}
		.preview-images-zone > .preview-image > .image-zone {
			width: 100%;
			height: 100%;
		}
		.preview-images-zone > .preview-image > .image-zone > img {
			width: 100%;
			height: 100%;
		}
		.preview-images-zone > .preview-image > .tools-edit-image {
			position: absolute;
			z-index: 100;
			color: #fff;
			bottom: 0;
			width: 100%;
			text-align: center;
			margin-bottom: 10px;
			display: none;
		}
		.preview-images-zone > .preview-image > .image-cancel {
			font-size: 18px;
			position: absolute;
			top: 0;
			right: 0;
			font-weight: bold;
			margin-right: 10px;
			cursor: pointer;
			display: none;
			z-index: 100;
		}
		.preview-images-zone > .preview-image > .image-cancel-s {
			font-size: 18px;
			position: absolute;
			top: 0;
			right: 0;
			font-weight: bold;
			margin-right: 10px;
			cursor: pointer;
			display: none;
			z-index: 100;
		}
		.preview-image:hover > .image-zone {
			cursor: move;
			opacity: .5;
		}
		.preview-image:hover > .tools-edit-image,
		.preview-image:hover > .image-cancel {
			display: block;
		}
		.preview-image:hover > .tools-edit-image,
		.preview-image:hover > .image-cancel-s {
			display: block;
		}
		.ui-sortable-helper {
			width: 90px !important;
			height: 90px !important;
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
    				 <a class="active" href="profile_director.php"><span class="fa fa-user  mr-3"></span> My profile</a>
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
		<?php
		$i = 1;
		$qry = $conn->query("SELECT u.*,p.photo FROM users_director u LEFT JOIN users_director_photo p ON u.id = p.id_user WHERE u.id='".$_SESSION['login_id']."' LIMIT 1");

			while($row= $qry->fetch_assoc()):
				$lname = $row['lname'];
				$fname = $row['fname'];
				$photo = $row['photo'];
				$id = $row['id'];
				$facebook = $row['facebook'];
				$gender = $row['gender'];
				$dob = $row['dob'];
				$address = $row['address'];
				$y_experience = $row['y_experience'];
				$Other = $row['Other'];
				$country = $row['country'];
				$email = $row['email'];
				$mobile = $row['mobile'];
			endwhile;
		?>
		<h2>Update your profile</h2>
		<div class="container" >
					<form class="user" id="manage_user">
						
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-4" style="border:solid !important; padding:10px !important;margin:10px !important;">
								<div class="p-5">
									<div class="text-center">
										<h4 class="h4 text-gray-900 mb-4">Qualifications and skills</h4>
									</div>								
										<div class="form-group row">
											<div class="col-sm-6">
												<input type="text" class="form-control form-control-user" id="y_experience" name="y_experience" 
													placeholder="Years experience" value="<?php echo $y_experience;?>">
											</div>
											<div class="col-sm-6">
												
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<textarea type="date" class="form-control form-control-user" row="15" id="Other" name="Other"
													placeholder="About You"><?php echo $Other;?></textarea>
											</div>
											<div class="col-sm-6">

											</div>
										</div>
								</div>
							</div>
							<div class="col-md-4" style="border:solid !important; padding:10px !important;margin:10px !important;">
								<div class="p-5">
									<div class="text-center">
										<h4 class="h4 text-gray-900 mb-4">Physical details</h4>
									</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<select class="form-control" placeholder="Gender" name="gender" >
												  <option value="">Gender</option>
												  <option value="Female" <?php if($gender=='Female'){echo "selected";}?>>Female</option>
												  <option value="Male" <?php if($gender=='Male'){echo "selected";}?>>Male</option>
												  <option value="Trans" <?php if($gender=='Trans'){echo "selected";}?>>Trans</option>
												</select>
											</div>
											<div class="col-sm-6">

											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="date" class="form-control form-control-user" id="dob" name="dob"
													placeholder="Date of Birthday" value="<?php echo $dob;?>">
											</div>
											<div class="col-sm-6">
												<input type="text" class="form-control form-control-user" id="country" name="country"
													placeholder="Country of birth" value="<?php echo $country;?>">
											</div>
										</div><br>
										
										<div class="form-group">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<label>Upload your photos <small>(format: jpg, jpeg, png)</small></label>
											<input type="file" name="photos[]" id="pro-image" class="form-control" multiple>
											</div>
											<div class="col-sm-6">
												
												 <div class="preview-images-zone">
													 <?php
														$i = 1;
														$qry = $conn->query("SELECT p.id,p.photo FROM users_director u LEFT JOIN users_director_photo p ON u.id = p.id_user WHERE u.id='".$_SESSION['login_id']."'");

														while($row= $qry->fetch_assoc()):
															echo "<div class='preview-image preview-show-" . $row['id'] . "'>" .
																"<div class='image-cancel-s' data-no='" . $row['id'] . "'>x</div>" .
																"<div class='image-zone'><img id='pro-img-" . $row['id'] . "' src='./images/" . $row['photo'] . "'></div>" .
																"</div>";
														endwhile;
													?>
												</div>
											</div>
										</div>
										
								</div>
							</div>
							<div class="col-md-2"></div>
						</div>
						
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-4" style="padding:10px !important;margin:10px !important;">
								
							</div>
							<div class="col-md-4" style="border:solid !important; padding:10px !important;margin:10px !important;">
								<div class="p-5">
									<div class="text-center">
										<h4 class="h4 text-gray-900 mb-4">Login information</h4>
									</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="text" class="form-control form-control-user" id="fname" name="fname" 
													placeholder="First Name" value="<?php echo $fname;?>">
											</div>
											<div class="col-sm-6">
												
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="text" class="form-control form-control-user" id="lname" name="lname"
													placeholder="Last Name" value="<?php echo $lname;?>">
											</div>
											<div class="col-sm-6">
												
											</div>
										</div>
										<div class="form-group">
											<input type="text" class="form-control form-control-user" id="address" name="address" 
													placeholder="address" value="<?php echo $address;?>">
										</div>
										<div class="form-group">
											<input type="text" class="form-control form-control-user" id="mobile" name="mobile" 
													placeholder="mobile" value="<?php echo $mobile;?>">
										</div>
										<div class="form-group">
											<input type="text" class="form-control form-control-user" id="facebook" name="facebook" 
													placeholder="facebook" value="<?php echo $facebook;?>">
										</div>
										<div class="form-group">
											<input type="email" class="form-control form-control-user" id="email" name="email"
												placeholder="Email Address" value="<?php echo $email;?>">
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="password" class="form-control form-control-user" name="password" required
													id="exampleInputPassword" placeholder="Password">
											</div>
											<div class="col-sm-6">
												<input type="password" class="form-control form-control-user" name="cpass" required
													id="exampleRepeatPassword" placeholder="Repeat Password">
													<small id="pass_match" data-status=''></small>
											</div>
										</div><br>
									<hr>
								</div>
							</div>
							<div class="col-md-2"></div>
						</div>
						<button class="btn btn-primary btn-user btn-block">
							Update
						</button>
					</form>
			
		</div>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<script>
		$('[name="password"],[name="cpass"]').keyup(function(){
			var pass = $('[name="password"]').val()
			var cpass = $('[name="cpass"]').val()
			if(cpass == '' ||pass == ''){
				$('#pass_match').attr('data-status','')
			}else{
				if(cpass == pass){
					$('#pass_match').attr('data-status','1').html('<i class="text-success">Password Matched.</i>')
				}else{
					$('#pass_match').attr('data-status','2').html('<i class="text-danger">Password does not match.</i>')
				}
			}
		})
		function displayImg(input,_this) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#cimg').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}
		$('#manage_user').submit(function(e){
		    console.log(1);
			e.preventDefault();
			$('input').removeClass("border-danger");
			$('#msg').html('');
			if($('#pass_match').attr('data-status') != 1){
				if($("[name='password']").val() !=''){
					$('[name="password"],[name="cpass"]').addClass("border-danger");
					return false;
				}
			}
			$.ajax({
				url:'ajax.php?action=update_user_director',
				data: new FormData($(this)[0]),
				cache: false,
				contentType: false,
				processData: false,
				method: 'POST',
				type: 'POST',
				success:function(resp){
					if(resp == 1){
						alert('Profile successfully updated.');
						setTimeout(function(){
							location.replace('profile_director.php')
						},750)
					}else if(resp == 2){
						$('#msg').html("<div class='alert alert-danger'>Profile update failed.</div>");
						$('[name="email"]').addClass("border-danger")
					}
				console.log(resp);
				}
			})
		})
		$(document).ready(function() {
			document.getElementById('pro-image').addEventListener('change', readImage, false);
			
			$( ".preview-images-zone" ).sortable();
			
			$(document).on('click', '.image-cancel', function() {
				let no = $(this).data('no');
				$(".preview-image.preview-show-"+no).remove();
			});
			$(document).on('click', '.image-cancel-s', function() {
				let no = $(this).data('no');
				$(".preview-image.preview-show-"+no).remove();
				$.ajax({
					url:'ajax.php?action=delete_photo_director',
					data: {id_photo: no},
					method: 'POST',
					type: 'POST',
					success:function(resp){
						if(resp == 1){
							alert('photo deleted.');
						}
					console.log(resp);
					}
				})
			});
		});



		var num = 1;
		function readImage() {
			if (window.File && window.FileList && window.FileReader) {
				var files = event.target.files; //FileList object
				var output = $(".preview-images-zone");

				for (let i = 0; i < files.length; i++) {
					var file = files[i];
					if (!file.type.match('image')) continue;
					
					var picReader = new FileReader();
					
					picReader.addEventListener('load', function (event) {
						var picFile = event.target;
						var html =  '<div class="preview-image preview-show-' + num + '">' +
									'<div class="image-cancel" data-no="' + num + '">x</div>' +
									'<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
									'</div>';

						output.append(html);
						num = num + 1;
					});

					picReader.readAsDataURL(file);
				}
			} else {
				console.log('Browser not support');
			}
		}

	</script>

  </body>
 
</html>