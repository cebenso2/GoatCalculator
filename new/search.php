<?php include('connect.php')?>
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
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

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

  <?php
     $max=100;
     $name=$_GET["search"];
     $query = "SELECT * FROM Basketball_Players WHERE Games>0 and (Player like '%$name%_%' OR Player like '%_%$name%' OR Player like '%$name%') ORDER BY Player";
 
     $result=mysqli_query($db,$query);
     $num=mysqli_num_rows($result);
     ?>
  <section class="top">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><font color="white">Search Results: </font><font color="orange"> <?php echo $name?></font> </h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
	<div class="container" style="width:90%">
	  <div class="panel panel-warning">
	    <div class="table-responsive">
     	      <table class="table table-inverse " style="color:#FFF; background:#333">
		<thead>
		  <tr>
		    <th>Player</th>
		    <th>Team</th> 
		    <th>College</th>
		    <th>Years Played</th>
		    <th>Games</th>
		    <th>Minutes Played</th>
		    <th>Points</th>
		    <th>Rebounds</th>
		    <th>Assists</th>
		    <th>FG%</th>
		    <th>3P%</th>
		    <th>FT%</th>
		    <th>MPG</th>
		    <th>PPG</th>
		    <th>RBPG</th>
		    <th>APG</th>
		    <th>WS</th>
		    <th>WS/48</th>
		    <th>BPM</th>
		    <th>VORP</th>
		    <th> Information</th>
		  </tr>
		</thead>
		<tbody>

		  <?php
		     if($num<=$max){
			       $i=1;//new line
			       while($row = mysqli_fetch_assoc($result)){?>
		     <tr>
		       <td><?php echo $row['Player']; ?> </td>
		       <td><?php echo $row['Team']; ?></td>
		       <td><?php echo $row['College']; ?></td>
		       <td><?php echo $row['Years Played']; ?></td>
		       <td><?php echo $row['Games']; ?></td>
		       <td><?php echo $row['Minutes Played']; ?></td>
		       <td><?php echo $row['Points']; ?></td>
		       <td><?php echo $row['Rebounds']; ?></td>
		       <td><?php echo $row['Assists']; ?></td>
		       <td><?php echo $row['FG_P']; ?></td>
		       <td><?php echo $row['3P_P']; ?></td>
		       <td><?php echo $row['FT_P']; ?></td>
		       <td><?php echo $row['MPG']; ?></td>
		       <td><?php echo $row['PPG']; ?></td>
		       <td><?php echo $row['RBPG']; ?></td>
		       <td><?php echo $row['APG']; ?></td>
		       <td><?php echo $row['WS']; ?></td>
		       <td><?php echo $row['WS_PER_48']; ?></td>
		       <td><?php echo $row['BPM']; ?></td>
		       <td><?php echo $row['VORP']; ?></td>
		       <td><a target="_blank" style="color:red;"href="https://en.wikipedia.org/wiki/<?php echo str_replace(' ', '_',$row['Player']); ?>"> More Info </a></td>
		       
		     </tr>
		     
		     <?php             
			$i++;
			}
			}
			else{
			print "Too many results";
			}
			?>
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
    <script>
      var set_v1 = function(){$('#v1').text(s1_v.getValue())};
      var set_v2 = function(){$('#v2').text(s2_v.getValue())};
      var set_v3 = function(){$('#v3').text(s3_v.getValue())};
      var set_v4 = function(){$('#v4').text(s4_v.getValue())};
      var set_v5 = function(){$('#v5').text(s5_v.getValue())};
      function fill1(){
            var other_sum=s2_v.getValue()+s3_v.getValue()+s4_v.getValue()+s5_v.getValue();
            if(other_sum<100){
			   s1.slider('setValue', 100-other_sum,false,true)
	    }
	    else{
			   s1.slider('setValue', 0,false,true)
	    }
			   
      };
      function fill2(){
            var other_sum=s1_v.getValue()+s3_v.getValue()+s4_v.getValue()+s5_v.getValue();
            if(other_sum<100){
			   s2.slider('setValue', 100-other_sum,false,true)
	    }
	    else{
			   s2.slider('setValue', 0,false,true)
	    }
			   
      };
      function fill3(){
            var other_sum=s2_v.getValue()+s1_v.getValue()+s4_v.getValue()+s5_v.getValue();
            if(other_sum<100){
			   s3.slider('setValue', 100-other_sum,false,true)
	    }
	    else{
			   s3.slider('setValue', 0,false,true)
	    }
			   
      };
     function fill4(){
            var other_sum=s2_v.getValue()+s3_v.getValue()+s1_v.getValue()+s5_v.getValue();
            if(other_sum<100){
			   s4.slider('setValue', 100-other_sum,false,true)
	    }
	    else{
			   s4.slider('setValue', 0,false,true)
	    }
			   
      };
      function fill5(){
            var other_sum=s2_v.getValue()+s3_v.getValue()+s4_v.getValue()+s1_v.getValue();
            if(other_sum<100){
			   s5.slider('setValue', 100-other_sum,false,true)
	    }
	    else{
			   s5.slider('setValue', 0,false,true)
	    }
			   
      };
      var total= function(){
            var sum=s1_v.getValue()+s2_v.getValue()+s3_v.getValue()+s4_v.getValue()+s5_v.getValue();
          	          
            if(sum==100){
                     $('#total_bar').css('width',sum+'%');
                     $('#total').text('Calculate the Goat!');
		     $('#calc').removeClass('disabled');
                     $('#total_bar').removeClass('progress-bar-danger');
                     $('#total_bar').removeClass('progress-bar-warning');
                     $('#total_bar').addClass('progress-bar-success');
		   
            }
            else if(sum<100){
	             $('#total_bar').css('width',sum+'%');
		     $('#total').text(sum+'%');
		     $('#calc').addClass('disabled');
	             $('#total_bar').removeClass('progress-bar-danger');
                     $('#total_bar').removeClass('progress-bar-success');
                     $('#total_bar').addClass('progress-bar-warning');
		   
           }
	    else{
	             $('#total_bar').css('width','100%')
		     $('#total_bar').removeClass('progress-bar-success');
                     $('#total_bar').removeClass('progress-bar-warning');
                     $('#total_bar').addClass('progress-bar-danger');
		     $('#total').text(sum +' (Decrease to 100)' )
		     $('#calc').addClass('disabled');
            }
     };
    
      var filter_number1 = function() {
       $('#filter1').text(s1.getValue())
      };
      var s1=$('#sl1').slider();
      var s2=$('#sl2').slider();
      var s3=$('#sl3').slider();
      var s4=$('#sl4').slider();
      var s5=$('#sl5').slider();
      
      var s1_v=s1.on('change', set_v1).data('slider');
      var s2_v=s2.on('change', set_v2).data('slider');
      var s3_v=s3.on('change', set_v3).data('slider');
      var s4_v=s4.on('change', set_v4).data('slider');
      var s5_v=s5.on('change', set_v5).data('slider');
      
      var s1_t=s1.on('change', total).data('slider');
      var s2_t=s2.on('change', total).data('slider');
      var s3_t=s3.on('change', total).data('slider');
      var s4_t=s4.on('change', total).data('slider');
      var s5_t=s5.on('change', total).data('slider');
      
      
 
    </script>
</body>


</html>
