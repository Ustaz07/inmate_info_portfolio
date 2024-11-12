<?php
	require_once('inc/connect.php');
	require_once("includes/session.php");

	
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>

		<style type="text/css">

		</style>
	</head>
	<body>
<script src="../../code/highcharts.js"></script>
<script src="../../code/modules/exporting.js"></script>
<script src="../../code/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<?php
					$jan_awaiting ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex='Male'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (01)
							 ";
						$result = mysqli_query($con, $jan_awaiting);
            $jan__number = mysqli_fetch_row($result);
            $jan_a= implode($jan__number);

            $jan_convic ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex ='Female'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (01)
							 ";
						$result = mysqli_query($con, $jan_convic);
            $jan_conv_number = mysqli_fetch_row($result);
            $jan_c= implode($jan_conv_number);


            $feb_awaiting ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex='Male'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (02)
							 ";
						$result = mysqli_query($con, $feb_awaiting);
            $feb_await_number = mysqli_fetch_row($result);
            $feb_a= implode($feb_await_number);

            $feb_conv ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex ='Female'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (02)
							 ";
						$result = mysqli_query($con, $feb_conv);
            $feb_con_number = mysqli_fetch_row($result);
            $feb_c= implode($feb_con_number);

            $mar_awaiting ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex='Male'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (03)
							 ";
						$result = mysqli_query($con, $mar_awaiting);
            $mar_a_number = mysqli_fetch_row($result);
            $mar_a= implode($mar_a_number);

            $mar_con ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex ='Female'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (03)
							 ";
						$result = mysqli_query($con, $mar_con);
            $mar_c_number = mysqli_fetch_row($result);
            $mar_c= implode($mar_c_number);

            $apr_awaiting ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex='Male'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (04)
							 ";
						$result = mysqli_query($con, $apr_awaiting);
            $apr_a_number = mysqli_fetch_row($result);
            $apr_a= implode($apr_a_number);
          
          
          $apr_conv ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex='Female'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (04)
							 ";
						$result = mysqli_query($con, $apr_conv);
            $apr_c_number = mysqli_fetch_row($result);
            $apr_c= implode($apr_c_number);
            
            $may_awaiting ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex='Male'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (05)
							 ";
						$result = mysqli_query($con, $may_awaiting);
            $may_a_number = mysqli_fetch_row($result);
            $may_a= implode($may_a_number);

            $may_con ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex ='Female'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (05)
							 ";
						$result = mysqli_query($con, $may_con);
            $may_c_number = mysqli_fetch_row($result);
            $may_c= implode($may_c_number);


            $jun_awaiting ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex='Male'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (06)
							 ";
						$result = mysqli_query($con, $jun_awaiting);
            $jun__number = mysqli_fetch_row($result);
            $jun_a= implode($jun__number);

            $jun_con ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex ='Female'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (06)
							 ";
						$result = mysqli_query($con, $jun_con);
            $jun_c_number = mysqli_fetch_row($result);
            $jun_c= implode($jun_c_number);

            $jul_awaiting ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex='Male'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (07)
							 ";
						$result = mysqli_query($con, $jul_awaiting);
            $jul_a_number = mysqli_fetch_row($result);
            $jul_a= implode($jul_a_number);

            $jul_con ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex ='Female'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (07)
							 ";
						$result = mysqli_query($con, $jul_con);
            $jul_c_number = mysqli_fetch_row($result);
            $jul_c= implode($jul_c_number);

            $aug_awaiting ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex='Male'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (08)
							 ";
						$result = mysqli_query($con, $aug_awaiting);
            $aug_a_number = mysqli_fetch_row($result);
            $aug_a= implode($aug_a_number);

            $aug_con ="SELECT count( * )
            as 'Number of Rows' 
            FROM	prisoner 
            WHERE detain_status='Active'
            AND sex ='Female'
            AND YEAR(dateOfSentence) 
            AND  MONTH(dateOfSentence) in (08)
             ";
          $result = mysqli_query($con, $aug_con);
          $aug_c_number = mysqli_fetch_row($result);
          $aug_c= implode($aug_c_number);

            $sep_awaiting ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex='Male'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (09)
							 ";
						$result = mysqli_query($con, $sep_awaiting);
            $sep__number = mysqli_fetch_row($result);
            $sep_a= implode($sep__number);

            $sep_con ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex ='Female'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (09)
							 ";
						$result = mysqli_query($con, $sep_con);
            $sep_c_number = mysqli_fetch_row($result);
            $sep_c= implode($sep_c_number);

            $oct_awaiting ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex='Male'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (10)
							 ";
						$result = mysqli_query($con, $oct_awaiting);
            $oct__number = mysqli_fetch_row($result);
            $oct_a= implode($oct__number);

            $oct_con ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex ='Female'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (10)
							 ";
						$result = mysqli_query($con, $oct_con);
            $oct_c_number = mysqli_fetch_row($result);
            $oct_c= implode($oct_c_number);

            $nov_awaiting ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex='Male'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (11)
							 ";
						$result = mysqli_query($con, $nov_awaiting);
            $nov__number = mysqli_fetch_row($result);
            $nov_a= implode($nov__number);

            $nov_con ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex ='Female'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (11)
							 ";
						$result = mysqli_query($con, $nov_con);
            $nov_c_number = mysqli_fetch_row($result);
            $nov_c= implode($nov_c_number);

            $dec_awaiting ="SELECT count( * )
							as 'Number of Rows' 
							FROM	prisoner 
							WHERE detain_status='Active'
              AND sex='Male'
              AND YEAR(dateOfSentence) 
              AND  MONTH(dateOfSentence) in (12)
							 ";
						$result = mysqli_query($con, $dec_awaiting);
            $dec__number = mysqli_fetch_row($result);
            $dec_a= implode($dec__number);

            $dec_con ="SELECT count( * )
            as 'Number of Rows' 
            FROM	prisoner 
            WHERE detain_status='Active'
            AND sex ='Female'
            AND YEAR(dateOfSentence) 
            AND  MONTH(dateOfSentence) in (12)
             ";
          $result = mysqli_query($con, $dec_con);
          $dec_c_number = mysqli_fetch_row($result);
          $dec_c= implode($dec_c_number);
						 ?>


		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Distribution of Male and Female Inmates'
    },
    xAxis: {
        categories: [ 'Jan',
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
            'Dec']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Inmates Per Month '
        },
        stackLabels: {
            enabled: true,
            style: {
                fontWeight: 'bold',
                color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
            }
        }
    },
    legend: {
        align: 'right',
        x: -30,
        verticalAlign: 'top',
        y: 25,
        floating: true,
        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true,
                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
            }
        }
    },
    series: [{
        name: 'Male',
        data: [<?php echo $jan_a;?>, <?php echo $feb_a;?>, <?php echo $mar_a;?>, <?php echo $apr_a;?>, <?php echo $may_a;?>, <?php echo $jun_a;?>, <?php echo $jul_a;?>, <?php echo $aug_a;?>, <?php echo $sep_a;?>, <?php echo $oct_a;?>,<?php echo $nov_a;?>, <?php echo $dec_a;?>]
    }, {
        name: 'Female',
        data: [<?php echo $jan_c;?>, <?php echo $feb_c;?>, <?php echo $mar_c;?>, <?php echo $apr_c;?>, <?php echo $may_c;?>, <?php echo $jun_c;?>, <?php echo $jul_c;?>, <?php echo $aug_c;?>, <?php echo $sep_c;?>, <?php echo $oct_c;?>,<?php echo $nov_c;?>, <?php echo $dec_c;?>]
    }]
});
		</script>
	</body>
</html>
