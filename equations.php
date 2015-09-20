
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
        <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <style>
 body
{
    font-family:Gill Sans MT;
    padding:10px;
}
fieldset
{
   
    padding:10px;
    display:block;
    clear:both;
    margin:5px 0px;
}
legend
{
    padding:0px 10px;
    background:black;
    color:#FFF;
}
input.add
{
    margin-left: 25px;
}
input.fieldname
{
    float:left;
    clear:left;
    display:block;
    margin:5px;
}
select.fieldtype
{
    float:left;
    display:block;
    margin:5px;
}
input.remove
{
    float:left;
    display:block;
    margin:5px;
}

#results { display: inline; position: absolute; top: -240px; left: 550px; border-left: 1px solid black; padding-left: 90px}



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
                <h1 class="page-header">Systems of Equations
<!--                    <small>Secondary Text</small>-->
                </h1>
            </div>
        </div>

        
       
        
        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                   <h3>"Get Results" to find the values.</h3>
                    
        
                    </div>
                    <fieldset id="buildyourform">
 
</fieldset>
<input type="button" class="btn btn-primary"  value="Add Equation" class="add" id="add" style="width:150px"/>
<input type="button" class="btn btn-primary"  value="Get Results" class="add" id="preview" style="width:150px" />

        
<script>
    $(document).ready(function() {
    $("#add").click(function() {
        var intId = $("#buildyourform div").length + 1;
        var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
        var fName = $("<input type=\"text\" class=\"fieldname\" />");
        var fType = $("<select class=\"fieldtype\"><option value=\"textbox\">Text</option></select>");
        var removeButton = $("<input type=\"button\" class=\"remove\" value=\"-\" />");
        removeButton.click(function() {
            $(this).parent().remove();
        });
        fieldWrapper.append(fName);
        fieldWrapper.append(fType);
        fieldWrapper.append(removeButton);
        $("#buildyourform").append(fieldWrapper);
    });
    $("#preview").click(function() {
      
       var value = "";

        $("#buildyourform div").each(function() {
            var id = "input" + $(this).attr("id").replace("field","");
            var label = $("<label for=\"" + id + "\">" + $(this).find("input.fieldname").first().val() + "</label>");

            var initial = $(this).find("input.fieldname").first().val();
             value += initial + ";";


        }); 
               $.ajax
                ({
                type: "POST",
                url: "query.php",
                data: {value : value}, 
                success: function(result){
              $("#div1").html(result);
            }});

    });

});

  </script>

  <div id="div1"></div>


    </div>
    <!-- /.container -->



</body>

</html>