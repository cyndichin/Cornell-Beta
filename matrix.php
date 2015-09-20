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
    <link href="css/1-col-portfolio.css" rel="stylesheet">

	<style>
		input { font-size: 30px; width: 60px; height: 60px; position: absolute; top: 40px; left: 60px}
		
		#bracket2 { position: absolute; top: 0px; left: 380px}
		#value2 { top: 40px; left: 170px;  }
		#value3 { top: 130px; left: 170px;  }
		#value4 { top: 130px; left: 60px;  }
		
		#operation { top: 75px; left: 300px}
		
		#value5 { top: 40px; left: 430px;  }
		#value6 { top: 40px; left: 540px;  }
		#value7 { top: 130px; left: 430px;  }
		#value8 { top: 130px; left: 540px;  }
		
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
                <a class="navbar-brand" href="index.php">
                 <img class="img-responsive" src="img/logos/cornellbetalogo.png" height="200" width="200" alt="">
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
                <h1 class="page-header">Matrices
<!--                    <small>Secondary Text</small>-->
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                    <img id="bracket1" class="img-responsive" src="img/brackets.png" alt="">
					<input id="value1" type="text" name="value1">
					<input id="value2" type="text" name="value2">
					<input id="value3" type="text" name="value3">
					<input id="value4" type="text" name="value4">
					
					<input id="operation" type="text" name="operation">
					
					<img id="bracket2" class="img-responsive" src="img/brackets.png" alt="">
					<input id="value5" type="text" name="value5">
					<input id="value6" type="text" name="value6">
					<input id="value7" type="text" name="value7">
					<input id="value8" type="text" name="value8">
					
            </div>
            <div class="col-md-5">
                <h3>Matrices</h3>
                <h4>Enter your values</h4>
                <a class="btn btn-primary" href="#">Get Solutions<span class="glyphicon glyphicon-chevron-right"></span></a>
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

</body>

</html>
