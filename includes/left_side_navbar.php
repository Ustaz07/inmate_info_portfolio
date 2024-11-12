<?php
	function left_nav(){ ?>
		<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="dash.php">
						<img src="lawfirm/images/logo.PNG" width="70" height = "70" alt="" style = "border-radius: 50%"/>
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li>
					<a href="#">
						<i class="entypo-gauge"></i>
						<span class="title">DASHBOARD</span>
					</a>
				</li>
				<li class="has-sub">
					<a>
						<i class="entypo-mail"></i>
						<span class="title">Prison Detail</span>
					</a>
					<ul>
					
						<li class="has-sub">
							<a href="#">
							<i class = "" ></i>
								<span class="title">Inmate Information</span>
							</a>
							<ul>
								<li id="registration" value="inmate registration">
									<a href="">
										<span class="title">Inmate Registration</span>
									</a>
								</li>
								<li id="viewinmate" value="view inmate">
									<a href="">
										<span class="title">View Inmates</span>
									</a>
								</li>
								<li id="awaiting" value="awaiting">
									<a href="">
										<span class="title">Awaiting</span>
									</a>
								</li>
								<li id="convicted" value="convicted">
									<a href="">
										<span class="title">Convicted</span>
									</a>
								</li>
								<li id="cc" value="cc">
									<a href="">
										<span class="title">CC</span>
									</a>
								</li>
								<li id="complete" value="complete of sentence">
									<a href="">
										<span class="title">Completion Of Sentence</span>
									</a>
								</li>
								<li id="bailed" value="bailed inmate">
									<a href="">
										<span class="title">Bailed Inmate Record</span>
									</a>
								</li>
								<li id="transferinmate" value="transfer inmate">
									<a href="">
										<span class="title">Transfer Inmate Record</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="has-sub">
							<a href="#">
							<i class = "fa fa-bar-chart-o"></i>Data Presentation
								<span class="fa fa-chevron-down"></span>
							</a>
							<ul>
								
								<li id="columnb" value="chart">
									<a href="#">
										<span class="title" >Column Basic Chart</span>
									</a>
								</li>
								<li id="linel" value="chart">
									<a href="#">
										<span class="title" >Line Label Chart</span>
									</a>
								</li><li id="scatterp" value="chart">
									<a href="#">
										<span class="title" >Stacked Column Chart</span>
									</a>
								</li><li id="3dpie" value="chart">
									<a href="#">
										<span class="title" >3D Pie Chart</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="has-sub">
							<a href="#">
							<i class = "" ><img ></i>
								<span class="title">Cell Information</span>
							</a>
							<ul>
								<li id="cellinfor" value="cellinfor">
									<a href="#">
										<span class="title">Cell Information</span>
									</a>
								</li>
							
							</ul>
						</li>
						
						
					</ul>
				</li>
				<li class="has-sub">
					<a href="#">
						<i class="entypo-cog"></i>
						<span class="title">Setting</span>
					</a>
					<ul>
						<li>
							<a data-toggle="modal" data-target="#myModal3">
								<span class="title">Change Password</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="title">logout</span>
							</a>
						</li>
						
						
						
						
							</ul>
						</li>
			</ul>
			
		</div>

	</div>
	<!--Change Password Modal Goes Here-->
   <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
        <div class="modal-body">
		<div class="container"   style="width: 100%;">
          <form method="POST" action="update_password.php">
            <input type="hidden" name="office_name" value="<?php // echo($_SESSION['office_name']);?>">
            <div style="text-align: center; margin-bottom: 5px;"><b>Change Password</b></div>
            <div class="form-group">
			<input type="password"  class="form-control" name="current_psd" placeholder="Current Password" required></div>
			<div class="form-group">
			<input type="password"  class="form-control" name="new_psd" placeholder="New Password" required>
			</div>
			<input type="submit" id="chg_psd"  value="SUBMIT" class="btn btn-info"    style="width: 100%;">       
        </form>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
  <!--Modal Goes Here
   <div class="modal fade" id="image_myModal" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Property ID: </h4>
        </div>
        <div class="modal-body" id="property_images_modal">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>-->
  <script>

	$(document).ready (function (e){


		//registration
       $("#registration").click(function(){
			var inbox = $(this).attr('value');
			
			$.ajax({
				type: "GET",
				url: "inmate_registration.php",
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});
	     
		$("#viewinmate").click(function(){
			var inbox = $(this).attr('value');
			
			$.ajax({
				type: "GET",
				url: "view_inmate.php",
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});
		$("#complete").click(function(){
			var inbox = $(this).attr('value');
			//alert(inbox);
			$.ajax({
				type: "GET",
				url: "completionOfsentence.php",
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});
		$("#bailed").click(function(){
			var inbox = $(this).attr('value');
			//alert(inbox);
			$.ajax({
				type: "GET",
				url: "bailedInmate.php",
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});
		$("#transferinmate").click(function(){
			var inbox = $(this).attr('value');
		//	alert(inbox);
			$.ajax({
				type: "GET",
				url: "transferInmate.php",
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});

		$("#columnb").click(function(){
			var inbox = $(this).attr('value');
			//alert(inbox);
			$.ajax({
				type: "GET",
				url: "chart_column_basic.php",
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});

		$("#linel").click(function(){
			var inbox = $(this).attr('value');
			//alert(inbox);
			$.ajax({
				type: "GET",
				url: "chart_line_label.php",
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});

		$("#scatterp").click(function(){
			var inbox = $(this).attr('value');
			//alert(inbox);
			$.ajax({
				type: "GET",
				url: "chart_scatter_plot.php",
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});

		$("#basicl").click(function(){
			var inbox = $(this).attr('value');
			//alert(inbox);
			$.ajax({
				type: "GET",
				url: "chart_basic_line.php",
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});

		$("#3dpie").click(function(){
			var inbox = $(this).attr('value');
			//alert(inbox);
			$.ajax({
				type: "GET",
				url: "chart_3d_pie.php",
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});

		$("#cellinfor").click(function(){
			var inbox = $(this).attr('value');
			//alert(inbox);
			$.ajax({
				type: "GET",
				url: "cellinfor.php",
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});

		$("#awaiting").click(function(){
			var inbox = $(this).attr('value');
			
			$.ajax({
				type: "GET",
				url: "awaiting.php",
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});

		$("#convicted").click(function(){
			var inbox = $(this).attr('value');
			
			$.ajax({
				type: "GET",
				url: "convicted.php",
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});
		$("#cc").click(function(){
			var inbox = $(this).attr('value');
			
			$.ajax({
				type: "GET",
				url: "cc.php",
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});


   $(".property").each(function(index, element) {
       $(".property").click(function(){
			var inbox = $(this).attr('value');
		//	alert(inbox);
			$.ajax({
				type: "GET",
				url: "report_office.php?inbox="+inbox,
				success: function(response){
					$("#property_result").html(response);
					
				}
			});
			return false;
		});
	});
	 $("#logout,#logout1").click(function(){
		 window.location="dashboard_logout.php";
		 });
		$("#research").click(function() {
			var Mysearch =$("#search").val();
			$.ajax({
				type: "GET",
				url: "ajax_files/property/property_search.php?property_id="+Mysearch,
				dataType:"html",
				success: function(response){
					$("#property_image_modal").html(response);
					
				}
			});
			}); 
		
		
  });
  	// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
//var btn = document.getElementById("myBtn")[];
var btn = document.getElementsById("research");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
	var i;
	for (i=0; i<btn.length; i++){
		btn[i].onclick = function() {
    	modal.style.display = "block";
}
	}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

	document.getElementById("show_drop").onmouseover=function(){
		document.getElementById("show").style.display= "inline-block";
	}
	document.getElementById("show_drop").nextSibling.onmouseout=function(){
		document.getElementById("show").style.display= "none";
	}
	
	$(document).ready (function (e){
		$("#submit_btn").click(function(){
			var modified_property_id =$("#search_box").val() ;
			//alert(inbox);
			$.ajax({
				type: "GET",
				url: "ajax_files/property/property_search.php?modified_property_id="+modified_property_id,
				dataType:"html",
				success: function(response){
					$(".modal-body").html(response);
					
				}
			});
			return false;
		});
	});

</script>
	<?php } ?>
