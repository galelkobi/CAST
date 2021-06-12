<?php
session_start();
  include 'db_connect.php';
  if(!isset($_SESSION['login_id'])){
  $_SESSION['state'] = 'Sign In';
  }else{
  $_SESSION['state'] = 'Sign Out';
  }

  $message_sent=false;

  if(isset($_POST['email']) && $_POST['email'] != ''){
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
      $userName=$_POST['name'];
      $userEmail= $_POST['email'];
      $messeageSubject=$_POST['subject'];
      $message=$_POST['message'];

      $to = "einater@mta.ac.il";
      $body = "";
      

      $body .="From: ".$userName. "\r\n";
      $body .="Email: ".$userEmail. "\r\n";
      $body .="Message: ".$message. "\r\n";
  
      mail($to,$messeageSubject,$body);
      $message_sent=true;
    }
   

  }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://kit.fontawesome.com/2bca458f4e.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="main.js"></script>
    <style media="screen">
    :root{
  --font-color:#555;
  --font-hover-color:orange;
}
body{
  font-family:"Raleway", sans-serif;
  background-image:url(images/background/asklogin.png);
  background-size: cover;
}

.container{
    margin-top:50px;
    margin-left:auto;
	margin-right:auto;
	margin-bottom: 50px;
  width:500px;
  box-shadow: 0 15px 35px rgba(50,50,93,.1),0 5px 15px rgba(0,0,0,.07);
  padding:2em;
  background-color:#fff;
}
@media only screen and (max-width: 768px){
.container{
    margin-top:100px;
    margin-left:auto;
	margin-right:auto;
	margin-bottom:50px;
  width:500px;
  box-shadow: 0 15px 35px rgba(50,50,93,.1),0 5px 15px rgba(0,0,0,.07);
  padding:2em;
  background-color:#fff;
}
}
.form-group{
  margin-bottom:1.5em;
  transition:all .3s;
}
.form-label{
  font-size:.75em;
  color:var(--font-color);
  display:block;
  opacity:0;
  transition: all .3s;
  transform:translateX(-50px);
}
.form-control{
  box-shadow:none;
  border-radius:0;
  border-color:#ccc;
  border-style:none none solid none;
  width:100%;
  font-size:1.25em;
  transition:all .6s;
}
.form-control::placeholder{
  color:#aaa;
}
.form-control:focus{
  box-shadow:none;
  border-color:var(--font-hover-color);
  outline:none;
}
.form-group:focus-within{
  transform:scale(1.1,1.1);
}

.form-control:invalid:focus{
  border-color:red;
}
.form-control:valid:focus{
  border-color:green;
}

.btn{
  background: 0 0 #fff;
  border:1px solid #aaa;
  border-radius:3px;
  color:var(--font-color);
  font-size:1em;
  padding:10 50px;
  text-transform:uppercase;
}
.btn:hover{
  border-color:var(--font-hover-color);
  color:var(--font-hover-color);
}
textarea{
  resize:none;
}
.focused > .form-label{
  opacity:1;
  transform:translateX(0px);

}
.form-invalid{
  outline: :1px solid red !important;
}
@media only screen and (max-width: 420px){
	.container
	{
		width: 100%;
		margin-top: 0px;
	}
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
    				    <a href="int_list.php"><span class="fa fa-shopping-cart mr-3"></span> Interested list</a>
    				<?php }?>
			        <?php if($_SESSION['typee'] == 'director'){?>
    				 <a href="profile_director.php"><span class="fa fa-user  mr-3"></span> My profile</a>
    				<?php }else{?>
    				 <a href="profile.php"><span class="fa fa-user  mr-3"></span> My profile</a>
    				<?php }?>
    				<a href="about_us.php"><span class="fa fa-address-card mr-3"></span> About Us</a>
    				<a class="active" href="webform.php"><span class="fa fa-id-card-alt  mr-3"></span> Contact</a>
			  <?php }else{?>
			        <a href="homepage.php"><span class="fa fa-home mr-3"></span> Home</a>
			        <a href="about_us.php"><span class="fa fa-address-card mr-3"></span> About Us</a>
			        <a href="register.php"><span class="fa fa-registered  mr-3"></span> Register</a>
			        <a class="active" href="webform.php"><span class="fa fa-id-card-alt  mr-3"></span> Contact</a>
			  <?php }?>

				<?php if($_SESSION['state']=="Sign In"){  echo"<a href='login.php'><span class='fa fa-sign-in mr-3'></span> Sign In</a>";}else{
					  echo"<a href='logout.php'><span class='fa fa-sign-out mr-3'></span> Sign Out</a>";}?>
					  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
						<i class="fa fa-bars"></i>
					  </a>
			</div>
		</header><br>
		
  <?php
  if( $message_sent):
     ?>
  <h2 style="color:white; text-align:center;"> Thank's we'll be in touch! </h3>
  
  <?php
  else:
      ?>
       
      <div class="container">
          <h1> Contact Us</h1>
        <form action="webform.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input  type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" rows="15" cols="50" id="message" name="message" placeholder="Enter Message..." tabindex="4"></textarea>
            </div>
            <div>
                <button type="submit" class="btn">Send Message!</button>
            </div>
        </form>
    </div>
      
  
   
    
    <?php
    endif;

     ?>
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
