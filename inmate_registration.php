

<?php
require_once('inc/session.php');
require_once('inc/connect.php');

if(isset($_POST['submit'])){
	
	$fname = ucfirst(htmlspecialchars($_POST['fname']));
	$oname = ucfirst(htmlspecialchars($_POST['oname']));
	$state = htmlspecialchars($_POST['state']);
	$lga = htmlspecialchars($_POST['lga']);
	$dtype= htmlspecialchars($_POST['dtype']);
	$caddr = htmlspecialchars($_POST['caddr']);
	$ccommit= htmlspecialchars($_POST['ccommit']);
	$cno= htmlspecialchars($_POST['cno']);
	$mstat = htmlspecialchars($_POST['mstat']);
	$gend = htmlspecialchars($_POST['gend']);
	$occupation= htmlspecialchars($_POST['occupation']);
	$ag = htmlspecialchars($_POST['ag']);
	$weigh = htmlspecialchars($_POST['weigh']);
	$heigh = htmlspecialchars($_POST['heigh']);
	$dsentence = htmlspecialchars($_POST['dsentence']);
	$tduration = htmlspecialchars($_POST['tduration']);
//$ddate= htmlspecialchars($_POST['ddate']);
	//$warrant = htmlspecialchars($_POST['warrant']);
    $mstat= htmlspecialchars($_POST['mstat']);
	//$picture= htmlspecialchars($_POST['picture']);
	
	$age=35;
	
    
	//$full_name=$fname." ".$lname." ".$othername;
		//generating staff_id
		$result = mysqli_query($con, "SELECT MAX(serialNo) AS serial_no FROM prisoner");
		$row = mysqli_fetch_array($result);
		$serial_no = $row['serial_no'];
		$serial_no = ++$serial_no;
		$pri_id="IMT".$serial_no;



		
        ///upload image
		$image =$_FILES ['picture']['name'];
		$tmp_name = $_FILES['picture']['tmp_name'];
		$upload_path = "images/".$image.".jpg";


		//upload warrant of Detention
		$warrantofdetntion =$_FILES ['warrantofdetntion']['name'];
		$tmp_name_warrant = $_FILES['warrantofdetntion']['tmp_name'];
		$upload_path_warrant = "warrantOfDetention/".$image.".jpg";
		

		//sql query
		$sql="INSERT INTO prisoner SET idNo='$pri_id',firstName='$fname', lastName='$oname',contactAddress='$caddr',
		dstate='$state',lga='$lga',crimeCommited='$ccommit',picture='$image',warrant_of_detention='$image',detain_type='$dtype',
		detain_status='Active',cellNo='$cno',sex='$gend',age='$ag',height='$heigh',dateOfSentence='$dsentence',maritalStatus='$mstat',
		timeDuration='$tduration' ";
		//inserting into database
		$query = mysqli_query($con, $sql);
		 /* if(!mysqli_query($con, $sql)){
			  echo "error".mysqli_error($con);
		  }*/ 
			if(mysqli_affected_rows($con) == 1){
					
							move_uploaded_file($tmp_name, $upload_path );
							move_uploaded_file($tmp_name_warrant, $upload_path_warrant );
						
                        if($con){

							header("location:dash.php");
							echo "<script type=\"text/javascript\">alert('Data added successfully');</script>";
						}


						
						
					}else{ echo "error";
						 }
	
	
}

?>
<?php mysqli_close($con);?>


<link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">





                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate method="POST" action="inmate_registration.php" enctype="multipart/form-data">

                    
                      </p>
                          <span class="section"><h2><b>Inmates Registration Form:</b></h2></span>


					 
					 
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fname">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="fname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="fname" placeholder="" required="required" type="text">
                  </div>
					  </div>

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="oname">Other Names <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="oname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="oname" placeholder="" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="caddr">Contact Address<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="" id="caddr" name="caddr" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
             </div>
					  

                			
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">States*</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                 <select class="form-control" id="states" name="state">
      	
                          </select>
							</div>  
            </div>

             <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">L.G.A*</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                      <select class="form-control" id="lgas" name="lga">
      	
                         </select>
					 </div> 
                    </div>
					  					
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Detention Type*</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <select name="dtype" class="select2_single form-control" tabindex="-1">
						  <option value="">---Select Type Of Detention---</option>
                            <option value="Awaiting">Awaiting</option>
                            <option value="Convicted">Convicted</option>
                            <option value="Cc">Cc</option>
                          </select>
                        </div>
					  </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Crime Committed*</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <select name="ccommit" class="select2_single form-control" tabindex="-1">
              <option value="">---Select Crime---</option>
                            <option value="Murder">Murder</option>
                            <option value="Kidnapping">Kidnapping</option>
                            <option value="Arm Robbery">Arm Robbery</option>
                            <option value="House breaking and theft">House breaking and theft</option>
							<option value="Attempt to kill">Attempt to kill</option
							><option value="Robbery">Robbery</option>
                            <option value="Rape">Rape</option>
                            <option value="Conspiracy">Conspiracy</option>
							<option value="Money Counterfeit">Money Counterfeit</option>
							<option value="Assult">Assult</option>
                            <option value="Causing hurt">Causing hurt</option>
                            <option value="Thresparsing">thresparsing</option>
							<option value="Bridge  of trust">Bridge  of trust</option>
							<option value="Others">Others</option>
                          
                          </select>
                        </div>
                      </div>
					  					 
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cell No*</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <select name="cno" class="select2_single form-control" tabindex="-1">
						  <option value="">---Select Cell---</option>
              <option value="A1">A1</option>
              <option value="A2">A2</option>
							<option value="A3">A3</option>
							<option value="A4">A4</option>
							<option value="D1">D1</option>
							<option value="D2">D2</option>
							<option value="D3">D3</option>
							<option value="D4">D4</option>
							<option value="D5">D5</option>
							<option value="D6">D6</option>
							<option value="D7">D7</option>
							<option value="D8">D8</option>
							<option value="E">E</option>
							<option value="F1">F1</option>
							<option value="F2">F2</option>
							<option value="F3">F3</option>
							<option value="G1">G1</option>
							<option value="G2">G2</option>
							<option value="G3">G3</option>
							<option value="G4">G4</option>
							<option value="W1">W1</option>
							<option value="W2">W2</option>
                          
                          </select>
                        </div>
					  </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Marital Status*</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <select name="mstat" class="select2_single form-control" tabindex="-1">
						  <option value="">---Marital Status---</option>
                            <option value="Single">Single</option>
							<option value="Married">Married</option>
							<option value="Divorce">Divorce</option>                          
                          </select>
                        </div>
					  </div>

					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender*</label>
                        <div class="col-md-6 col-sm-9 col-xs-12">
                          <select name="gend" class="select2_single form-control" tabindex="-1">
						  <option value="">---Select Gender ---</option>
                            <option value="Male">Male</option>
							<option value="Female">Female</option>                        
                          </select>
                        </div>
					  </div>

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Occupation <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
					  </div>

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ag">Age<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ag" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ag" placeholder="" required="required" type="text">
                        </div>
					  </div>

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="weigh">Weight <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="weigh" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="weigh" placeholder="" required="required" type="text">
                        </div>
					  </div>

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="heigh">Height <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="heigh" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="heigh" placeholder="" required="required" type="text">
                        </div>
					  </div>

            <?php $_date = date("Y-m-d"); ?>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dsentence">Date of Sentence<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="dsentence" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="dsentence" placeholder="" value=<?php echo $_date;?> required="required" type="date">
                        </div>
					  </div>

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tduration">Time Duration<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tduration" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="tduration" placeholder="" required="required" type="text">
                        </div>
					  </div>

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ddate">Discharge Date<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ddate" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ddate" placeholder="" required="required" type="text">
                        </div>
					  </div>
					  

                   
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="warrant">Upload Image<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="warrat" value="upload Image" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="picture" placeholder="" required="required" type="file">
                        </div>
					  </div>

					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="warrant">Upload Warrant of Detention<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="warrat" value="upload Image" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="warrantofdetntion" placeholder="" required="required" type="file">
                        </div>
					  </div>

					  <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="cancel" name="cancel" class="btn btn-primary">Cancel</button>
                          <button id="send" name="submit" type="submit" class="btn btn-success">Submit</button>
                        </div>
               </div>
					  
                      
                      
                     
                      
  </form>
</div>

				  <script type="text/javascript" src="jquery/jquery.stateLga.js"></script>
<script type="text/javascript" src="jquery/jquery.ucfirst.js"></script>
 <script>
  var option = '';

var states=$.nigeria.states();
for (var i=0;i<states.length;i++){
   option += '<option value="'+ states[i] + '">' + $.ucfirst(states[i]) + '</option>';
}
$('#states').append(option).on('change',function() {

var option = '';
option += '<option value="">Local government</option>';

var lgas=eval('$.nigeria.'+this.value);

for (var i=0;i<lgas.length;i++){
   option += '<option value="'+ lgas[i] + '">' + $.ucfirst(lgas[i]) + '</option>';
}

$('#lgas').find('option')
    .remove()
    .end().append(option);

}).trigger('change');
</script>
