<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cornell Beta</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
  
	
	<style>
		img { display: inline}
		img.d { position: absolute; top: 10px; left: 450px;}
		input { position: absolute;
				display: inline; 
				width: 40px; 
				height: 40px;
				font-size: 30px;}
				
		input.upperbound { top: 10px; left: 200px;}
		input.lowerbound { top: 220px; left: 200px}
		input.value { top: 120px; left: 250px; width: 200px; }
		input.variable { top: 120px; left: 550px }
		input.integrate { width: 100px; }
		
		div.col-md-5 { display: inline; position: absolute; top: 10px; left: 600px; }

	</style>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                 <img class="img-responsive" src="img/cornellbetalogo.png" height="200" width="200" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>
                    <li>
                        <a href="contract.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <br><br><br><br>
                <h1 class="page-header">Integrals
<!--                    <small>Secondary Text</small>-->
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
			
                    <img class="img-responsive" src="img/integralsymbol.png" alt="">

				<form action="sections.php" method="post" id="integralA">
				<input class="upperbound" type="text" name="upperbound">
				<br>
				<input class="lowerbound" type="text" name="lowerbound">
				<input class="value" type="text" name="value">
				
					<img class="d" class="img-responsive" src="img/d.png" alt="">
					
				<input class="variable" type="text" name="variable">
				
                <div class="col-md-5">
                <h3>Integrate</h3>
                <h4>Enter your inputs.</h4>
                <p>When done, press integrate</p>
                 <input type="submit" class="btn btn-primary" value="Integrate!" style="width:150px">
                
				</div>
               </form>
                
<?php 
if(!empty($_POST["upperbound"]) && !empty($_POST["lowerbound"])){
    echo "Upperbound: ".$_POST["upperbound"]."<br> Lodfsdfwerbound: ".$_POST["lowerbound"];
}else{
    echo "Must enter both a lower and upperbound";
	
}
                ?><br>

                
            </div>
            
        </div>
        <!-- /.row -->

        <hr>


        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; WCJN 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
      <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
//        var x = document.getElementById('upperbound').value;
//        print(x);
//   

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    </script>


</body>

</html>
