<?php
	require_once('inc/connect.php');
	require_once("includes/session.php");
	
	
?>


<?php
		  $query = mysqli_query($con, "SELECT * FROM  prisoner WHERE  detain_status='Bailed'");
			?>
            <div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title"><h2><b>Bailed Inmates Records</b></h2></div>
				
				<div class="panel-options">
					<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"></a>
					<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
				</div>
			</div>
<?php	print "<table class= 'table table-bordered table-striped datatable' data-toggle='modal' data-target='#myModal' style='width: 120px, left:50px;'>"; 
				/*echo "<caption>".$row['property_type']."</caption>";*/
					
			print "<tr>
					<th>S/No</th>
					<th>Inmate Name</th>
					<th>Crime Committed</th>
					<th>Date Of Sentence</th>
					<th>state</th>
					<th>lga</th>
					<th>Sex</th>
					<th>Cell No</th>
				
				</tr>";
				$i=1;
			while($row = mysqli_fetch_array($query)){
				echo "<tr '>";
				echo "<td>".$i."</td>";
				echo "<td>".$row['firstName']." ".$row['lastName']."</td>";
						echo "<td>".$row['crimeCommited']."</td>";
						echo "<td>".$row['dateOfSentence']."</td>";
					    echo "<td>".$row['dstate']."</td>";
					    echo "<td>".$row['lga']."</td>";
						echo "<td>".$row['sex']."</td>";
						echo "<td>".$row['cellNo']."</td>";
						echo "</tr>";
				$i++;
				
			}
				
	       		echo "</table>";
			
		

			
?>
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
		var property_id = $(this).attr('value');
	//	alert(property_id );
		$.ajax({
			type: "GET",
			url: "ajax_files/get_report_office.php?property_id="+property_id,
			dataType: "html",
			success: function(response){
				$("#property_image_modal").html(response);
			}
		});
		
	});
	
	
       $("button[id='image_btn']").click(function(){
			var property_id = $(this).attr('value');
			//alert(property_id);
			$.ajax({
			type: "GET",
			url: "ajax_files/get_images.php?property_id="+property_id,
			dataType: "html",
			success: function(response){
				$("#property_image_modal").html(response);
			}
		});
		
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

</script>

</body>

</html>
