<?php
	include("includes/connect.php");
	require_once("includes/session.php");
	$new_psd = $_POST['new_psd'];
	$current_psd = $_POST['current_psd'];
	$office_name = $_POST['office_name'];
	$enc_new_psd = sha1($new_psd);
	$enc_current_psd = sha1($current_psd);
    
     $sql_check = mysqli_query($connection, "SELECT * FROM office_tbl 
												WHERE office_name ='$office_name'
												AND password = '$enc_current_psd'");
			
			while ($row = mysqli_fetch_array($sql_check)){
				if(mysqli_affected_rows($connection) == 1){	
					
					$query = "UPDATE office_tbl SET password ='$enc_new_psd'	
							  WHERE password = '$enc_current_psd'
							  AND office_name = '$office_name'";
							$result = mysqli_query($connection, $query);
					if(mysqli_affected_rows($connection) == 1){
						echo "<script> alert('Password changed Successfully.');</script>";
						echo "<script>  window.location='dashboard_logout.php';</script>";
					}else{
						
						echo "<script> alert('unable to change password.');</script>";
						echo "<script>  window.location='dashboard_logout.php';</script>";
					}
					
					
				}
				else{
					echo("wrong password");
				}
				
			
			}

//updating password
	
    
?>
