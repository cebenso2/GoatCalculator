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
  

    <section class="top">
      <div class="container" style="max-width:400px">
	
	<h2 class="section-heading text-center"><font color="orange">Sign Up</font></h2>
	<hr class="primary">

	<div class="panel" style="background:#333;color:#FFF; border-color:#FFF">
	  <div class="panel-body">
	    <form action="add.php" method="post"  onsubmit="return findTotal()">
	      <div class="form-group">
		<label for="name" class="cols-sm-2 control-label">First Name</label>
		<div class="cols-sm-10">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
		    <input type="text" class="form-control" name="fname" id="fname"  placeholder="Enter your First Name" required/>
		  </div>
		</div>
	      </div>
   	      <div class="form-group">
		<label for="name" class="cols-sm-2 control-label">Last Name</label>
		<div class="cols-sm-10">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
		    <input type="text" class="form-control" name="lname" id="lname"  placeholder="Enter your Last Name" required/>
		  </div>
		</div>
	      </div>
	      
	      <div class="form-group">
		<label for="email" class="cols-sm-2 control-label">Email</label>
		<div class="cols-sm-10">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
		    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Email" required/>
		  </div>
		</div>
	      </div>
	      
	      <div class="form-group">
		<label for="username" class="cols-sm-2 control-label">Username</label>
		<div class="cols-sm-10">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
		    <input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username" required/>
		  </div>
		</div>
	      </div>
              
              <div class="form-group">
		<label for="password" class="cols-sm-2 control-label">Favorite Player</label>
		<div class="cols-sm-10">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
		    <input type="text" class="form-control" name="favorite" id="favorite"  placeholder="Enter your Favorite Player" required/>
		  </div>
		</div>
	      </div>
	      
              <div class="form-group">
		<label for="password" class="cols-sm-2 control-label">Password</label>
		<div class="cols-sm-10">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
		    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
		  </div>
		</div>
	      </div>
	      
	      <div class="form-group">
		<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
		<div class="cols-sm-10">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
		    <input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password" required/>
		  </div>
		</div>
	      </div>
      <script>
function findTotal(){ 
	     var p = parseInt(document.getElementById("password").value);
	     var c = parseInt(document.getElementById("confirm").value);
	     if(p!=c){
	       document.getElementById("password").style.background = "#FFDDDD";
	       document.getElementById("confirm").style.background = "#FFDDDD";
	     }
	     else{
	        document.getElementById("password").style.background = "#FFF";
		document.getElementById("confirm").style.background = "#FFF";
	     }
	     return p==c;
}

    </script>
<button type="submit" class="btn btn-primary  btn-block">Sign up</button>
	    </form>
	  </div>
	</div>
      </div>
    </section>
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
