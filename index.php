<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BART MIDDELBERG - PORTFOLIO</title>
    <meta name="viewport" content="width=device-width" />
    <link rel="shortcut icon" href="images/BM_250.png" />
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">
    <link rel="stylesheet" href="css/home.css" type="text/css">
    <link rel="stylesheet" href="css/aboutme.css" type="text/css">
    <link rel="stylesheet" href="css/portfolio.css" type="text/css">
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
  </head>
  <body>

    <div id="name">
    <h1>BART MIDDELBERG</h1>
    </div>


    <div class="m1 menu">
    <div id="menu-center">
        <ul>
            <!-- <li><a class="active" href="#LOGO" id="naamlogo">BART</a></li> -->
            <li><a class="active" href="#home">HOME</a></li>
            <li><a href="#about">ABOUT ME</a></li>
            <li><a href="#portfolio">PROJECTS</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </div>
</div>



<div id="home">
    <h1>WELCOME</h1>
    <h2>TO MY</h2>
    <h3>PORTFOLIO</h3>
</div>


<div id="about">
  <h1>ABOUT ME</h1>
  <img id="ikfoto" src="https://image.ibb.co/cTdC56/bart.jpg" alt="Bart" align="left">
  <div class="outer">
  <div class="inner"></div>
</div>
<p class="aboutme">
<h2 id="hello">HELLO!</h2> <div id="aboutme"><h3 id="Myname">My name is Bart Middelberg.
<h3 id="Studying">I am studying Media Development.<h3 id="Mediacollege">I do this at the MediaCollege in Amsterdam.
<h3 id="Skills">My skills are HTML, CSS and PHP.<h3 id="Love">I also love making logos and creating web designs.</div></p>
  <img id="ikfotomobile" src="https://image.ibb.co/cTdC56/bart.jpg" alt="Bart">
</div>

<div id="portfolio">
  <h1>PROJECTS</h1>

  <div class="polaroid">
  <img src="images/MyBand.JPG" alt="MyBand" style="width:100%">
  <div class="container">
    <h2 id="title2">MYBAND</h2>
    <h3 id="band1">A couple of months ago we got this project.</h3></br>
      <h3 id="band2">With this project we had to make a forum website.</h3></br>
      <h3 id="band3">We got the opportunity to be creative,</h3></br>
      <h3 id="band4">And give a slight twist to our website.</h3></br>
      <h3 id="band5">I chose to make a website for FIFA gamers.</h3></br>
      <a href="http://22045.hosts.ma-cloud.nl/MyBand" id="link">GO TO WEBSITE</a>
  </div>
</div>

<div class="polaroid">
<img src="images/InstaOns.JPG" alt="InstaOns" style="width:100%">
<div class="container">
  <h2 id="title2">INSTAONS</h2>
  <h3 id="insta1">Last year we got a project to create our own InstaGram.</h3></br>
    <h3 id="insta2">The name of the project was called InstaClone.</h3></br>
    <h3 id="insta3">I tried to make it look as clean as possible,</h3></br>
    <h3 id="insta4">And I feel like I did a good job on that.</h3></br>
    <h3 id="insta5">This is the best looking website I have made.</h3>
    <a href="http://22045.hosts.ma-cloud.nl/InstaOns" id="link">GO TO WEBSITE</a>
</div>
</div>

<div class="polaroid">
<img src="images/Gastenboek.JPG" alt="Gastenboek" style="width:100%">
<div class="container">
  <h2 id="title2">GUESTBOOK</h2>
  <h3 id="guest1">This was a challenge to test our PHP skills.</h3></br>
    <h3 id="guest2">I made a website where people could leave a message.</h3></br>
    <h3 id="guest3">So I decided to make it into a good looking website.</h3></br>
    <h3 id="guest4">I want to show that I am able to use a database.</h3></br>
    <h3 id="guest5">And show all the messages that people posted.</h3>
    <a href="http://22045.hosts.ma-cloud.nl/gastenboek" id="link">GO TO WEBSITE</a>
</div>
</div>
</div>


<div id="contact">
  <h1 id="CONTACTME">CONTACT ME</h1>

  <form enctype="multipart/form-data" method="post" action="index.php#contact">
  <div id="textbox">
    <label id="label">   NAME:</label></br>
  <input type="text" id="invoer" name="username"/></br></br>
    <label id="label">  EMAIL:</label></br>
  <input type="text" id="invoer" name="email"/></br></br>
    <label id="label">MESSAGE:</label></br>
  <textarea name="message" id="invoerarea" rows="4"></textarea>
  <input type="submit" id="button" name="submit" value="SEND"/>
  </div>
</form>

  <?php
  if(isset($_POST['submit'])){
      $dbc = mysqli_connect('localhost', 'bartuser', 'bartuser', 'myfifa') or die ('Error!');
      $username = mysqli_real_escape_string($dbc,trim($_POST['username']));
      $email = mysqli_real_escape_string($dbc,trim($_POST['email']));
      $message = mysqli_real_escape_string($dbc,trim($_POST['message']));
      if (!empty($username)){
              $query = "INSERT INTO contact VALUES (0,'$username','$email','$message')";
              $result = mysqli_query($dbc,$query) or die ('Error querying.');
              echo '<h1 id="sendedtext">MESSAGE HAS BEEN SENDED!</h1>';
          }
      }
  ?>
</div>

<script src="script.js"></script>

<footer>
  <img src="images/footer.png" alt="footer-img"/>
  <h1>CopyRight Bart Middelberg - All Rights Reserved. </h1>
</footer>
  </body>
</html>
