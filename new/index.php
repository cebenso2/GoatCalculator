<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Newer Version">
    <meta name="author" content="Savage Squad 2.0">

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
    <style type='text/css'>
      /* Example 1 custom styles */
      #ex1Slider .slider-selection {
      background: #BABABA;
      }
      
      /* Example 3 custom styles */
      #RGB {
      height: 20px;
      background: rgb(128, 128, 128);
      }
      #RC .slider-selection {
      background: #FF8282;
      }
      #RC .slider-handle {
      dfgbackground: red;
      }
      #GC .slider-selection {
      background: #428041;
      }
      #sl1 .slider-handle {
      background: #f05f40;
      }
      #sl1 .slider-selection {
      background: rgb(255, 165, 0);
      }
      #sl1 .slider-handle {
      border-bottom-color: blue;
      }
      #sl1, #G, #B {
      width: 80%;
      }
    </style>
    
</head>

<body id="page-top">

    <?php include('navbar.html');?>

    <section class="top" style="text-align: center;">
    	<div class="container">

              <h1><font color="orange">Calculate the </br>Greatest Player Of All Time</font></h1>
              <p><font color="white">Search for players, find your G.O.A.T, and discuss with others.</font><hr></p>
	      
	      <div class="well" style="background:#333">
		<b> <font color="white">Scoring</font></b>
		<h4><input type="text" class="span2" data-slider-value="0" data-slider-id="sl1" id="sl1" data-slider-orientation="horizontal"  data-slider-min="0" data-slider-max="100">
		  <button type="button" class="btn btn-primary btn-small btn-warning" id="v1" style="border-radius:.25em" onclick="fill1()">0</button>
		</h4>
	      	<b> <font color="white">Shooting</font></b>
		<h4><input type="text" class="span2" data-slider-value="0" data-slider-id="sl1" id="sl2" data-slider-orientation="horizontal"  data-slider-min="0" data-slider-max="100">
		  <button type="button" class="btn btn-primary btn-small btn-warning" id="v2" style="border-radius:.25em" onclick="fill2()">0</button>
		</h4>
		<b> <font color="white">Defense</font></b>
		<h4><input type="text" class="span2" data-slider-value="0" data-slider-id="sl1" id="sl3" data-slider-orientation="horizontal"  data-slider-min="0" data-slider-max="100">
		  <button type="button" class="btn btn-primary btn-small btn-warning" id="v3" style="border-radius:.25em"  onclick="fill3()">0</button>
		</h4>
		<b> <font color="white">Team</font></b>
		<h4><input type="text" class="span2" data-slider-value="0" data-slider-id="sl1" id="sl4" data-slider-orientation="horizontal"  data-slider-min="0" data-slider-max="100">
		  <button type="button" class="btn btn-primary btn-small btn-warning" id="v4" style="border-radius:.25em"  onclick="fill4()">0</button>
		</h4>
		<b> <font color="white">Longevity</font></b>
		<h4><input type="text" class="span2" data-slider-value="0" data-slider-id="sl1" id="sl5" data-slider-orientation="horizontal"  data-slider-min="0" data-slider-max="100">
		  <button type="button" class="btn btn-primary btn-small btn-warning" id="v5" style="border-radius:.25em"  onclick="fill5()">0</button>
		</h4>
		</br>
		<div class="progress">
		  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70"
		       aria-valuemin="0" aria-valuemax="100" style="width:0%" ID="total_bar" text="Total">
		    <span ID="total"></span>
		  </div>
		</div>
	      </div>
	</div>
	<form action="goat.php" method="get">
	<div class="form-group">
	<INPUT TYPE="hidden" NAME="scoring" id="s">
	<INPUT TYPE="hidden" NAME="shooting" id="sh">
	<INPUT TYPE="hidden" NAME="team" id="t">
	<INPUT TYPE="hidden" NAME="longevity" id="l">
	<INPUT TYPE="hidden" NAME="defense" id="d">

	<p><button type="submit" class="btn btn-primary btn-xl disabled" id="calc" disabled>Calculate the G.O.A.T</button></p>	
	<div>
	</form>
	    
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
	document.getElementById("s").value =0
document.getElementById("sh").value =0 
document.getElementById("d").value = 0
document.getElementById("t").value = 0
document.getElementById("l").value = 0

var set_v1 = function(){$('#v1').text(s1_v.getValue());
			document.getElementById("s").value = s1_v.getValue();
};
var set_v2 = function(){$('#v2').text(s2_v.getValue());
			document.getElementById("sh").value = s2_v.getValue();
};
var set_v3 = function(){$('#v3').text(s3_v.getValue())
			document.getElementById("d").value = s3_v.getValue();
};
var set_v4 = function(){$('#v4').text(s4_v.getValue())
			document.getElementById("t").value = s4_v.getValue();
};
var set_v5 = function(){$('#v5').text(s5_v.getValue())
			document.getElementById("l").value = s5_v.getValue();
};
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
		     $('#calc').prop('disabled', false);
		     $('#total_bar').removeClass('progress-bar-danger');
                     $('#total_bar').removeClass('progress-bar-warning');
                     $('#total_bar').addClass('progress-bar-success');
		   
            }
            else if(sum<100){
	             $('#total_bar').css('width',sum+'%');
		     $('#total').text(sum+'%');
		     $('#calc').addClass('disabled');
	             $('#calc').prop('disabled', true);
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
		     $('#calc').prop('disabled', true);
		     
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
