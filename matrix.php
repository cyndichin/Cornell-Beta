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
		.value { font-size: 30px; width: 60px; height: 60px; position: absolute; top: 40px; left: 60px}
		
		#bracket2 { position: absolute; top: 0px; left: 380px}
		#value2 { top: 40px; left: 170px;  }
		#value3 { top: 130px; left: 60px;  }
		#value4 { top: 130px; left: 170px;  }
		
		#operation { top: 75px; left: 300px}
		
		#value5 { top: 40px; left: 430px;  }
		#value6 { top: 40px; left: 540px;  }
		#value7 { top: 130px; left: 430px;  }
		#value8 { top: 130px; left: 540px;  }
		
		#results { position: absolute; top: -250px; left: 200px; border-left: 1px solid black; padding-left: 50px}
	</style>
	
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                 <img class="img-responsive" src="img/logos/cornellbetalogo.png" height="200" width="200" alt="">
                </a>
            </div>
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
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                    <img id="bracket1" class="img-responsive" src="img/brackets.png" alt="">
					<form action="matrix.php" method="post">
					<input class="value" id="value1" type="text" name="value1">
					<input class="value" id="value2" type="text" name="value2">
					<input class="value" id="value3" type="text" name="value3">
					<input class="value" id="value4" type="text" name="value4">
					
					<input class="value" id="operation" type="text" name="operation">
					
					<img id="bracket2" class="img-responsive" src="img/brackets.png" alt="">
					<input class="value" id="value5" type="text" name="value5">
					<input class="value" id="value6" type="text" name="value6">
					<input class="value" id="value7" type="text" name="value7">
					<input class="value" id="value8" type="text" name="value8">
					
            </div>
            <div class="col-md-5">
                <h3>Matrices</h3>
                <h4>Enter your values.</h4>
                <p>Press compute when you are done.</p>
				
				
	<?php 
	   if(!empty($_POST["value1"]) && !empty($_POST["value2"]) &&
		  !empty($_POST["value3"]) && !empty($_POST["value4"]) &&
	      !empty($_POST["value5"]) && !empty($_POST["value6"]) &&
		  !empty($_POST["value7"]) && !empty($_POST["value8"]) &&
		  !empty($_POST["operation"])){
	   $value = "[[".$_POST["value1"]. ",".$_POST["value2"]."],[".$_POST["value3"].",".$_POST["value4"]."]]". 
				$_POST["operation"]."[[".$_POST["value5"]. ",".$_POST["value6"]."],[".$_POST["value7"].",".$_POST["value8"]."]]";
	   }
	   else{
		   //echo "Must supply all values!";	
	   }
	   include 'WolframAlphaEngine.php';
	   ?>
	
	<?php
	   
	   $queryIsSet = isset($value);
	   if ($queryIsSet) {
	   echo $value;
	   };
	   ?>
	
	&nbsp;&nbsp; <br><br>
	<input type="submit" class="btn btn-primary" value="Compute!" style="width:150px">
<br>
<br>
</form>

<div class="col-md-5">
  <br><br>
  <hr>
  <?php  
     $appID = '28E2T9-P7UTYL2JGT';
     
     if (!$queryIsSet) die();

     $qArgs = array();
     if (isset($_REQUEST['assumption']))
     $qArgs['assumption'] = $_REQUEST['assumption'];
     
     // instantiate an engine object with your app id
     $engine = new WolframAlphaEngine( $appID );
     
     // we will construct a basic query to the api with the input 'pi'
     // only the bare minimum will be used
     $response = $engine->getResults( $value, $qArgs);
  
  // getResults will send back a WAResponse object
  // this object has a parsed version of the wolfram alpha response
  // as well as the raw xml ($response->rawXML) 
  
  // we can check if there was an error from the response object
  if ( $response->isError() ) {
  ?>
  <h1>There was an error in the request</h1>
</body>
</html>
<?php
   die();
   }
   ?>

<div id="results">
<h1>Results</h1>
<br>

<?php
  // if there are any assumptions, display them 
   if ( count($response->getAssumptions()) > 0 ) {
?>
<h2>Assumptions:</h2>
<ul>
  <?php
     // assumptions come as a hash of type as key and array of assumptions as value
     foreach ( $response->getAssumptions() as $type => $assumptions ) {
  ?>
  <li><?php echo $type; ?>:<br>
    <ol>
      <?php
         foreach ( $assumptions as $assumption ) {
	 ?>
      <li><?php echo $assumption->name ." - ". $assumption->description;?>, to change search to this assumption <a href="simpleRequest.php?q=<?php echo urlencode($_REQUEST['q']);?>&assumption=<?php echo $assumption->input;?>">click here</a></li>
      <?php
         }
	 ?>
    </ol>
  </li>
  <?php
     }
     ?>
      
</ul>
<?php
   }
   ?>

<hr>

<?php
   // if there are any pods, display them
   if ( count($response->getPods()) > 0 ) {
?>
<table border=0 width="80%" align="center">
  <?php
     foreach ( $response->getPods() as $pod ) {
  ?>
  <tr>
    <td>
      <h3><?php echo $pod->attributes['title']; ?></h3>
      <?php
         // each pod can contain multiple sub pods but must have at least one
         foreach ( $pod->getSubpods() as $subpod ) {
      // if format is an image, the subpod will contain a WAImage object
      ?>
      <img src="<?php echo $subpod->image->attributes['src']; ?>">
      <hr>
      <?php
         }
	 ?>
      
    </td>
  </tr>
  <?php
     }
     ?>
</table>
<?php
   }
   ?>

            </div>
        </div>
        <!-- /.row -->

        <hr>

        <hr>
		


    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
</p>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Cyndi Chin, Willie Xu, Jessica Lee, Ning Wang 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>            </div>
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
