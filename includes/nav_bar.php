<?
	include("includes/session.php");
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" media="all" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" media="all" type="text/css" href="css/bootstrap-theme.css.map">
<link rel="stylesheet" media="all" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" media="all" type="text/css" href="css/bootstrap-theme.min.css.map">
<link rel="stylesheet" media="all" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" media="all" type="text/css" href="css/bootstrap.css.map">
<link rel="stylesheet" media="all" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" media="all" type="text/css" href="css/bootstrap.min.css.map">
<script src="js/bootstrap.js"></script>
<!--<script src="../js/bootstrap.min.js"></script>
<script src="../js/npm.js"></script>-->
<script src="jquery/jquery-3.0.0.js"></script>
<!--UnComment here when site is ready-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

</head>


 <body>
	<div class="container">
	<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-weight: bolder">Noor Properties</a>
      <div id="head">
	<div id="head-title"><img style="border-radius:50%" src="images/noor.JPG" width="35" height="35">Gombe<?php //echo $_SESSION['office_name'];?></div>
    
       	</div>
    </div>
    
    <form class="navbar-form navbar-right">
       <div class="input-group">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit" data-toggle="modal" data-target="#myModal">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
      
    </form>
    
  </div>
</nav>
	 </div>
	</body>
	
</html>
