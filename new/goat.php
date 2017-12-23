<?php include('connect.php') ?>
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
<?php include('goat_results.php'); ?>
    <section class="top">
      <div class="container">
	
    <h2 class="section-heading text-center"><font color="white"> Calculated Goat: </font><font color="#f05f40"><?php echo $row['Player'] ?></font></h2>
	<hr class="primary">
	<div class="panel panel-default" style="background:#333;color:#FFF; border-color:#FFF;">
	  <div class="panel-heading">
	    <h3 class="panel-title"> Calculated Goat </h3>                                
	  </div>
	  <div class="panel-body">
	    <div class="row">
	      <div class="col-md-1"></div>
	      <div class="col-md-3"> </br>
		<div class="panel panel-default" style="background:#333;color:#FFF; border-color:#FFF;">
		  <div class="panel-body">

	       <p><font color="#f05f40"><?php echo $row['Player'];?></font></p>
	       <p>Goat Score: <font color="orange"><?php echo $gs;?></font></p>
		    <p>Scoring: <font color="orange"><?php echo $s;?></font></p>
		    <p>Shooting: <font color="orange"><?php echo $sh;?> </font></p>
		    <p>Defense: <font color="orange"><?php echo $d;?></font></p>
		    <p>Team: <font color="orange"> <?php echo $t;?></font> </p>
		    <p>Longevity: <font color="orange"><?php echo $l;?>  </font> </p>
		  </div>
		</div>
	      </div>
	      <div class="col-md-8">
		<canvas id="income"></canvas>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
		
		<script>
		  var data = {
		  labels: ["Scoring","Shooting", "Longevity", "Defense","Team"],
		  datasets: [{
                           label: "GOAT",
                           fillColor: "rgba(255,165,0,0.3)",
	                   strokeColor : "rgba(255,165,0,1)",
			   pointColor : "rgba(255,165,0,1)",
	                   data: [<?php echo $s.",".$sh.",".$l.",".$t.",".$d?>]
                           },
		    {
                           label: "Selection",
                           fillColor: "rgba(0,0,0,0.3)",
	                   strokeColor : "rgba(0,0,0,1)",
			   pointColor : "rgba(0,0,0,1)",
	                   data: [<?php echo $scoring.",".$shooting.",".$longevity.",".$team.",".$defense?>]
	                }]
		  };
		  var options={responsive: true,
	                   pointLabelFontColor:'#FFF',
	                   pointLabelFontSize:12, 
	                   angleLineColor:'#fff',
	                   scaleLineColor : '#fff'
		  }
		  
		  var income = document.getElementById("income").getContext("2d"); 
		  Chart.defaults.global.defaultFontColor ='#FFF'
		  new Chart(income).Radar(data,options);
		</script>
	      </div>
	    </div>
	  </div>
	</div>
      </div>
      <div class="container">
	<div class="panel">
	  <div class="panel-heading">
	  <h3 class="panel-title"> Calculated Results</h3>
	  </div>
	  <div class="table-responsive">
     	    <table class="table table-inverse " style="color:#FFF; background:#333">
	      <thead>
		    <tr>
		    <th>Rank</th>
		    <th>Player</th>
		    <th>Scoring <?php echo ' ('.$scoring.'%)'; ?></th> 
		    <th>Shooting  <?php echo ' ('.$shooting.'%)'; ?></th>
		    <th>Defense  <?php echo ' ('.$team.'%)'; ?></th>
		    <th>Team  <?php echo ' ('.$defense.'%)'; ?></th>
		    <th>Longevity  <?php echo ' ('.$longevity.'%)'; ?></th>
		    <th>Goat Score</th>
		    </tr>
	      </thead>
	      <tbody>
		    <?php
		    $i=0;
		    while($row = mysqli_fetch_assoc($result1)){
		      $i=$i+1;
		      ?>

		      <tr>
		      <td><?php echo $i; ?></td>
		      <td><font color="#f05f40"><?php echo $row['Player']; ?></font></td>
		      <td><?php echo number_format($row['sscore']*100,2,'.',''); ?></td>
		      <td><?php echo number_format($row['shscore']*100,2,'.',''); ?></td>
		      <td><?php echo number_format($row['dscore']*100,2,'.',''); ?></td>
		      <td><?php echo number_format($row['tscore']*100,2,'.',''); ?></td>
		      <td><?php echo number_format($row['lscore']*100,2,'.',''); ?></td>
		      <td><font color="orange"><?php echo number_format($row['GOAT_score']*100,2,'.',''); ?></font></td>
      
		      </tr>

		      <?php } ?>
	      </tbody>
	    </table>
	  </div>
	</div>
      </div>
    </section>
	          <?php include('help.html');?>

    <!-- jQuery -->
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
