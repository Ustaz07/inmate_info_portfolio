<?php
require_once('inc/session.php');
require_once('inc/connect.php');

if(isset($_POST['submit'])){

    $username=mysqli_real_escape_string($con,$_POST['username']);

    $password=mysqli_real_escape_string($con,$_POST['password']);

      $query="SELECT * FROM admin_tbl WHERE username='$username'  AND password='$password'";
      $query_execute=mysqli_query($con,$query);
      $count = mysqli_num_rows($query_execute);

    if($count >0){

         $row=mysqli_fetch_array($query_execute);
         $userId=$row['staffId'];

        $sql= mysqli_query($con, "SELECT * FROM users WHERE staffId='$userId' ");
			  $row1=mysqli_fetch_array($sql);
        $status=$row1['status'];
          
          if($status=='1'){
            $name=ucfirst($row1['firstName'])." ".ucfirst($row1['lastName']);
            $_SESSION['name']= $name;
            $_SESSION['staffId']=$row1['staffId'];
            $_SESSION['email']=$row1['email'];
            $_SESSION['role']="admin";
            header("location:dash.php");
            exit();
            $msg= $name;  
          }
          
          if($status=='2'){
            $name=ucfirst($row1['firstName'])." ".ucfirst($row1['lastName']);        
            $_SESSION['name']= $name;
            $_SESSION['staffId']=$row1['staffId'];
            $_SESSION['email']=$row1['email'];
            $_SESSION['role']="user";
            header("location:dash.php");
            exit();

            $msg= $name;

          }  

     
           
    }else{
      $msg="WRONG USERNAME OR PASSWORD ";
    }







 




  /// header("location:index.php");
  // exit();

          
         
        
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gombe State Medium Security Custodian Centre's Inmate Information System</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="login.php">
              <h1>Login Form</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
			  <input type="submit" name="submit" class="btn btn-defaul" value="Log in" />
                <a class="reset_pass" href="#"></a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a href="#signup" class="to_register"></a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gombe State Medium Security Custodian Centre's Inmate Information System</h1>
                  <br><br>
                  <p>©2019 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
				<h6><i class="fa fa-paw"></i> Gombe State Prison Management Information System</h6>
                  <p>©2019All Rights Reserved. </p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
