<?php 
require_once("connextionMysql.inc.php");

  $requete = "SELECT reference, prix FROM articles";

  $resultat = $connexion->query($requete);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

     <?php 
     // echo "<pre><p>";
     // print_r($articles);
    // echo "</pre></p>";
       ?>
       <div class="col-xs-5">
         <table class='table text-center table-bordered table-striped'>
          <tr>
            <td>Référence</td>
            <td>Prix</td>
          </tr>
           <?php while ($articles = mysqli_fetch_array($resultat)) {  ?>
             
          <tr>
            <td><?php echo $articles["reference"]; ?></td>
            <td><?php echo $articles["prix"]; ?></td>      
          </tr>
         <?php } ?>

         </table>
       </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
