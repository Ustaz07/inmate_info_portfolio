<?php
require_once("includes/session.php");
	function top_nav(){ ?>
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle">
							<img src="images/<?php //echo $_SESSION[picture];?>" alt="" class="img-circle" width="44" />
							<?php //echo $_SESSION['officer_name'];?>
						</a>
		
						<ul class="dropdown-menu">
		
							<!-- Reverse Caret -->
							<li class="caret"></li>
		
							<!-- Profile sub-links -->
							
		
							
							
						</ul>
					</li>
		
				</ul>
				
				<ul class="user-info pull-left pull-right-xs pull-none-xsm" style="align-content: center">
		
					<!-- Raw Notifications -->
					
					
					
		
					<!-- Message Notifications -->
					
		
					<!-- Task Notifications -->
					
		
				</ul>
		
			</div>
		
					<div class="input-group">
                    <input type="text" id="search" width="20" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button" id="research" data-toggle="modal" data-target="#myModal" >Go!</button>
                    </span>
                  </div>
                
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		
					
		
					
		
					
					<li>
					
							
						
						
					</li>
		
					
		
					<li>
						<a id="logout" href="#">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>
	<?php } ?>
