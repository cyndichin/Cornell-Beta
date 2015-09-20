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
  <!-- <link href="css/1-col-portfolio.css" rel="stylesheet"> -->

  <style>
    input { position: absolute;
    display: inline; 
    width: 40px; 
    height: 40px;
    font-size: 30px;}
    
    input.value { top: 70px; left: 340px; width: 80px; }
    input.variable { top: 120px; left: 70px }
    input.function { top: 70px; left: 150px; width: 180px; }
	#results { display: inline; position: absolute; top: -425px; left: 550px; border-left: 1px solid black; padding-left: 90px}
	
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
        <h1 class="page-header">Derivatives
	  <!--                    <small>Secondary Text</small>-->
        </h1>
      </div>
    </div>
    <!-- /.row -->

    <!-- Project One -->
    <div class="row">
      <div class="col-md-7">

	<img class="img-responsive" src="img/derivativesymbol.png" alt="">
  <form action="derivative.php" method="post">
	<input class="variable" type="text" name="variable">
	<input class="function" type="text" name="function">
	<input class="value" type="text" name="value">
	
      
      <div class="col-md-5">
        <h3>Derive</h3>
        <h4>When done, press derive</h4>
	
	
	<?php 
	   if(!empty($_POST["variable"]) && !empty($_POST["function"])){
	   if (! empty($_POST["value"]))
	   $value = "d/d".$_POST["variable"]. "(".$_POST["function"].") where ".$_POST["variable"]." = ".$_POST["value"];
	   else
	   $value = "d/d".$_POST["variable"]. "(".$_POST["function"].")";
           #echo $value;
	   }

	   else{
	   echo "Must supply variable name and the function";	
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
	<input type="submit" class="btn btn-primary" value="Derive!" style="width:150px">
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
<br>
</div>
</div>
</div>

<!-- /.row -->

<hr>

        
<hr>

</div>

<!-- Footer -->
<footer>
  <div class="row">
    <div class="col-lg-12">
      <p>Copyright &copy; WCJN 2015</p>
    </div>
  </div>
  <!-- /.row -->
</footer>

<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
