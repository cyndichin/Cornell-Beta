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
    img.d2 { position: absolute; top: 10px; left: 630px;}
	img.d3 { position: absolute; top: 10px; left: 770px;}
    input { position: absolute;
        display: inline; 
        width: 40px; 
        height: 40px;
        font-size: 30px;}
        
    input.upperbound { top: 10px; left: 180px;}
    input.lowerbound { top: 220px; left: 180px}
    input.upperbound2 { top: 10px; left: 180px;}
    input.lowerbound2 { top: 220px; left: 180px}
    input.upperbound3 {top: 10px; left: 380px;}
    input.lowerbound3 {top: 220px; left: 380px;}
    input.value { top: 120px; left: 250px; width: 200px; }
    input.variable { top: 120px; left: 550px }
    input.value2 { top: 120px; left: 430px; width: 200px; }
    input.variable2 { top: 120px; left: 730px }
	input.variable3 { top: 120px; left: 870px }
    input.integrate { width: 100px; }
    
    div.col-md-5 { display: inline; position: absolute; top: 10px; left: 600px; }
    #integral2 { display: inline; position: absolute; top: 5px; left: 220px; }
    .right-col{
      float:right;
    }
	
	#results { position: absolute; top: -580px; left: 950px; border-left: 1px solid black; padding-left: 20px}

  </style>
  <!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                 <img class="img-responsive" src="img/logos/cornellbetalogo.png" height="250" width="250" alt="">
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
                <h1 class="page-header">Integrals</h1>
            </div>
        </div>
        <!-- /.row -->

           <div class="row">
            <div class="col-lg-12">

                <a id="single"  href="#"><img src="img/courses/singleintegrals.png" id="lineintegrals" alt=""></a> &nbsp&nbsp
                 <a id="double" href="#"><img src="img/courses/doubleintegrals.png" id="doubleintegrals" alt=""></a>
                 <br><br><br><br>
                </h1>
            </div>
        </div>
<script>

$(document).ready(function(){
    $('.single').show();
    $('.double').hide();
$('#single').click(function(){
    $('.single').show();
    $('.double').hide();
    $('#lineintegrals').css({ opacity: 0.3 });
    $('#doubleintegrals').css({ opacity: 1});
    $('#single').css({ background: rgb(255, 255, 255)});

});

$('#double').click(function(){
    $('.double').show();
    $('.single').hide();
    $('#doubleintegrals').css({ opacity: 0.3 });
    $('#lineintegrals').css({ opacity: 1});
});
});      

</script>

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
        <div class="single">
        <img class="img-responsive" src="img/integralsymbol.png" alt="">

        <form action="integrals.php" method="post" id="integralA">
        <input class="upperbound" type="text" name="upperbound">
        <br>
        <input class="lowerbound" type="text" name="lowerbound">
        <input class="value" type="text" name="value">
        <img class="d" class="img-responsive" src="img/d.png" alt="">
        <input class="variable" type="text" name="variable">
                </div>  

        <div class="double">
        <img  src="img/integralsymbol.png" alt="">
        <img id="integral2" src="img/integralsymbol.png" alt="">
        <input class="upperbound2" type="text" name="upperbound2">
        <br>
        <input class="lowerbound2" type="text" name="lowerbound2">
    <input class="upperbound3" type="text" name="upperbound3">
        <br>
        <input class="lowerbound3" type="text" name="lowerbound3">
        <input class="value2" type="text" name="value2">
        <img class="d2" class="img-responsive" src="img/d.png" alt="">
        <input class="variable2" type="text" name="variable2">
		<img class="d3" class="img-responsive" src="img/d.png" alt="">
        <input class="variable3" type="text" name="variable3">

                </div>  
               </div>  
        </div>

        
        <div class="col-md-7">
          <h3>Integrate</h3>
          <h4>Enter your inputs.</h4>
          <p>When done, press integrate.</p>


<?php 
   if (! empty($_POST["variable2"]) && ! empty($_POST["variable3"])){
   // double integral mode
      if (empty($_POST["upperbound2"]) && $_POST["upperbound2"] !== "0" &&
          empty($_POST["upperbound3"]) && $_POST["upperbound3"] !== "0" &&
          empty($_POST["lowerbound2"]) && $_POST["lowerbound2"] !== "0" &&
          empty($_POST["lowerbound3"]) && $_POST["lowerbound3"] !== "0")
          $value = "integral integral ".$_POST["value2"]." d".$_POST["variable2"]." d".$_POST["variable3"];
   else if ((empty($_POST["upperbound2"]) && $_POST["upperbound2"] !== "0") && 
            (! empty($_POST["upperbound3"]) || $_POST["upperbound3"] === "0") &&
            (empty($_POST["lowerbound2"]) && $_POST["lowerbound2"] !== "0") &&
            (!empty($_POST["lowerbound3"]) || $_POST["lowerbound3"] === "0"))
          $value = "integral integral_".$_POST["lowerbound3"]."^".$_POST["upperbound3"].$_POST["value2"]." d".$_POST["variable2"]." d".$_POST["variable3"];
   else if ((!empty($_POST["upperbound2"]) || $_POST["upperbound2"] === "0") && 
            (empty($_POST["upperbound3"]) && $_POST["upperbound3"] !== "0") &&
            (!empty($_POST["lowerbound2"]) || $_POST["lowerbound2"] === "0") &&
            (empty($_POST["lowerbound3"]) && $_POST["lowerbound3"] !== "0"))
          $value = "integral_".$_POST["lowerbound2"]."^".$_POST["upperbound2"]." integral ".$_POST["value2"]." d".$_POST["variable2"]." d".$_POST["variable3"];
   else{
   if (empty($_POST["upperbound2"]) && $_POST["upperbound2"] !== "0")
      $_POST["upperbound2"] = "(positive infinity)";
   if (empty($_POST["upperbound3"]) && $_POST["upperbound3"] !== "0")
      $_POST["upperbound3"] = "(positive infinity)";
   if (empty($_POST["lowerbound2"]) && $_POST["lowerbound2"] !== "0")
      $_POST["lowerbound2"] = "(negative infinity)";
   if (empty($_POST["lowerbound3"]) && $_POST["lowerbound3"] !== "0")
      $_POST["lowerbound3"] = "(negative infinity)";
   $value = "integral_".$_POST["lowerbound2"]."^".$_POST["upperbound2"]." integral_".$_POST["lowerbound3"]."^".$_POST["upperbound3"]." ".$_POST["value2"]." d".$_POST["variable2"]." d".$_POST["variable3"];
   }
   }

   else if (! empty($_POST["variable"]) && ! empty($_POST["value"])){
   if((!empty($_POST["upperbound"]) || $_POST["upperbound"] === "0") && (!empty($_POST["lowerbound"]) || $_POST["lowerbound"] === "0")){
   //echo "Upperbound: ".$_POST["upperbound"]."<br> Lodfsdfwerbound: ".$_POST["lowerbound"];
   $value = "integrate from ".$_POST["lowerbound"]." to ".$_POST["upperbound"]." (".$_POST["value"].") d".$_POST["variable"];
   } else if (! empty($_POST["upperbound"])){
   $value = "integrate from negative infinity to ".$_POST["upperbound"]. " (".$_POST["value"].") d".$_POST["variable"]; 
   } else if (! empty($_POST["lowerbound"])){
   $value = "integrate from ".$_POST["lowerbound"]. " to positive infinity (".$_POST["value"].") d".$_POST["variable"];
   } else{
   $value = "integral of ".$_POST["value"]." d".$_POST["variable"];
   }}
   include 'WolframAlphaEngine.php';
   ?>

<?php
  $queryIsSet = isset($value);
  if ($queryIsSet) {
    echo $value;
  };
?>
&nbsp;&nbsp; <br><br>
 <input type="submit" class="btn btn-primary" value="Integrate!" style="width:150px">
                       
</form>
   <div class="right-col">
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
<!-- /.row -->


<hr>



<hr>

   <!-- Footer -->
      <footer>
       
          Copyright &copy; Cyndi Chin, Willie Xu, Jessica Lee, Ning Wang 2015
    
      </footer>

<!--</footer>--> 

</div>
<!-- /.container -->



<!-- Custom Theme JavaScript -->
<script>

  // Opens the sidebar menu
  $("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#sidebar-wrapper").toggleClass("active");
  });
  
</script>




</body>

</html>
