<?php include("inc/connect.php");?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chart JS Graph Examples | Gentelella Alela! by Colorlib</title>

    <!-- Bootstrap -->
   
    <!-- Font Awesome -->
   
    <!-- NProgress -->
   

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
              <?php
							$query ="SELECT count(*)
							AS 'Number1' 
							FROM	prisoner 
							WHERE detain_status='Active'
							 ";
						$result = mysqli_query($con, $query);
						$row = mysqli_fetch_row($result);
						
					$total_number= implode($row);
            ?>
            <?php
							$Murder ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND crimeCommited='Murder'
							 ";
						$result = mysqli_query($con, $Murder);
						$murder_number = mysqli_fetch_row($result);
						$total_murder_number= implode($murder_number);
							
            ?>

            <?php
							$Kidnapping ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND crimeCommited='Kidnapping'
							 ";
						$result = mysqli_query($con, $Kidnapping);
						$kidnapping_number = mysqli_fetch_row($result);
						$total_kidnapping_number= implode($kidnapping_number);
						
            ?>
            <?php
							$Arm_robbery ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND crimeCommited='Robbery'
							 ";
						$result = mysqli_query($con, $Arm_robbery);
            $Arm_robbery_number = mysqli_fetch_row($result);
            $total_Arm_robbery_number= implode($Arm_robbery_number);
						
						
            ?>
            <?php
							$House_breaking ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND crimeCommited='House breaking and theft'
							 ";
						$result = mysqli_query($con, $House_breaking);
            $House_breaking__number = mysqli_fetch_row($result);
            $total_House_breaking__number= implode($House_breaking__number);
						
						
            ?>
            <?php
							$Rape ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND crimeCommited='Rape'
							 ";
						$result = mysqli_query($con, $Rape);
            $Rape_number = mysqli_fetch_row($result);
            $total_Rape_number = implode($Rape_number);
						
						
            ?>
            <?php
							$Other ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND (crimeCommited='Other'OR crimeCommited ='Assult' OR crimeCommited ='Thresparsing' OR crimeCommited ='Attempt to kill' OR crimeCommited ='Conspiracy' OR crimeCommited ='Money Counterfeit' OR crimeCommited ='Causing hurt' OR crimeCommited ='Thresparsing' OR crimeCommited ='Bridge  of trust' )
              
             
              
							 ";
						$result = mysqli_query($con, $Other);
            $Other_number = mysqli_fetch_row($result);
            $total_Other_number = implode($Other_number);
						
						
            ?>
   
   

<script src="code/highcharts.js"></script>
<script src="code/highcharts-3d.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>

<div id="container" style="height: 400px"></div>


		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Crimes Committed by percentage'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Browser share',
        data: [
            ['Murder',<?php echo	round($total_murder_number/$total_number*100);?> ],
            ['Arm Robbery',<?php echo round($total_Arm_robbery_number/$total_number*100);?> ],
            {
                name: 'Kidnapping',
                y:<?php echo round($total_kidnapping_number/$total_number*100);?> ,
                sliced: true,
                selected: true
            },
            ['House breaking and theft', <?php echo round($total_House_breaking__number/$total_number*100);?> ],
            ['Rape',<?php echo round($total_Rape_number/$total_number*100);?> ],
            ['Others',<?php echo round($total_Other_number/$total_number*100);?> ]
        ]
    }]
});
		</script>


                  </div>
                </div>
              </div>

              
        <!-- page content -->

        <!-- footer content -->
      
        <!-- footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
	
  </body>
</html>
