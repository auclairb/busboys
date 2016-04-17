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
          <a class="navbar-brand" href="#">Telecom Bus Planner</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Accueil</a></li>
            <li><a href="#apropos">A propos</a></li>
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



      <!-- Page de connexion -->
      <div class="page-header">
        <h1>Connexion</h1>
      </div>

      <div class="col-sm-6">
              <div class="alert alert-info" role="alert">
                <strong>Vous pouvez </strong> vous connecter avec les identifiants  <strong>reçus par mail.</strong>
              </div>
      </div>

       <div class="col-sm-6">

                  <p>
                  <label for="inputEmail" class="sr-only">Adresse mail</label>
                  <input type="email" id="inputEmail" class="form-control" placeholder="Adresse mail" required autofocus>
                  <label for="inputPassword" class="sr-only">Mot de passe</label>
                  <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
                  </p>

                  <p>
                  <button class="btn btn-lg btn-primary btn-block" type="submit">CONNEXION</button>
                  </p>
        </div>
