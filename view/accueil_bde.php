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

    <title>BUS PLANNER: Accueil BDE</title>

    <!-- Bootstrap core CSS -->
    <link href="../view/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../view/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../view/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../view/css/main.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../view/js/ie-emulation-modes-warning.js"></script>

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
            <li><a href="accueil_bde.php">Accueil</a></li>
            <li><a href="a_propos.php">A propos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    <div class="container theme-showcase" role="main">
      <div class="jumbotron">
        <h1>
          Bienvenue <?php echo $prenom_getted . " !"; ?>
        </h1>
        <p>Comme vous êtes un membre habilité du BDE vous pouvez ici réserver vos places et gérer tous les voyages.</p>
      </div>

      <div class="page-header">
        <h1>Que voulez-vous faire ?</h1>
      </div>

      <div class="col-md-6">
      	<div class="alert alert-info" role="alert">
          <strong>Réservez</strong> vos places pour un futur voyage ?
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="button" onclick="goToEleve()">RESERVER</button>
      </div>
      <div class="col-md-6">
        <div class="alert alert-success" role="alert">
          <strong>Créer ou gérer</strong> un voyage ?
        </div>
	<div class="panel panel-default">
	  <div class="panel-heading">Liste des voyages en cours</div>
	  <div class="panel-body">
	    WEI <button class="btn glyphicon glyphicon-pencil" style="float:right"></button>
	  </div>
	</div> 
        <button class="btn btn-lg btn-success btn-block" type="button" data-toggle="modal" data-target="#myModal" onclick="goToBDE()" >CREER UN VOYAGE</button>
      </div>
    </div>


    <script>
      function goToBDE(){
      window.location.href = "bde.php";
      }
      function goToEleve(){
      window.location.href = "select_voyage.php";
      }
      function goToAPropos(){
      window.location.href = "a_propos.php";
      }
    </script>
  </body>
</html>

