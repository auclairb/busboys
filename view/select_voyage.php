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

  <title>BUS PLANNER</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap theme -->
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="main.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body role="document">




    <!-- Barre de navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="login.php">Telecom Bus Planner</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="login.php">Accueil</a></li>
            <li><a href="a_propos.php">A propos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container theme-showcase" role="main">



        <!-- En-tête -->
        <div class="jumbotron">
          <h1>Telecom Bus Planner</h1>
          <p>Bienvenue sur Telecom Bus Planner. Ici tu vas pouvoir prévoir en toute sérénité tes trajets en bus pour les différents week-end organisés par ton BDE préféré. Si tu souhaites partager le voyage avec tous tes amis, n'hésite pas et connecte toi dès maintenant.</p>
        </div>



        <!-- Choix du voyage -->

        <div class="page-header">
          <h1>Sélection du voyage</h1>
        </div>

        <div class="col-sm-6">
          <div class="alert alert-info" role="alert">
            <strong>Veuillez choisir</strong> votre voyage.
          </div>
        </div>

        <div class="col-sm-6">
          <form action="eleve.php" method="post">
            <fieldset>
              <div class="form-group">
                <?php 
                $Voy_i = 0;
                foreach($voyagesDispo as $voyage){ ?>
                <button type="button" class="list-group-item list-group-item-success" onclick = <?php echo stripcslashes("\"reserverVoyage('" . $voyage[0] . "');\""); ?> >
                  <?php echo $voyage[0];?>
                </button>
                <?php  
                $Voy_i +=1 ;
              } ?>

              <button type="button" class="list-group-item list-group-item-disabled">
                Voyage à venir ...
              </button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
    <script type="text/javascript">
      function reserverVoyage(i){
        var get = "?NOM_V=" + i;
        window.location.href = "eleve.php" + get;
      }
    </script>
  </body>
  </html>
