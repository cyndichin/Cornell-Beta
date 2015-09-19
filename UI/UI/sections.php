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
		input { position: absolute;
				display: inline; 
				width: 60px; 
				height: 60px;}
				
		input.upperbound { top: 20px; left: 250px;}
		input.lowerbound { top: 250px; left: 250px}
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
                    <br><br>
                     <div class="col-md-8">
                <h3>Integrals 1</h3>
            
                <p>More information here.</p>
                <input type="submit" value="Submit form" class="btn btn-primary" href="#"><br>
                 
            </div>
        </div>
                 
				</form>
                
<?php 
if(!empty($_POST["upperbound"] && !empty($_POST["upperbound"]))){
     echo "Upperbound: " . $_POST["upperbound"] . "<br>Lowerbound: " . $_POST["lowerbound"] ;
}else{
    echo "Must have a value for both the upperbound and lowerbound.";
}
                ?><br>

                
            </div>
           
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="img/integralsymbol.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Integrals 2</h3>
                <h4>Subheading</h4>
                <p>More information here.</p>
                <a class="btn btn-primary" href="#">Get Solutions<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="img/integralsymbol.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Integrals 3</h3>
                <h4>Subheading</h4>
                <p>More information here!</p>
                <a class="btn btn-primary" href="#">Get Solutions<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class="row">

            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="img/integralsymbol.png" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Integrals 4</h3>
                <h4>Subheading</h4>
                <p>More information here</p>
                <a class="btn btn-primary" href="#">Get Solutions<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="http://placehold.it/700x300" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Integrals Five</h3>
                <h4>Subheading</h4>
                <p>More information here</p>
                <a class="btn btn-primary" href="#">Get Solutions <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
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
