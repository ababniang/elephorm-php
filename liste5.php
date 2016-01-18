<?php 
require_once("connextionMysql.inc.php");


if (isset($_GET['famille'])) $requete = "SELECT reference, prix FROM articles WHERE familleID= ".$_GET['famille'];

else $requete = "SELECT reference, prix FROM articles";

$resultat = $connexion->query($requete);

$requete2 = "SELECT ID, intitule FROM familles";

$resultat2 = $connexion->query($requete2);


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
      // print_r($_GET['famille']);
      // echo "</pre></p>";
    ?>
    <div class="col-xs-5">


      <form id="monform" name="form1" class="clearfix row" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">


        <!-- Select Basic -->
        <fieldset>
          <div class="form-group col-md-8">
            <label class="control-label" for="famille">Selectionnez une famille</label>

              <select id="famille" name="famille" class="form-control">
                <?php while ($familles= mysqli_fetch_array($resultat2)) { ?>
                  <option <?php if(!isset($_GET['famille'])) $_GET['famille'] =1; if($familles['ID'] == $_GET['famille'] ) echo "selected='selected'"; ?> value="<?php echo $familles['ID']; ?>"><?php echo $familles['intitule']; ?></option>
                <?php } ?>
              </select>
   
          </div>
          <div class="col-md-4">
            <button id="singlebutton" type="submit" name="submit" class="btn btn-primary" style="margin-top:25px;">Envoyer</button>
          </div>

        </fieldset>

        <!-- Button -->
  
       

      </form>

      <table class='table text-center table-bordered table-striped'>
        <tr>
          <td>Référence</td>
          <td>Prix</td>
          <td>Voir la fiche</td>
        </tr>

        <?php while ($articles= mysqli_fetch_array($resultat)) { ?>
        <tr>
          <td><?php echo $articles['reference']; ?></td>
          <td><?php echo $articles['prix']; ?></td>
          <td><a href="fiche5.php?reference=<?php echo $articles['reference']; ?>">Lien</a></td>
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
