<?php 
require_once("connextionMysql.inc.php");

  $requete = "SELECT reference, prix FROM articles";

  $resultat = mysql_query($requete);


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
      //echo "<pre><p>";
      //print_r($articles);
     //echo "</pre></p>";
       ?>
       <div class="col-xs-5">

       <form id="monform" name="form1" method="post" action="">
          <p>
            <label>Nom :
              <input type="text" name="nom"  />
            </label>
          </p>
          <p>
            <label>Prénom :
              <input type="text" name="prenom"  />
            </label>
          </p>
          <p>
            <label>
              <input type="submit" name="bouton"  value="Envoyer" />
            </label>
          </p>
        </form>
         <table class='table text-center table-bordered table-striped'>
          <tr>
            <td>Référence</td>
            <td>Prix</td>
            <td>Voir la fiche</td>
          </tr>

          <?php while ($articles= mysql_fetch_array($resultat)) { ?>
            <tr>
              <td><?php echo $articles['reference']; ?></td>
              <td><?php echo $articles['prix']; ?></td>
              <td><a href="fiche3.php?reference=<?php echo $articles['reference']; ?>">Lien</a></td>
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
