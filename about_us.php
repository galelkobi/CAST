<?php 
session_start();
include 'db_connect.php';
	if(!isset($_SESSION['login_id'])){
	$_SESSION['state'] = 'Sign In';
	}else{
	$_SESSION['state'] = 'Sign Out';	
	}
	
?>
<html dir="ltr" lang="en">

<head>
  <title>CAST|About</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta charset="utf-8"/>
  <meta content="IE-edge" http-equiv="X-UA-Compatible"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <link rel="stylesheet" type="text/css" href="css/aboutus.css">
  <script src="https://kit.fontawesome.com/2bca458f4e.js" crossorigin="anonymous"></script>
  <!-- google fonts
  font-family: 'Montserrat', sans-serif;
  font-family: 'Varela Round', sans-serif;-->
  <link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&family=Varela+Round&display=swap" rel="stylesheet">
 <script src="js/jquery.js"></script>
   <script src="js/jquery-ui.min.js"></script>



</head>

<body>

  <!--NAVBAR-->
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
    				<a class="active" href="about_us.php"><span class="fa fa-address-card mr-3"></span> About Us</a>
    				<a href="webform.php"><span class="fa fa-id-card-alt  mr-3"></span> Contact</a>
			  <?php }else{?>
			        <a href="homepage.php"><span class="fa fa-home mr-3"></span> Home</a>
			        <a class="active" href="about_us.php"><span class="fa fa-address-card mr-3"></span> About Us</a>
			        <a  href="homepage.php#download "><span class="fa fa-video mr-3"></span> Video</a>
			         <a  href="homepage.php#soon "><span class="fa fa-arrow-right mr-3"></span> Soon</a>
			         <a  href="homepage.php#features "><span class="fa fa-check mr-3"></span> Benefits</a>
			         <a  href="homepage.php#testimonials "><span class="fa fa-quote-right mr-3"></span> Opinions</a>
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





  <section>


    <div class="content">
      <h2 class="mt-5">About Us</h2>

      <span class="border">
        <!-- line -->
      </span>

      <p>


        Our site is where dreams come true <br>
        Anyone who comes from the world of acting and stage knows how difficult it is to really succeed in showing your true talent to professionals.<br>
        A new player at the beginning of his career needs to go through several "intermediaries" to get an audition summons. The process is often long and even there some agency that there is a preferred player who will receive more summonses in advance. <br>
        That's why we set up the CAST platform!<br>This platform simulates a casting agency which has two registration forms: actor and director.<br>
        This platform meets the need of the actors and cast in the world of stage and acting and creates an equal opportunity, a technological solution to a process that is usually performed manually, and multiple options for both parties (actor and director).<br>
        Of course, the best cast are with us, in search of the perfect actor for the perfect role.<br>
        Today, there is no platform in the market that offers immediate match between actor and cast according to filtering and matching criteria (skills and appearance) so our platform takes care to do that!<br>
        As a player you can sign up for the site and our platform will automatically create your own page with photos you have uploaded and criteria you have set and even look who added you to his CAST.<br>
        As a director you can sign up for CAST and filter actors according to your personal preference using pre-defined criteria! You can add the players you choose to the "shopping cart", watch them anytime, anywhere and even send them an email and get a meeting with them!!
        So, what are you waiting for?<br> Sign up today and join a large and supportive family.<br>



      </p>

      <ul class="links">


        <li><a href="webform.php">Contact Us</a></li>
      </ul>
      <br>

      
    </div>
  </section>

  <!--our team section-->
  <div class="team-section">
    <h1 class="mt-5">Our Team</h1>
    <span class="line">
      <!-- line -->
    </span>
    <div class="ps">
      <a href="#p1">
        <img src="images/home/einat.jpeg" alt="managerEinatErlich">
      </a>
      <a href="#p2">
        <img src="images/home/gal.jpeg" alt="managerEinatErlich">
      </a>
      <a href="#p3">
        <img src="images/home/hadar.jpeg" alt="managerEinatErlich">
      </a>
    </div>


    <div class="section" id="p1">
      <span class="name1">Einat Erlich</span>
      <span class="line"> </span>
      <p>
          25 years old, lives in Old Jaffa,Israel.<br>
          In my free time I like to watch series and bake.<br>
          I opened my first bakery 3 years ago where I was able to fulfill all my fantasies.<br>
          My business gives me the best feeling in the world and makes me get up every morning with a smile.<br>
          My motto: "Living is one of the rarest things, most people just exist."<br>
   
      </p>
    </div>

    <div class="section" id="p2">
      <span class="name1">Gal Elkobi</span>
      <span class="line"> </span>
      <p>
       27 years old, lived in Tel Aviv for several years.<br>
       I originally grew up in a small seat in the south where everything is green.<br>
       I always dreamed of being an actress but where I came from it was not so acceptable.<br>
       I promised myself that when I grew up I would learn acting and open an acting school under my management.<br>
       I studied acting and school is still an ambition that I will also achieve.<br>
       Currently works as a graphic designer for a start-up company.<br>
       My motto: "Watch for the best, prepare for the worst and take advantage of everything that comes".<br>
            </p>
    </div>

    <div class="section" id="p3">
      <span class="name1">Hadar Weinberg</span>
      <span class="line"> </span>
      <p> 26 years old, lives in Rishon Lezion.<br> 
      Love to cook and travel. Two years ago I started working in fashion.<br>
      Today I have my own clothing line. I will soon open my sales to more cities and develop into a big business.<br>
      If I had the option, I would move to France to open the clothing boutique I dream of.<br>
      My motto: "You will never find a rainbow in the cloud if you look down ..."<br>

      </p>
    </div>

  </div>
  <div>
     <footer style="width:85%;
      margin:auto; ">
     <p class="text-center mt-3" style="color:white">©ALL RIGHTS RESERVED TO CAST</p>
  </footer>
  </div>

   
  </div>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="../java/javafile.js" charset="utf-8"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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