<?php 
session_start();
include 'db_connect.php';
	if(!isset($_SESSION['login_id'])){
	$_SESSION['state'] = 'Sign In';
	}else{
	$_SESSION['state'] = 'Sign Out';
	header('location:index.php');	
	}
	if(isset($_SESSION['login_id'])){
	     if($_POST['type']=='director'){
	header('location:profile_director.php');}else{
	    header('location:profile.php');
	}
	}
	if(!isset($_POST['type'])){
	header('location:ask_register.php');}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Register as an actor</title>
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
		.preview-image:hover > .image-zone {
			cursor: move;
			opacity: .5;
		}
		.preview-image:hover > .tools-edit-image,
		.preview-image:hover > .image-cancel {
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
		<div class="container">
					<form class="user" id="manage_user">
						<h2>Register as an Actor</h2>
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-4">
								<div class="p-5">
									<div class="text-center">
										<h4 class="h4 text-gray-900 mb-4" style="color:white">Qualifications and skills</h4>
									</div>								
										<div class="form-group row">
											<div class="col-sm-6">
												<input type="text" class="form-control form-control-user" id="languages" name="languages" 
													placeholder="Languages">
											</div>
											<div class="col-sm-6">
												
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<select class="form-control" placeholder="Dancing/singing" name="hobbies" >
												  <option value="">Dancing/singing</option>
												  <option value="Dancing">Dancing</option>
												  <option value="Singing">Singing</option>
												   <option value="other">Other</option>
												</select>
											</div>
											<div class="col-sm-6">
												<select class="form-control" placeholder="Licence" name="Licence">
												  <option value="">Licence</option>
												  <option value="Yes">Yes</option>
												  <option value="No">No</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<textarea type="date" class="form-control form-control-user" row="15" id="Other" name="Other"
													placeholder="About you.. "></textarea>
											</div>
											<div class="col-sm-6">

											</div>
										</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="p-5">
									<div class="text-center">
										<h4 class="h4 text-gray-900 mb-4"style="color:white" >Physical details</h4>
									</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<select class="form-control" placeholder="Gender" name="gender" >
												  <option value="">Gender</option>
												  <option value="Female">Female</option>
												  <option value="Male">Male</option>
												  <option value="Trans">Trans</option>
												</select>
											</div>
											<div class="col-sm-6">

											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<select class="form-control" placeholder="Eye color" name="eye">
												  <option value="">Eye color</option>
												  <option value="black">black</option>
												  <option value="blue">blue</option>
												  <option value="green">green</option>
												  <option value="brown">brown</option>
												  <option value="gray">gray</option>
												</select>
											</div>
											<div class="col-sm-6">
												<select class="form-control" placeholder="Hair color" name="hair">
												  <option value="">Hair color</option>
												   <option value="black">black</option>
												  <option value="blue">blonde</option>
												  <option value="green">white</option>
												  <option value="brown">brown</option>
												   <option value="pink">pink</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<select class="form-control" placeholder="Skin color" name="skin">
												  <option value="">Skin color</option>
												  <option value="black">black</option>
												  <option value="white">white</option>
												  
												</select>
											</div>
											<div class="col-sm-6">
												<input type="text" class="form-control form-control-user" id="height" name="height"
													placeholder="Height(cm)">
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="date" class="form-control form-control-user" id="dob" name="dob"
													placeholder="Date of Birthday">
											</div>
											<div class="col-sm-6">
												<input type="text" class="form-control form-control-user" id="country" name="country"
													placeholder="Country of birth">
											</div>
										</div><br>
										<div class="form-group">
											<div class="col-sm-6 mb-3 mb-sm-0" style="color:white">
												<label>Upload your photos <small>(format: jpg, jpeg, png)</small></label>
											<input type="file" name="photos[]" id="pro-image" class="form-control" multiple>
											</div>
											<div class="col-sm-6">
												 <div class="preview-images-zone">
													
												</div>
											</div>
										</div>
										
								</div>
							</div>
							<div class="col-md-2"></div>
						</div>
						
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-4">
								
							</div>
							<div class="col-md-4">
								<div class="p-5">
									<div class="text-center">
										<h4 class="h4 text-gray-900 mb-4" style="color:white">Login information</h4>
									</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="text" class="form-control form-control-user" id="fname" name="fname" 
													placeholder="First Name">
											</div>
											<div class="col-sm-6">
												
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="text" class="form-control form-control-user" id="lname" name="lname"
													placeholder="Last Name">
											</div>
											<div class="col-sm-6">
												
											</div>
										</div>
										<div class="form-group">
											<input type="text" class="form-control form-control-user" id="address" name="address" 
													placeholder="instagram">
										</div>
										<div class="form-group">
											<input type="text" class="form-control form-control-user" id="mobile" name="mobile" 
													placeholder="mobile">
										</div>
										<div class="form-group">
											<input type="text" class="form-control form-control-user" id="facebook" name="facebook" 
													placeholder="facebook">
										</div>
										<div class="form-group">
											<input type="email" class="form-control form-control-user" id="email" name="email"
												placeholder="Email Address">
										</div>
										<div class="form-group row">
											<div class="col-sm-6 mb-3 mb-sm-0">
												<input type="password" class="form-control form-control-user" name="password"
													id="exampleInputPassword" placeholder="Password">
											</div>
											<div class="col-sm-6">
												<input type="password" class="form-control form-control-user" name="cpass"
													id="exampleRepeatPassword" placeholder="Repeat Password">
													<small id="pass_match" data-status=''></small>
											</div>
										</div><br>
										<button class="btn btn-primary btn-user btn-block">
											Register Account
										</button>
									
									<hr>
									<div class="text-center">
										<a class="small" href="login.php">Already have an account? Login!</a>
									</div>
								</div>
							</div>
							<div class="col-md-2"></div>
						</div>

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
			e.preventDefault()
			$('input').removeClass("border-danger")
			$('#msg').html('')
			if($('#pass_match').attr('data-status') != 1){
				if($("[name='password']").val() !=''){
					$('[name="password"],[name="cpass"]').addClass("border-danger")
					end_load()
					return false;
				}
			}
			$.ajax({
				url:'ajax.php?action=save_user',
				data: new FormData($(this)[0]),
				cache: false,
				contentType: false,
				processData: false,
				method: 'POST',
				type: 'POST',
				success:function(resp){
					if(resp == 1){
						alert('Data successfully saved.');
						setTimeout(function(){
							location.replace('login.php')
						},750)
					}else if(resp == 2){
						$('#msg').html("<div class='alert alert-danger'>Email already exist.</div>");
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