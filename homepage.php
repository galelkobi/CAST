<?php 
session_start();
include 'db_connect.php';

	if(!isset($_SESSION['login_id'])){
	$_SESSION['state'] = 'Sign In';
	}else{
	$_SESSION['state'] = 'Sign Out';	
	}


?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8"/>
  <meta content="IE-edge" http-equiv="X-UA-Compatible"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  
  <title>CAST</title>
   
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/2bca458f4e.js" crossorigin="anonymous"></script>
  <!--load all styles from the website font awsome icons -->
<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- google fonts
  font-family: 'Montserrat', sans-serif;
  font-family: 'Varela Round', sans-serif;
  font-family: 'Amatic SC', cursive;-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&family=Varela+Round&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
  
  
 
</head>

<body>

	<header>
			<div class="topnav" id="myTopnav">
			    <?php if(isset($_SESSION['login_id'])){?>
			        <a class="active" href="homepage.php"><span class="fa fa-home mr-3"></span> Home</a>
			        
			         
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
			        <a class="active" href="homepage.php"><span class="fa fa-home mr-3"></span> Home</a>
			        <a href="about_us.php"><span class="fa fa-address-card mr-3"></span> About Us</a>
			        <a  href="#download "><span class="fa fa-video mr-3"></span> Video</a>
			         <a  href="#soon "><span class="fa fa-arrow-right mr-3"></span> Soon</a>
			         <a  href="#features "><span class="fa fa-check mr-3"></span> Benefits</a>
			         <a  href="#testimonials "><span class="fa fa-quote-right mr-3"></span> Opinions</a>
			     
			        <a href="register.php"><span class="fa fa-registered  mr-3"></span> Register</a>
			        <a href="webform.php"><span class="fa fa-id-card-alt  mr-3"></span> Contact</a>
			  <?php }?>

				<?php if($_SESSION['state']=="Sign In"){  echo"<a href='login.php'><span class='fa fa-sign-in mr-3'></span> Sign In</a>";}else{
					  echo"<a href='logout.php'><span class='fa fa-sign-out mr-3'></span> Sign Out</a>";}?>
					  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
						<i class="fa fa-bars"></i>
					  </a>
			</div>
		</header>
			
			   
	


  <div class="container1-fluid">
    <section id="title">
      
      <div class="title">
         
      
        <h1 style="font-size:10vw; "
        class="mt-15">
          CAST
        </h1>
        
        <a href="ask_login.php" class="btn">SIGN IN</a>
        <a href="ask_register.php" class="btn">Register</a>

      </div>
    </section>
  </div>


  <section id="download">
    <div class="container2-fluid">
      <div class=" videoArea">
              <iframe width="650" height="450" src="https://www.youtube.com/embed/GiIwKEM_ps0">
              </iframe>
          </div>
</div>
</div>
		  <section id="soon"  style="background-color:#696969; color:white; text-align:center;" >
     <div class="container2-fluid">
      <div class="row">
        <div class="col-lg-6">

            <h2>
           A Platform for finding 
             <br>
             the BEST actor
            <br>
            for your cast.
            <br>
                          CAST  
            <br>
            So easy.
            <br>
            
            <br>
            SOON at Google play and AppStore.
                        <br>
                        stay tuned! (:



          </h2>
          </div>



        <div class="col-lg-6">
          <div>
            <img class="iphone" src="images/home/PHONESOON.png" alt="iphone-mockup">
          </div>
        </div>
      </div>
    </div>

  </section>

  <section id="features">
    <div class="row">


      <div class="feature-box col-lg-4 col-md-4">
        <i class="icon far fa-check-circle fa-4x"></i>

        <h3>Easy For Use:</h3>
        <p>
          Optimizing times in the casting process, performing steps quickly and efficiently for the actors and the cast..
        </p>
      </div>
      <div class="feature-box col-lg-4 col-md-4">
        <i class=" icon fas fa-stopwatch fa-4x"></i>


        <h3>Saving Time</h3>

        <p>No need to go for an audition anymore! Everything happens online!</p>
      </div>
      <div class="feature-box col-lg-4 col-md-4">
        <i class=" icon fas fa-coins fa-4x"></i>
        <!--ה FA 4X זה כדי לשנות את הגודל-->
        <h3>Saving Money</h3>
        <p>Forget about the agency's high fees. The site is free!</p>

      </div>


    </div>
  </section>

  <!-- Testimonials  המלצות וציטוטים-->

  <section id="testimonials">
    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2 class="testimonial-text">"I no longer have to break my head and sort actors every time, in just one week I was able to launch a new production with actors from the site!"</h2>
          <img class="testimonial-image" src="images/home/vital.jpg" alt="vital-profile">
          <em>Vital Erlich, Director</em>

        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">"I never thought it would be so easy to be auditioned! You saved me money and time! It's a dream come true."</h2>
          <img class="testimonial-image" src="images/home/omer.jpg" alt="omer-profile">
          <em>Omer Katanov, Actor</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">"I screened players according to criteria I chose and discovered so many talents that I probably would never find in life, wow!"</h2>
          <img class="testimonial-image" src="images/home/gal.jpeg" alt="gal-profile">
          <em>Gal Elkobi ,Director</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">"Since i starts to use  the site, I was easily accepted into a number of different roles! I was exposed to a wide variety of auditions"</h2>
          <img class="testimonial-image" src="images/home/einat.jpeg" alt="einat-profile">
          <em>Einat Erlich, Actress</em>
        </div>
        <div class="carousel-item">
          <h2 class="testimonial-text">"OMG! with the help of CAST I was finally ready for auditions! Already this week I got 5 auditions! Amazing!"
          </h2>
          <img class="testimonial-image" src="images/home/hadar.jpeg" alt="hadar-profile">
          <em>Hadar Weinberg, Actress </em>
        </div>
      </div>

      <a class="carousel-control-prev" href="#testimonial-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>

      </a>
      <a class="carousel-control-next" href="#testimonial-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>

      </a>
    </div>




  </section>

 
   
<footer style="width:100%; margin:auto; background: black !important; color: white;">
     <p class="text-center pt-3 pb-3" style="margin-bottom: 0;">&copy; ALL RIGHTS RESERVED TO CAST</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src = "java/func1.js.js"></script>
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


