<?php
require 'vendor/autoload.php';
include 'bootstrap.php';
use Sinergi\BrowserDetector\Browser;
use Sinergi\BrowserDetector\Os;

$os = new Os();
$browser = new Browser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guest Book</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Guest Book</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">List</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Guest Book</h1>      
  </div>
  <div class = "container">
  <form id="guestFrm" action="guest">
  	<div class="form-group">
      <label for="guestName"><span class="glyphicon glyphicon-user"></span> Name:</label>
      <input type="text" class="form-control" id="guestName" placeholder="John Cage" name="guestName">
    </div>
    <div class="form-group">
      <label for="guestAddress"><span class="glyphicon glyphicon-home"></span> Address:</label>
      <input type="text" class="form-control" id="guestAdress" placeholder="e.g. 111 cook st" name="guestAdress">
    </div>
    <div class="form-group">
      <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd"><span class="glyphicon glyphicon-edit"></span> Message:</label>
      <input type="text" class="form-control" id="message" placeholder="suggestions" name="message">
    </div>
    <div class="g-recaptcha" data-sitekey="6Lc4_S4UAAAAAOWuavWgsHTGshj-QkwlYSwbr-qT"></div>
	<input type="hidden" name="browserinfo" id="browserinfo" value="<?php echo $browser->getName(); echo " : " . $browser->getVersion() ?>"> 
	<input type="hidden" name="platform" value="<?php echo $os->getName(); ?>">
	<input type="hidden" name="ipaddress" value=" <?php echo $_SERVER['REMOTE_ADDR']; ?>"> 
	
    <button type="submit"  class="btn btn-default"><span class="glyphicon glyphicon-thumbs-up"></span> Submit</button>
	
  </form>
  </div
</div>
  
  <div class="container">
  <h2>The list of the GuestBook</h2>
  <div  id="list" class="list-group">
    
  </div>
  <div class="container">
  <p>Pagination</p>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Hugh Shangguan</p>
</footer>

</body>
<script src="homepage.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

</html>
