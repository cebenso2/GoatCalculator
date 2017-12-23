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
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body id="page-top">
  
    <?php include('navbar.html');?>
    <section class="top">
      <div class="container">
      </div>

      <div class="container">
	<h2 class="section-heading text-center"><font color="orange">Forum</font></h2>
	<hr class="primary">
	<div class="center block">
	  <button class="btn btn-primary btn-xl center-block">Create a Category</button></br>
	</div>

	<div class="panel" style="background:#333;color:#FFF; border-color:#FFF">
	  <div class="panel-body">
	    <table class="table" >
              <tr>
                <th>Category</th>
                <th>Latest thread</th>
              </tr><tr><td class="leftpart"><h3><a href="category.php?id=1">Michael Jordan</a></h3>The GOAT</td><td class="rightpart"><a href="topic.php?id=18"> Injury</a><br>21-04-2016</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=2">Scottie Pippen</a></h3>The clear number 2 front runner</td><td class="rightpart"><a href="topic.php?id=13"> number 33</a><br>20-04-2016</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=8">Charles Barkley</a></h3>For fans of Charles Barkley.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=9">Kareem Abdul-Jabbar</a></h3>For fans of Kareem Abdul-Jabbar.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=10">LeBron James</a></h3>For fans of LeBron James.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=11">Stephen Curry</a></h3>For fans of Stephen Curry.</td><td class="rightpart"><a href="topic.php?id=14"> Rising Star</a><br>20-04-2016</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=12">DeMarcus Cousins</a></h3>For fans of DeMarcus Cousins.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=13">Larry Bird</a></h3>For fans of Larry Bird.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=15">Kevin Durant</a></h3>For fans of Kevin Durant.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=17">Karl Malone</a></h3>For fans of Karl Malone.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=37">Josh Smith</a></h3>For fans of Josh Smith.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=38">Steve Nash</a></h3>For fans of Steve Nash.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=39">Danny Green</a></h3>For fans of Danny Green.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=40">Kobe Bryant</a></h3>For fans of Kobe Bryant.</td><td class="rightpart"><a href="topic.php?id=15"> Retirement Number</a><br>20-04-2016</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=41">Reggie Miller</a></h3>For fans of Reggie Miller.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=42">John Stockton</a></h3>For fans of John Stockton.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=43">Hersey Hawkins</a></h3>For fans of Hersey Hawkins.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=44">Hakeem Olajuwon</a></h3>For fans of Hakeem Olajuwon.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=45">Isiah Thomas</a></h3>For fans of Isiah Thomas.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=46">Paul Pierce</a></h3>For fans of Paul Pierce.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=47">Celtics 2016 Draft</a></h3>Discussing the Celtics 2016 Draft possibilities and GOAT potential of draftees</td><td class="rightpart"><a href="topic.php?id=3"> GOAT?</a><br>19-04-2016</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=48">Dirk Nowitzki</a></h3>For fans of Dirk Nowitzki.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=49">Kevin Johnson</a></h3>For fans of Kevin Johnson.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=50">Kelly Olynyk</a></h3>For fans of Kelly Olynyk.</td><td class="rightpart">No threads yet.</td></tr><tr><td class="leftpart"><h3><a href="category.php?id=51">Fab Melo</a></h3>For fans of Fab Melo.</td><td class="rightpart">No threads yet.</td></tr></table>
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
