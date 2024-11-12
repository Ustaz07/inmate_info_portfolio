<?php
	require_once('inc/connect.php');
	require_once("includes/session.php");

	
?>
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
                   

                  <script src="code/highcharts.js"></script>
                  <script src="code/modules/exporting.js"></script>
                  <script src="code/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<?php
					$jan_murd ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND crimeCommited='Murder'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (01)
							 ";
						$result = mysqli_query($con, $jan_murd);
            $jan_m_number = mysqli_fetch_row($result);
            $jan_m= implode($jan_m_number);

            $jan_kid ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND crimeCommited ='Kidnapping'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (01)
							 ";
						$result = mysqli_query($con, $jan_kid);
            $jan_k_number = mysqli_fetch_row($result);
            $jan_k= implode($jan_k_number);


            $jan_arm ="SELECT count( * )
            as 'Number of Rows' 
            FROM	prisoner 
            WHERE detain_status='Active'
            AND crimeCommited='Arm Robbery'
            AND YEAR(dateOfSentence) 
            AND  MONTH(dateOfSentence) in (01)
             ";
          $result = mysqli_query($con, $jan_arm);
          $jan_a_number = mysqli_fetch_row($result);
          $jan_a= implode($jan_a_number);

          $jan_rap ="SELECT count( * )
            as 'Number of Rows' 
            FROM	prisoner 
            WHERE detain_status='Active'
            AND crimeCommited ='Rape'
            AND YEAR(dateOfSentence) 
            AND  MONTH(dateOfSentence) in (01)
             ";
          $result = mysqli_query($con, $jan_rap);
          $jan_r_number = mysqli_fetch_row($result);
          $jan_r= implode($jan_r_number);

          $feb_murd ="SELECT count( * )
          as 'Number of Rows' 
          FROM	prisoner 
          WHERE detain_status='Active'
          AND crimeCommited='Murder'
          AND YEAR(dateOfSentence) 
          AND  MONTH(dateOfSentence) in (02)
           ";
        $result = mysqli_query($con, $feb_murd);
        $feb_m_number = mysqli_fetch_row($result);
        $feb_m= implode($feb_m_number);

        $feb_kid ="SELECT count( * )
          as 'Number of Rows' 
          FROM	prisoner 
          WHERE detain_status='Active'
          AND crimeCommited ='Kidnapping'
          AND YEAR(dateOfSentence) 
          AND  MONTH(dateOfSentence) in (02)
           ";
        $result = mysqli_query($con, $feb_kid);
        $feb_k_number = mysqli_fetch_row($result);
        $feb_k= implode($feb_k_number);


        $feb_arm ="SELECT count( * )
        as 'Number of Rows' 
        FROM	prisoner 
        WHERE detain_status='Active'
        AND crimeCommited='Arm Robbery'
        AND YEAR(dateOfSentence) 
        AND  MONTH(dateOfSentence) in (02)
         ";
      $result = mysqli_query($con, $feb_arm);
      $feb_a_number = mysqli_fetch_row($result);
      $feb_a= implode($feb_a_number);

      $feb_rap ="SELECT count( * )
        as 'Number of Rows' 
        FROM	prisoner 
        WHERE detain_status='Active'
        AND crimeCommited ='Rape'
        AND YEAR(dateOfSentence) 
        AND  MONTH(dateOfSentence) in (02)
         ";
      $result = mysqli_query($con, $feb_rap);
      $feb_r_number = mysqli_fetch_row($result);
      $feb_r= implode($feb_r_number);


      $mar_murd ="SELECT count( * )
      as 'Number of Rows' 
      FROM	prisoner 
      WHERE detain_status='Active'
      AND crimeCommited='Murder'
      AND YEAR(dateOfSentence) 
      AND  MONTH(dateOfSentence) in (03)
       ";
      $result = mysqli_query($con, $mar_murd);
      $mar_m_number = mysqli_fetch_row($result);
      $mar_m= implode($mar_m_number);

      $mar_kid ="SELECT count( * )
        as 'Number of Rows' 
        FROM	prisoner 
        WHERE detain_status='Active'
        AND crimeCommited ='Kidnapping'
        AND YEAR(dateOfSentence) 
        AND  MONTH(dateOfSentence) in (03)
        ";
      $result = mysqli_query($con, $mar_kid);
      $mar_k_number = mysqli_fetch_row($result);
      $mar_k= implode($mar_k_number);


        $mar_arm ="SELECT count( * )
        as 'Number of Rows' 
        FROM	prisoner 
        WHERE detain_status='Active'
        AND crimeCommited='Arm Robbery'
        AND YEAR(dateOfSentence) 
        AND  MONTH(dateOfSentence) in (03)
        ";  
        $result = mysqli_query($con, $mar_arm);
        $mar_a_number = mysqli_fetch_row($result);
        $mar_a= implode($mar_a_number);

        $mar_rap ="SELECT count( * )
          as 'Number of Rows' 
          FROM	prisoner 
          WHERE detain_status='Active'
          AND crimeCommited ='Rape'
          AND YEAR(dateOfSentence) 
          AND  MONTH(dateOfSentence) in (03)
          ";
        $result = mysqli_query($con, $mar_rap);
        $mar_r_number = mysqli_fetch_row($result);
        $mar_r= implode($mar_r_number);


        
        $apr_murd ="SELECT count( * )
      as 'Number of Rows' 
      FROM	prisoner 
      WHERE detain_status='Active'
      AND crimeCommited='Murder'
      AND YEAR(dateOfSentence) 
      AND  MONTH(dateOfSentence) in (04)
       ";
      $result = mysqli_query($con, $apr_murd);
      $apr_m_number = mysqli_fetch_row($result);
      $apr_m= implode($apr_m_number);

      $apr_kid ="SELECT count( * )
        as 'Number of Rows' 
        FROM	prisoner 
        WHERE detain_status='Active'
        AND crimeCommited ='Kidnapping'
        AND YEAR(dateOfSentence) 
        AND  MONTH(dateOfSentence) in (04)
        ";
      $result = mysqli_query($con, $apr_kid);
      $apr_k_number = mysqli_fetch_row($result);
      $apr_k= implode($apr_k_number);


        $apr_arm ="SELECT count( * )
        as 'Number of Rows' 
        FROM	prisoner 
        WHERE detain_status='Active'
        AND crimeCommited='Arm Robbery'
        AND YEAR(dateOfSentence) 
        AND  MONTH(dateOfSentence) in (04)
        ";  
        $result = mysqli_query($con, $apr_arm);
        $apr_a_number = mysqli_fetch_row($result);
        $apr_a= implode($apr_a_number);

        $apr_rap ="SELECT count( * )
          as 'Number of Rows' 
          FROM	prisoner 
          WHERE detain_status='Active'
          AND crimeCommited ='Rape'
          AND YEAR(dateOfSentence) 
          AND  MONTH(dateOfSentence) in (04)
          ";
        $result = mysqli_query($con, $mar_rap);
        $apr_r_number = mysqli_fetch_row($result);
        $apr_r= implode($apr_r_number);



        $may_murd ="SELECT count( * )
        as 'Number of Rows' 
        FROM	prisoner 
        WHERE detain_status='Active'
        AND crimeCommited='Murder'
        AND YEAR(dateOfSentence) 
        AND  MONTH(dateOfSentence) in (05)
         ";
        $result = mysqli_query($con, $may_murd);
        $may_m_number = mysqli_fetch_row($result);
        $may_m= implode($may_m_number);
  
        $may_kid ="SELECT count( * )
          as 'Number of Rows' 
          FROM	prisoner 
          WHERE detain_status='Active'
          AND crimeCommited ='Kidnapping'
          AND YEAR(dateOfSentence) 
          AND  MONTH(dateOfSentence) in (05)
          ";
        $result = mysqli_query($con, $may_kid);
        $may_k_number = mysqli_fetch_row($result);
        $may_k= implode($may_k_number);
  
  
          $may_arm ="SELECT count( * )
          as 'Number of Rows' 
          FROM	prisoner 
          WHERE detain_status='Active'
          AND crimeCommited='Arm Robbery'
          AND YEAR(dateOfSentence) 
          AND  MONTH(dateOfSentence) in (05)
          ";  
          $result = mysqli_query($con, $may_arm);
          $may_a_number = mysqli_fetch_row($result);
          $may_a= implode($may_a_number);
  
          $may_rap ="SELECT count( * )
            as 'Number of Rows' 
            FROM	prisoner 
            WHERE detain_status='Active'
            AND crimeCommited ='Rape'
            AND YEAR(dateOfSentence) 
            AND  MONTH(dateOfSentence) in (05)
            ";
          $result = mysqli_query($con, $may_rap);
          $may_r_number = mysqli_fetch_row($result);
          $may_r= implode($may_r_number);



        $jun_murd ="SELECT count( * )
        as 'Number of Rows' 
        FROM	prisoner 
        WHERE detain_status='Active'
        AND crimeCommited='Murder'
        AND YEAR(dateOfSentence) 
        AND  MONTH(dateOfSentence) in (06)
         ";
        $result = mysqli_query($con, $jun_murd);
        $jun_m_number = mysqli_fetch_row($result);
        $jun_m= implode($jun_m_number);
  
        $jun_kid ="SELECT count( * )
          as 'Number of Rows' 
          FROM	prisoner 
          WHERE detain_status='Active'
          AND crimeCommited ='Kidnapping'
          AND YEAR(dateOfSentence) 
          AND  MONTH(dateOfSentence) in (06)
          ";
        $result = mysqli_query($con, $jun_kid);
        $jun_k_number = mysqli_fetch_row($result);
        $jun_k= implode($jun_k_number);
  
  
          $jun_arm ="SELECT count( * )
          as 'Number of Rows' 
          FROM	prisoner 
          WHERE detain_status='Active'
          AND crimeCommited='Arm Robbery'
          AND YEAR(dateOfSentence) 
          AND  MONTH(dateOfSentence) in (06)
          ";  
          $result = mysqli_query($con, $jun_arm);
          $jun_a_number = mysqli_fetch_row($result);
          $jun_a= implode($jun_a_number);
  
          $jun_rap ="SELECT count( * )
            as 'Number of Rows' 
            FROM	prisoner 
            WHERE detain_status='Active'
            AND crimeCommited ='Rape'
            AND YEAR(dateOfSentence) 
            AND  MONTH(dateOfSentence) in (06)
            ";
          $result = mysqli_query($con, $jun_rap);
          $jun_r_number = mysqli_fetch_row($result);
          $jun_r= implode($jun_r_number);



        $jul_murd ="SELECT count( * )
        as 'Number of Rows' 
        FROM	prisoner 
        WHERE detain_status='Active'
        AND crimeCommited='Murder'
        AND YEAR(dateOfSentence) 
        AND  MONTH(dateOfSentence) in (07)
         ";
        $result = mysqli_query($con, $jul_murd);
        $jul_m_number = mysqli_fetch_row($result);
        $jul_m= implode($jul_m_number);
  
        $jul_kid ="SELECT count( * )
          as 'Number of Rows' 
          FROM	prisoner 
          WHERE detain_status='Active'
          AND crimeCommited ='Kidnapping'
          AND YEAR(dateOfSentence) 
          AND  MONTH(dateOfSentence) in (07)
          ";
        $result = mysqli_query($con, $jul_kid);
        $jul_k_number = mysqli_fetch_row($result);
        $jul_k= implode($jul_k_number);
  
  
          $jul_arm ="SELECT count( * )
          as 'Number of Rows' 
          FROM	prisoner 
          WHERE detain_status='Active'
          AND crimeCommited='Arm Robbery'
          AND YEAR(dateOfSentence) 
          AND  MONTH(dateOfSentence) in (07)
          ";  
          $result = mysqli_query($con, $jul_arm);
          $jul_a_number = mysqli_fetch_row($result);
          $jul_a= implode($jul_a_number);
  
          $jul_rap ="SELECT count( * )
            as 'Number of Rows' 
            FROM	prisoner 
            WHERE detain_status='Active'
            AND crimeCommited ='Rape'
            AND YEAR(dateOfSentence) 
            AND  MONTH(dateOfSentence) in (07)
            ";
          $result = mysqli_query($con, $jul_rap);
          $jul_r_number = mysqli_fetch_row($result);
          $jul_r= implode($jul_r_number);



          $aug_murd ="SELECT count( * )
          as 'Number of Rows' 
          FROM	prisoner 
          WHERE detain_status='Active'
          AND crimeCommited='Murder'
          AND YEAR(dateOfSentence) 
          AND  MONTH(dateOfSentence) in (08)
           ";
          $result = mysqli_query($con, $aug_murd);
          $aug_m_number = mysqli_fetch_row($result);
          $aug_m= implode($aug_m_number);
    
          $aug_kid ="SELECT count( * )
            as 'Number of Rows' 
            FROM	prisoner 
            WHERE detain_status='Active'
            AND crimeCommited ='Kidnapping'
            AND YEAR(dateOfSentence) 
            AND  MONTH(dateOfSentence) in (08)
            ";
          $result = mysqli_query($con, $aug_kid);
          $aug_k_number = mysqli_fetch_row($result);
          $aug_k= implode($aug_k_number);
    
    
            $aug_arm ="SELECT count( * )
            as 'Number of Rows' 
            FROM	prisoner 
            WHERE detain_status='Active'
            AND crimeCommited='Arm Robbery'
            AND YEAR(dateOfSentence) 
            AND  MONTH(dateOfSentence) in (08)
            ";  
            $result = mysqli_query($con, $aug_arm);
            $aug_a_number = mysqli_fetch_row($result);
            $aug_a= implode($aug_a_number);
    
            $aug_rap ="SELECT count( * )
              as 'Number of Rows' 
              FROM	prisoner 
              WHERE detain_status='Active'
              AND crimeCommited ='Rape'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (08)
              ";
            $result = mysqli_query($con, $aug_rap);
            $aug_r_number = mysqli_fetch_row($result);
            $aug_r= implode($aug_r_number);



            $sep_murd ="SELECT count( * )
            as 'Number of Rows' 
            FROM	prisoner 
            WHERE detain_status='Active'
            AND crimeCommited='Murder'
            AND YEAR(dateOfSentence) 
            AND  MONTH(dateOfSentence) in (09)
             ";
            $result = mysqli_query($con, $sep_murd);
            $sep_m_number = mysqli_fetch_row($result);
            $sep_m= implode($sep_m_number);
      
            $sep_kid ="SELECT count( * )
              as 'Number of Rows' 
              FROM	prisoner 
              WHERE detain_status='Active'
              AND crimeCommited ='Kidnapping'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (09)
              ";
            $result = mysqli_query($con, $sep_kid);
            $sep_k_number = mysqli_fetch_row($result);
            $sep_k= implode($sep_k_number);
      
      
              $sep_arm ="SELECT count( * )
              as 'Number of Rows' 
              FROM	prisoner 
              WHERE detain_status='Active'
              AND crimeCommited='Arm Robbery'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (09)
              ";  
              $result = mysqli_query($con, $sep_arm);
              $sep_a_number = mysqli_fetch_row($result);
              $sep_a= implode($sep_a_number);
      
              $sep_rap ="SELECT count( * )
                as 'Number of Rows' 
                FROM	prisoner 
                WHERE detain_status='Active'
                AND crimeCommited ='Rape'
                AND YEAR(dateOfSentence) 
                AND  MONTH(dateOfSentence) in (09)
                ";
              $result = mysqli_query($con, $sep_rap);
              $sep_r_number = mysqli_fetch_row($result);
              $sep_r= implode($sep_r_number);



            $oct_murd ="SELECT count( * )
            as 'Number of Rows' 
            FROM	prisoner 
            WHERE detain_status='Active'
            AND crimeCommited='Murder'
            AND YEAR(dateOfSentence) 
            AND  MONTH(dateOfSentence) in (10)
             ";
            $result = mysqli_query($con, $oct_murd);
            $oct_m_number = mysqli_fetch_row($result);
            $oct_m= implode($oct_m_number);
      
            $oct_kid ="SELECT count( * )
              as 'Number of Rows' 
              FROM	prisoner 
              WHERE detain_status='Active'
              AND crimeCommited ='Kidnapping'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (10)
              ";
            $result = mysqli_query($con, $oct_kid);
            $oct_k_number = mysqli_fetch_row($result);
            $oct_k= implode($oct_k_number);
      
      
              $oct_arm ="SELECT count( * )
              as 'Number of Rows' 
              FROM	prisoner 
              WHERE detain_status='Active'
              AND crimeCommited='Arm Robbery'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (10)
              ";  
              $result = mysqli_query($con, $oct_arm);
              $oct_a_number = mysqli_fetch_row($result);
              $oct_a= implode($oct_a_number);
      
              $oct_rap ="SELECT count( * )
                as 'Number of Rows' 
                FROM	prisoner 
                WHERE detain_status='Active'
                AND crimeCommited ='Rape'
                AND YEAR(dateOfSentence) 
                AND  MONTH(dateOfSentence) in (10)
                ";
              $result = mysqli_query($con, $oct_rap);
              $oct_r_number = mysqli_fetch_row($result);
              $oct_r= implode($oct_r_number);



            $nov_murd ="SELECT count( * )
            as 'Number of Rows' 
            FROM	prisoner 
            WHERE detain_status='Active'
            AND crimeCommited='Murder'
            AND YEAR(dateOfSentence) 
            AND  MONTH(dateOfSentence) in (11)
             ";
            $result = mysqli_query($con, $nov_murd);
            $nov_m_number = mysqli_fetch_row($result);
            $nov_m= implode($nov_m_number);
      
            $nov_kid ="SELECT count( * )
              as 'Number of Rows' 
              FROM	prisoner 
              WHERE detain_status='Active'
              AND crimeCommited ='Kidnapping'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (11)
              ";
            $result = mysqli_query($con, $nov_kid);
            $nov_k_number = mysqli_fetch_row($result);
            $nov_k= implode($nov_k_number);
      
      
              $nov_arm ="SELECT count( * )
              as 'Number of Rows' 
              FROM	prisoner 
              WHERE detain_status='Active'
              AND crimeCommited='Arm Robbery'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (11)
              ";  
              $result = mysqli_query($con, $nov_arm);
              $nov_a_number = mysqli_fetch_row($result);
              $nov_a= implode($nov_a_number);
      
              $nov_rap ="SELECT count( * )
                as 'Number of Rows' 
                FROM	prisoner 
                WHERE detain_status='Active'
                AND crimeCommited ='Rape'
                AND YEAR(dateOfSentence) 
                AND  MONTH(dateOfSentence) in (11)
                ";
              $result = mysqli_query($con, $nov_rap);
              $nov_r_number = mysqli_fetch_row($result);
              $nov_r= implode($nov_r_number);



            
              $dec_murd ="SELECT count( * )
              as 'Number of Rows' 
              FROM	prisoner 
              WHERE detain_status='Active'
              AND crimeCommited='Murder'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (12)
               ";
              $result = mysqli_query($con, $dec_murd);
              $dec_m_number = mysqli_fetch_row($result);
              $dec_m= implode($dec_m_number);
        
              $dec_kid ="SELECT count( * )
                as 'Number of Rows' 
                FROM	prisoner 
                WHERE detain_status='Active'
                AND crimeCommited ='Kidnapping'
                AND YEAR(dateOfSentence) 
                AND  MONTH(dateOfSentence) in (12)
                ";
              $result = mysqli_query($con, $dec_kid);
              $dec_k_number = mysqli_fetch_row($result);
              $dec_k= implode($dec_k_number);
        
        
                $dec_arm ="SELECT count( * )
                as 'Number of Rows' 
                FROM	prisoner 
                WHERE detain_status='Active'
                AND crimeCommited='Arm Robbery'
                AND YEAR(dateOfSentence) 
                AND  MONTH(dateOfSentence) in (12)
                ";  
                $result = mysqli_query($con, $dec_arm);
                $dec_a_number = mysqli_fetch_row($result);
                $dec_a= implode($dec_a_number);
        
                $dec_rap ="SELECT count( * )
                  as 'Number of Rows' 
                  FROM	prisoner 
                  WHERE detain_status='Active'
                  AND crimeCommited ='Rape'
                  AND YEAR(dateOfSentence) 
                  AND  MONTH(dateOfSentence) in (12)
                  ";
                $result = mysqli_query($con, $dec_rap);
                $dec_r_number = mysqli_fetch_row($result);
                $dec_r= implode($dec_r_number);

						 ?>

		<script type="text/javascript">

    Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Distribution Of Crimes Committed'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Number Of Inmates'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Murder',
        data: [<?php echo $jan_m;?>, <?php echo $feb_m;?>, <?php echo $mar_m;?>, <?php echo $apr_m;?>, <?php echo $may_m;?>, <?php echo $jun_m;?>, <?php echo $jul_m;?>, <?php echo $aug_m;?>, <?php echo $sep_m;?>, <?php echo $oct_m;?>,<?php echo $nov_m;?>, <?php echo $dec_m;?>]

    }, {
        name: 'Kiddnapping',
        data: [<?php echo $jan_k;?>, <?php echo $feb_k;?>, <?php echo $mar_k;?>, <?php echo $apr_k;?>, <?php echo $may_k;?>, <?php echo $jun_k;?>, <?php echo $jul_k;?>, <?php echo $aug_k;?>, <?php echo $sep_k;?>, <?php echo $oct_k;?>,<?php echo $nov_k;?>, <?php echo $dec_k;?>]

    }, {
        name: 'Rape',
        data: [<?php echo $jan_r;?>, <?php echo $feb_r;?>, <?php echo $mar_r;?>, <?php echo $apr_r;?>, <?php echo $may_r;?>, <?php echo $jun_r;?>, <?php echo $jul_r;?>, <?php echo $aug_r;?>, <?php echo $sep_r;?>, <?php echo $oct_r;?>,<?php echo $nov_r;?>, <?php echo $dec_r;?>]

    }, {
        name: 'Arm Robbery',
        data: [<?php echo $jan_a;?>, <?php echo $feb_a;?>, <?php echo $mar_a;?>, <?php echo $apr_a;?>, <?php echo $may_a;?>, <?php echo $jun_a;?>, <?php echo $jul_a;?>, <?php echo $aug_a;?>, <?php echo $sep_a;?>, <?php echo $oct_a;?>,<?php echo $nov_a;?>, <?php echo $dec_a;?>]

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
