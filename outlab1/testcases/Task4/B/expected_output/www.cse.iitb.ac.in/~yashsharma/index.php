<!DOCTYPE html>
<html lang="en">
<head>
	<title>Yash Sharma's Homepage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                   
      </button>
      <a class="navbar-brand" href="index.php#">Yash Sharma</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php#">Home</a></li>
        <li><a href="bio.html">A Boring Bio</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="index.php#">What Makes Me Interesting<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="interests.html">Interests and Favourites</a></li>
            <li><a href="interests.html#ambitions">Ambitions</a></li>
            <li><a href="interests.html#pastimes">Pastimes</a></li>
          </ul>
        </li>
        <li><a href="academics.html">Academics</a></li>
        <li><a href="myprojects.html">My Projects</a></li>
        <li><a href="contact.html">Contact Me</a></li>
        <li><a href="feedback.php">Send a Feedback!</a></li>
        <li><a href="allfeedbacks.php">View All Feedbacks</a></li>
        <li><a href="resume.pdf">Resume</a></li>
      </ul>
      
    </div>
  </div>
</nav>
	<div class="container-fluid bg-1 text-center" id="me">
		<div class="caption">
      <span class="border">Who Am I?</span>  
    </div>
    <br>
    <br>
    <br>
    <br>
    <div>
    <img src="solo.jpg" alt="Me" class="img-responsive img-circle margin" style="display:inline" ></div>
    <div class="popup caption" onclick="myFunction()"><span class="border">A Student. An Enthusiast. A Believer.</span>
      <span class="popuptext" id="myPopup">Now that I can't let you down further, let me introduce myself. I am Yash Sharma, a <a href="http://www.cse.iitb.ac.in" target="_blank"> Computer Science</a> Undergraduate  <a href="http://www.iitb.ac.in" target="_blank">IIT Bombay</a>. I was born in Kolkata, and I have lived most of my life in Hyderbad. Curiosity is what makes us human, and certainly what drives me.</span>
    </div>

    <script>
    // When the user clicks on div, open the popup
    function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }
    </script>
	</div>  
  <div class="container-fluid bg-2 text-center">
      <div>
      <blockquote class="blockquote" id="#internetquote">
        <p>"Pics or it didn't happen."<footer class="internetfooter"><i>The Internet (circa 2017)</i></footer></p>
      </blockquote>
      </div>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" style="width: 90%;">

          <div class="item active">
            <img src="family.jpg" alt="Family" style="width:100%;">
            <div class="carousel-caption">
              <h3>Family</h3>
              <p>They did everything for me, I do everything for them</p>
            </div>
          </div>

          <div class="item">
            <img src="friends.jpg" alt="Aditya Birthday" style="width:100%;">
            <div class="carousel-caption">
              <h3>Friends</h3>
              <p>What is life wihtout buddies</p>
            </div>
          </div>
          <div class="item">
            <img src="friends2.jpg" alt="MyBirthday" style="width:100%;">
            <div class="carousel-caption">
              <h3>Friends</h3>
              <p>What is life without buddies</p>
            </div>
          </div>
          <div class="item">
            <img src="ayushandme.jpg" alt="Ayus" style="width:100%;">
            <div class="carousel-caption">
              <h3>Men In Black</h3>
              <p>Elegance is an acquired attribute</p>
            </div>
          </div>
          <div class="item">
            <img src="electrical.jpg" alt="Electrical" style="width:100%;">
            <div class="carousel-caption">
              <h3>Electrical Department Kurta Day</h3>
              <p>Throwback to my time in the EE department of IITB!</p>
            </div>
          </div>
      
        </div>
      </div>
  </div>
	<div class="container bg-3">
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <br><br><br>
	</div>
  <div class="container bg-4">
      <span class="ending">Oh fun fact: This page has been accessed 1402 time(s) since the last time I reset the timer. Maintained using PHP. Liked this page? How can I improve on this? Give a feedback <a href="feedback.php">here</a>, and view all past feedbacks <a href="allfeedbacks.php">here</a></span>
  </div>
	<!-- <div id="content-3" style="position:relative; width:100%; background-color:white;">
	  <div class="content" style="color: #222;">
	    You can reach me at
	    <p style="padding-left:4%">
	    Bye
	    </p>

	    <a href="https://www.linkedin.com/in/yash-sharma-b2bb04157/" target="_blank">
	        <i class="fab fa-linkedin-in fa-2x"></i></a>
	    <a href="https://github.com/yash-s20" target="_blank">
	        <i class="fab fa-github fa-2x"></i></a>

	    <p>Hi</p>
	  </div> -->

  
</body>
</html>
