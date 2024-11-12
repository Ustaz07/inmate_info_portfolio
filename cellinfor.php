<?php
	require_once('inc/connect.php');
	require_once("includes/session.php");
	
	
?>


<?php
          $query = mysqli_query($con, "SELECT * FROM  prisoner WHERE detain_status='Active' ");
			?>
            <div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">Available Records</div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
<?php	print "<table class= 'table table-bordered table-striped datatable' data-toggle='modal' data-target='#myModal' style='width: 120px, left:50px;'>"; 
				/*echo "<caption>".$row['property_type']."</caption>";*/







				$i = 1;
				$x = 0;
				$state_head = '';

				while($row = mysqli_fetch_array($query))
				{
					if( $state_head != $row['cellNo'] ) {
						$x = 1;
						$state_head = $row['cellNo'];	
						print "<thead>";	
					
					
						print "<tr class='thead-light'>";				
							print "<th colspan=3>".$row['cellNo']." cell no"."</th>";
						print "</tr>";	
						print "<tr class='thead-light'>
						<th>S/No</th>
						<th>Inmate Name</th>
						<th>Crime Committed</th>
						<th>Date Of Sentence</th>
						<th>state</th>
						<th>lga</th>
						<th>Sex</th>
						 </tr>";
						print "</thead>";	
					} if( $state_head = $row['cellNo'] ) {
						print "<tbody>";	
						echo "<tr>";
						echo "<td>".$x." of ".$i."</td>";
						
						echo "<tr '>";
						echo "<td>".$row['firstName']." ".$row['lastName']."</td>";
								echo "<td>".$row['crimeCommited']."</td>";
								echo "<td>".$row['dateOfSentence']."</td>";
								echo "<td>".$row['dstate']."</td>";
								echo "<td>".$row['lga']."</td>";
								echo "<td>".$row['sex']."</td>";
								$i++;		
								$x++;
						}
							
									
			}









			
		

			
?>
</div>
<!--Modal Goes Here-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">GOMBE STATE PRISON MANAGEMENT INFORMATION SYSTEM </h4>
        </div>
        <div class="modal-body" id="property_image_modal">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">GOMBE STATE PRISON MANAGEMENT INFORMATION  </h4>
        </div>
        <div class="modal-body" id="property_warrantofficer_modal">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!--<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Property ID: </h4>
        </div>
        <div class="modal-body">
         <hgroup> </hgroup>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
	</div>-->
<!-- The Modal -->
<!--<div id="myModal" class="modal">

   Modal content 
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Property ID: </h2>
    </div>
    <div class="modal-body">
      <hgroup> </hgroup>
  
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>-->



<script>
$(document).ready(function(e){
		$("button[id='myBtn']").click(function(e){
			//$(".modal-content").empty(); 
		var prisoner_id= $(this).attr('value');
	//	alert(property_id );
		$.ajax({
			type: "GET",
			url: "ajax_files/get_prisoner_view.php?prisoner_id="+prisoner_id,
			dataType: "html",
			success: function(response){
				$("#property_image_modal").empty();
				//$("#property_image_modal").modal("show");
    			//$("#property_image_modal").appendTo("body");             
            	//$(".modal-content").html(response);
				$("#property_image_modal").html(response);
			}
		});
		
	});
	
	
       $("button[id='image_btn']").click(function(){
			var property_id = $(this).attr('value');
			alert(property_id);
			$.ajax({
			type: "GET",
			url: "ajax_files/get_prisoner_warrant_of_detention.php?prisoner_id="+prisoner_id,
			dataType: "html",
			success: function(response){
				$("#property_warrantofficer_modal").html(response);
			}
		});
		
	});
	

	
	$("button[id='delete_property']").click(function(e){
		var property_id = $(this).attr('value');
		var conf = confirm('Are you sure want to delete this property?');
		var property_status = "Delete";
   if(conf){
	   //alert(property_id);
	   var conf2 = confirm('Are you sure want to delete this property for the last time?');
		
   if(conf2){
	   $.ajax({
			type: "POST",
			url: "ajax_files/property/property_crud.php",
		   data:{property_id:property_id,property_status:property_status},
			dataType: "json",
			success: function(response){
				alert(response.message)
				//$("#property_image_modal").html(response.message);
			}
		});
    }
   }
     
		
		
	});
});

</script>

</body>

</html>
