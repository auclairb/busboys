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
        <p>Bienvenue sur Telecom Bus Planner. Ici vous allez pouvoir prévoir en toute sérénité vos trajets en bus pour les différents week-end organisés par votre BDE préféré. Si vous souhaitez partager le voyage avec tous vos amis, n'hésitez pas et connectez-vous dès maintenant!</p>
      </div>

      <!-- Connexion BDE -->
      <div class="page-header">
        <h1>Portail BDE</h1>
      </div>

      <div class="col-sm-6">
        <?php if (ISSET($_GET['login_admin_failure'])){?>
        <div class="alert alert-danger" role="alert">
          <strong>Erreur de connexion ! </strong> Veuillez vérifier vos identifiants admin BDE et vous assurer que vous avez les droits.
        </div>
        <?php
        } 
        else {?>
          <div class="alert alert-success" role="alert">
            <strong>Veuillez vous identifier </strong> en tant que membre du BDE.
          </div>
          <?php } ?>
      </div>

     <div class="col-sm-6">
        <form action="enter_bde.php" method="post">
          <fieldset>
            <p>
            <label for="LOGIN_BDE" class="sr-only">Login Admin BDE</label>
            <input type="text" id="LOGIN_BDE" name="LOGIN_BDE" class="form-control" placeholder="Login Admin BDE" required autofocus>
            <label for="PSWD" class="sr-only">Mot de passe</label>
            <input type="password" id="PSWD" name="PSWD" class="form-control" placeholder="Mot de passe" required>
            </p>

            <p>
              <button class="btn btn-lg btn-success btn-block" type="submit">CONNEXION BDE</button>
            </p>
          </fieldset>
        </form>
      </div>
    </div>
  </body>
</html>
