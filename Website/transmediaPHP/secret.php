<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
?>
<!DOCTYPE html>
<html>
<title>OUTRAGEOUS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <script src="js/style.js"></script>
<!--///////////////////////////////-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}   

    
</style>
<!-- The scrollable area -->
<body data-spy="scroll" data-target=".navbar" data-offset="50">



<!-- Navbar -->

    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"> </a>
        
    </div>
    <div>
       <img src="logo.png" width="3.5%" align="left" id="logo" >
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#home">HOME</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#poll">POLL</a></li>
         <li><a href="#app">APP</a></li>
      <li><a href="articles.php">ARTICLES</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav> 

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
    <div id="home">
  <div class="mySlides w3-display-container w3-center">
    <img src="images/wall-2564902_1920.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3> <img src="images/logo.png" width="6%"><I>OUTRAGEOUS</I></h3>
      <p>THE STRUGGLER</p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="./images/guy.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3> <img src="images/logo.png" width="6%"><I>OUTRAGEOUS</I></h3>
      <p><b>THE MALE</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="./images/other.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3> <img src="images/logo.png" width="6%"><I>OUTRAGEOUS</I></h3>
      <p><b>THE QUESTIONED</b></p>    
    </div>
  </div>
      <div class="mySlides w3-display-container w3-center">
    <img src="./images/alien.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3> <img src="images/logo.png" width="6%"><I>OUTRAGEOUS</I></h3>
      <p><b>THE FOREIGNER</b></p>    
    </div>
  </div>
      <div class="mySlides w3-display-container w3-center">
    <img src="./images/female.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
        <h3> <img src="images/logo.png" width="6%"><I>OUTRAGEOUS</I></h3>
      <p><b>THE FEMALE</b></p>    
    </div>
  </div>
        </div>
     <!-- video section-->
       <div id="videocontainer">
           <h3 style="text-align: center">Welcome to outrageous secret page</h3>
       <video controls poster="/images/thumb.png" controls="controls" preload="none" onclick="this.play()"> <!-- this controls video loop-->
           <source src="intro.mp4" type="video/mp4" >
           your browser does not support HTML5 video.
           </video>
       </div>
    <!-- end of video section-->


</body>
</html>











