<?php 
    include("inc/connect.php");
	include("includes/left_side_navbar.php");
	include("includes/top_navbar.php");
	include("includes/left_side_navbar_func.php");
	require_once("includes/session.php");
	/*if(!isset($_SESSION['office_name'])){
	header("location: index.php");
	}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>DASHBOARD</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
		<!--Begining left navigation bar-->	
			<?php left_nav(); ?>
		<!--Ending left navigation bar-->	

	<div class="main-content">
		<!--Begining top navigation bar-->		
			<?php top_nav(); ?>
		<!--Ending top navigation bar-->	
		
		<hr />
        
        
        <div class="row">
			
		
			
			
			<div class="clear visible-xs"></div>
		
			<div class="col-sm-3 col-xs-6" id="viewinmate" value="view inmate">
		
				<div class="tile-stats tile-aqua">
					<div class="icon"><i class="entypo-mail"></i></div>
					<div class="num" data-start="0" data-end="<?php
							$query ="SELECT count( * )
								as 'Number of Rows' 
								FROM prisoner WHERE detain_status='active'
								 ";
							$result = mysqli_query($con, $query);
							$row = mysqli_fetch_row($result);
								//echo json_encode($row);
								
								echo implode($row);
						?>" data-postfix="" data-duration="1500" data-delay="1200">0</div>
		
					<h4>Total Inmates</h4>
                     <h2 style="color:#FFF">
					 <hr><?php
						/*	$query ="SELECT count( * )
								as 'Number of Rows' 
								FROM `properties_tbl` 
								WHERE `property_status` ='Approved'
								AND    office_id='$_SESSION[office_id]'
								AND   property_type='Shop For Sale'
								 ";
							$result = mysqli_query($connection, $query);
							$row = mysqli_fetch_row($result);
								//echo json_encode($row);
								
								echo implode($row);*/
						?></h2>
					<p >View</p>
				</div>
		
			</div>
            <div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-blue">
					<div class="icon"><i class="entypo-mail"></i></div>
					<div class="num" data-start="0" data-end="<?php
							$query ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_type='Awaiting'
							AND detain_status='active'
							
							 ";
						$result = mysqli_query($con, $query);
						$row = mysqli_fetch_row($result);
							//echo json_encode($row);
							
							echo implode($row);
						?>" data-postfix="" data-duration="1500" data-delay="600">0</div>
		
					<h4>Awaiting</h4>
                     <h2 style="color:#FFF">
					 <hr><?php
							
						?> </h2>
					<p>Approved</p>
				</div>
		
			</div>
		
      <div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-mail"></i></div>
					<div class="num" data-start="0" data-end="<?php
							$query ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_type='Convicted'
							AND detain_status='active'
							
							 ";
						$result = mysqli_query($con, $query);
						$row = mysqli_fetch_row($result);
							//echo json_encode($row);
							
							echo implode($row);
						?> " data-postfix="" data-duration="1500" data-delay="0">0</div>
		
					<h4>Convicted</h4>
                     <h2 style="color:#FFF">
					 <hr><?php
							
				
						?></h2>
					<p>Approved</p>
				</div>
		
			</div>  
        
			<?php /*?><div class="col-sm-2 col-xs-6">
		
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-mail"></i></div>
					<div class="num" data-start="0" data-end="<?php
							$query ="SELECT count( * )
								as 'Number of Rows' 
								FROM `properties_tbl` 
								WHERE `property_status` =''
								AND    office_id='$_SESSION[office_id]'
								AND   property_type='Land For Rent'
								 ";
							$result = mysqli_query($connection, $query);
							$row = mysqli_fetch_row($result);
								//echo json_encode($row);
								
								echo implode($row);
						?> " data-postfix="" data-duration="1500" data-delay="1800">0</div>
		
					<h4>Land for Rent</h4>
                     <h2 style="color:#FFF">
					 <hr><?php
							$query ="SELECT count( * )
								as 'Number of Rows' 
								FROM `properties_tbl` 
								WHERE `property_status` ='Approved'
								AND    office_id='$_SESSION[office_id]'
								AND   property_type='Land For Rent'
								 ";
							$result = mysqli_query($connection, $query);
							$row = mysqli_fetch_row($result);
								//echo json_encode($row);
								
								echo implode($row);
						?></h2>
					<p>Approved</p>
				</div>
		
			</div><?php */?>
			
			<div class="col-sm-3 col-xs-6">
		
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-mail"></i></div>
					<div class="num" data-start="0" data-end="<?php
							$query ="SELECT count( * )
								as 'Number of Rows' 
								 FROM	prisoner 
								WHERE detain_type='Cc'
								AND detain_status='active'
								 ";
							$result = mysqli_query($con, $query);
							$row = mysqli_fetch_row($result);
								//echo json_encode($row);
								
								echo implode($row);
						?> " data-postfix="" data-duration="1500" data-delay="1800">0</div>
		
					<h4>C C</h4>
                     <h2 style="color:#FFF">
					 <hr><?php
						/*	$query ="SELECT count( * )
								as 'Number of Rows' 
								FROM `properties_tbl` 
								WHERE `property_status` ='Approved'
								AND    office_id='$_SESSION[office_id]'
								AND   property_type='Office For Rent'
								 ";
							$result = mysqli_query($connection, $query);
							$row = mysqli_fetch_row($result);
								//echo json_encode($row);
								
								echo implode($row);*/
						?></h2>
					<p>Approved</p>
				</div>
		
			</div>
		</div>
        
        
        
		
		<ol class="breadcrumb bc-3" >
			<li><a href="dash.php"><i class="fa-home"></i>Home</a></li>
			
		</ol>
					
		<h3>Gombe State Medium Security Custodian Centre <?php // echo $_SESSION['office_name'];?></h3>
		<br />
		
		<div class="row" id="property_result">
			
			
		</div>
		<div class="row">
			<?php if(isset($_GET['page_id'])){
				page_content($page_id = $_GET['page_id']);
			}?>
		</div>
		
		
		
		
	
		<!-- Footer -->
		<footer class="main">
			
			&copy; <?PHP echo date("Y");?> <strong>Gombe State Medium Security Custodian Centre's Inmate Information System</strong> <br/>
			
		
		</footer>
	</div>
	
		
	
	
</div>





	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/js/select2/select2.css">
	<link rel="stylesheet" href="assets/js/selectboxit/jquery.selectBoxIt.css">
	<link rel="stylesheet" href="assets/js/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="assets/js/icheck/skins/minimal/_all.css">
	<link rel="stylesheet" href="assets/js/icheck/skins/square/_all.css">
	<link rel="stylesheet" href="assets/js/icheck/skins/flat/_all.css">
	<link rel="stylesheet" href="assets/js/icheck/skins/futurico/futurico.css">
	<link rel="stylesheet" href="assets/js/icheck/skins/polaris/polaris.css">
	<link rel="stylesheet" href="assets/js/datatables/datatables.css">ss

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/select2/select2.min.js"></script>
	<script src="assets/js/bootstrap-tagsinput.min.js"></script>
	<script src="assets/js/typeahead.min.js"></script>
	<script src="assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/bootstrap-timepicker.min.js"></script>
	<script src="assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/daterangepicker/daterangepicker.js"></script>
	<script src="assets/js/jquery.multi-select.js"></script>
	<script src="assets/js/icheck/icheck.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>
	<script src="assets/js/datatables/datatables.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>
	
</body>
</html>
