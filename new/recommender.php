<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The exact same bootstrap page everyone else makes.">
    <meta name="author" content="Me, you, her, everyone, et al.">

    <title>GOAT Calculator</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/7.1.0/css/bootstrap-slider.min.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body id="page-top">

   <?php include('navbar.html');?>
    <section class="top">
      <div class="container">
	
	<h2 class="section-heading text-center"><font color="orange">Recommended Players</font></h2>
	<hr class="primary">
	<div class="container" style="max-width:300px">
	  <div class="panel" style="background:#000;color:#FFF; border-color:#FFF">
	    <div class="panel-body text-center" id="legend">
	    </div>
	  </div>
	</div>
	<div class="panel panel-default" style="background:#000;color:#FFF; border-color:#FFF;">
	  <div class="panel-heading">
	    <h3 class="panel-title"> Player Details </h3>                                
	  </div>
	  <div class="panel-body">
	   
	    <canvas id="income">
	    </canvas>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
    <?php include('recommender_results.php')?>
	    <script>
	      var data = {
	      labels: ["Scoring","Shooting", "Longevity", "Defense","Team"],
	      datasets: [ {
                           label: "<?php echo $list[0] ?>",
                           fillColor: "rgba(139,0,0,0.2)",
	                   strokeColor : "rgba(139,0,0,1)",
                           pointColor : "rgba(139,0,0,1)",
			   
	                   data: [<?php $d=mysqli_fetch_assoc($details); echo $d['sscore'].",".$d['SHscore'].",".$d['lscore'].",".$d['dscore'].",".$d['tscore']; ?>]
	                },
	               
	                {
                           label: "<?php echo $list[1] ?>",
                           fillColor: "rgba(255,223,0,0.2)",
	                   strokeColor : "rgba(255,223,0,1)",
	                   pointColor : "rgba(255,223,0,1)",
                           data: [<?php $d=mysqli_fetch_assoc($details); echo $d['sscore'].",".$d['SHscore'].",".$d['lscore'].",".$d['dscore'].",".$d['tscore']; ?>]
	                },
	                 {
                           label: "<?php echo $list[2] ?>",
                           fillColor: "rgba(0,139,0,0.2)",
	                   strokeColor : "rgba(0,139,0,1)",
	                   pointColor : "rgba(0,139,0,1)",
	                   data: [<?php $d=mysqli_fetch_assoc($details); echo $d['sscore'].",".$d['SHscore'].",".$d['lscore'].",".$d['dscore'].",".$d['tscore']; ?>]
	                },
                        {
                           label: "<?php echo $list[3] ?>",
                           fillColor: "rgba(0,0,139,0.2)",
	                   strokeColor : "rgba(0,0,139,1)",
	                   pointColor : "rgba(0,0,139,1)",
                           data: [<?php $d=mysqli_fetch_assoc($details); echo $d['sscore'].",".$d['SHscore'].",".$d['lscore'].",".$d['dscore'].",".$d['tscore']; ?>]
	                },

	                {
                           label: "<?php echo $list[4] ?>",
	                   pointColor : "rgba(255,255,255,1)",
                           fillColor: "rgba(255,255,255,0.2)",
	                   strokeColor : "rgba(255,255,255,1)",
	                   data: [<?php $d=mysqli_fetch_assoc($details); echo $d['sscore'].",".$d['SHscore'].",".$d['lscore'].",".$d['dscore'].",".$d['tscore']; ?>]
	                }
	               

	      ]
	      };
	      var options={responsive: true,
	                   pointLabelFontColor:'#FFF',
	                   pointLabelFontSize:12, 
	                   angleLineColor:'#fff',
	                   scaleLineColor : '#fff',
	                   legendTemplate :
                  '<% for (var i=0; i<datasets.length; i++) { %>'
                    +'<p>'
                    +'<span class="badge" style=\"background-color:<%=datasets[datasets.length-1-i].strokeColor%>\">  </span>'+ ' '
                    +'<% if (datasets[i].label) { %><%= datasets[datasets.length-1-i].label %><% } %>'
                  +'</p>'
                +'<% } %>'	      }
		  
	      var income = document.getElementById("income").getContext("2d"); 
	      var radar=new Chart(income).Radar(data,options)
	      document.getElementById("legend").innerHTML=radar.generateLegend();
	    </script>
	  </div>
	</div>
      </div>

    </section>
    <!-- jQuery -->
    <?php include('help.html');?>

    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/7.1.0/bootstrap-slider.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>


</html>
