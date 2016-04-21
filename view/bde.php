<!DOCTYPE html>
<html>
<head>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>BUS PLANNER: Accueil BDE</title>

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
<body>



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


      <!-- En-tête -->
      <div class="jumbotron">
        <h1>Bienvenue <?php echo $prenom_getted . " !"; ?></h1>
        <p>Ici vous allez pouvoir gérer les voyages en tant que membre organisateur du BDE. N'oubliez pas de faire vos réservations en tant qu'élève lambda par la suite ...</p>
      </div>




<!-- Formulaire ALLER -->
<div class="container-fluid" id="formulaire_aller">
      <div class="page-header">
        <h1>Création d'un voyage - étape 1 : l'aller</h1>
      </div>

        <div class="container theme-showcase" role="main">


                <div class="col-sm-6">
                        <div class="alert alert-info" role="alert">
                         Commencez par nommer votre voyage !
                        </div>

                        <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="basic-addon1">Nom du voyage:</span>
                        <input type="text" id="input_voyage" class="form-control" placeholder="WEI, WEE, WEFA..." aria-describedby="basic-addon1">
                        </div>

                        <br>

                </div>




                        <div class="col-sm-6">
					<div class="panel panel-info">
						<div class="panel-heading">
							Bus pour ce voyage
							<button type="button" class="close" data-toggle="modal" data-target="#myModal">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
							</button>
						</div>
						<div class="panel-body">
						   <div class="list-group">
						      <div class="raw"> <div class="col-md-12"> Bus 1: 38 places dont 11 réservées</div></div>
					  	   </div>
						</div>
						<div class="panel-footer">
							<div style = "text-align:right">
								<button type="button" class="btn btn-primary" >Modifier</button>
								&nbsp;

								<button type="button" class="btn btn-danger" onclick="javascript:supprimerGroupe(allerClickedGroup)">Supprimer</button>
							</div>
						</div>
                                        </div>
                        <div>
                                <button class="btn btn-lg btn-info btn-block" type="submit" onclick="javascript:goToRetour();">VALIDER</button>
                        </div>
				</div>
		</div>
	</div>

	<!-- Fin du formulaire ALLER -->







	<!-- Formulaire RETOUR -->
<div class="container-fluid" id="formulaire_retour" style="display:none">
      <div class="page-header">
        <h1>Création d'un voyage - étape 2 : le retour</h1>
      </div>

        <div class="container theme-showcase" role="main">


                <div class="col-sm-6">
                        <div class="alert alert-success" role="alert">
                         Votre nouveau voyage :
                        </div>

                        <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="basic-addon1">Nom du voyage:</span>
                        <input type="text" id="nom_voyage" class="form-control" aria-describedby="basic-addon1" disabled="true">
                        </div>

                        <br>
                </div>




                        <div class="col-sm-6">
					<div class="panel panel-success">
						<div class="panel-heading">
							Bus pour ce voyage
							<button type="button" class="close" data-toggle="modal" data-target="#myModal">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
							</button>
						</div>
						<div class="panel-body">
						   <div class="list-group">
						      <div class="raw"> <div class="col-md-12"> Bus 1: 38 places dont 11 réservées</div></div>
					  	   </div>
						</div>
						<div class="panel-footer">
							<div style = "text-align:right">
								<button type="button" class="btn btn-primary" >Modifier</button>
								&nbsp;

								<button type="button" class="btn btn-danger" onclick="javascript:supprimerGroupe(allerClickedGroup)">Supprimer</button>
							</div>
						</div>
                                        </div>
                        <!--div>      				
        				<button type="button" class="btn btn-lg btn-block btn-primary" onclick="javascript:submitAllerEtRetour();">CREER LE VOYAGE</button>
                        </div-->
			</div>

	        <div class="col-sm-6">
                <button type="button" class="btn btn-lg btn-block btn-warning" onclick="javascript:goBackToAller();">RETOUR</button> 
            </div>
            <div class="col-sm-6"> 
        				<button type="button" class="btn btn-lg btn-block btn-success" onclick="javascript:submitAllerEtRetour();">CREER LE VOYAGE</button>	
           </div>

	</div>

        
        
    </div>
	<!-- Fin du formulaire RETOUR -->
        </div>


</div>









<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times</span></button>
			           <h4 class="modal-title" id="myModalLabel">Ajouter un nouveau bus:</h4>
			</div>
			
			<div class="modal-body">
			     <div class="radio">
			         <div class="panel panel-info">
			              <div class="panel-heading">
			         	Informations sur le Bus
			              </div>
			      
			              <div class="panel-body">
			              <div class="row">
				          <div class="col-md-12">
				             Nombre de places assises:
				             <input type="text" class="form-control" placeholder="20,40,60..." aria-describedby="basic-addon1">
				          </div>
					  <div class="col-md-12">
				             Nombre de places réservées:
				             <input type="text" class="form-control" placeholder="1,2,10,100.." aria-describedby="basic-addon1">
				          </div>
				       </div>
			          </div>
			      </div>
			  </div>
			  
			  <div class="modal-footer">
			  <button type="button" class="btn btn-primary" data-dismiss="modal" >Sauvegarder</button>
			  </div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
			      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times</span></button>
			           <h4 class="modal-title" id="myModalLabel">Ajouter un nouveau bus:</h4>
			</div>
			
			<div class="modal-body">
			     <div class="radio">
			         <div class="panel panel-info">
			              <div class="panel-heading">
			         	Informations sur le Bus
			              </div>
			      
			              <div class="panel-body">
			              <div class="row">
				          <div class="col-md-12">
				             Nombre de places assises:
				             <input type="text" class="form-control" placeholder="20,40,60..." aria-describedby="basic-addon1">
				          </div>
				      </div>
				      <div class="row">
				          <div class="col-md-12">
				             Nombre de places à réserver:
				             <input type="text" class="form-control" placeholder="1,2,10,100..." aria-describedby="basic-addon1">
				          </div>
				      </div>
				      <div class="row">
				          <div class="col-md-12">
				             Destination du bus:
				             <input type="text" class="form-control" placeholder="MAISEL ou Cité Universitaire..." aria-describedby="basic-addon1">
				          </div>
				      </div>
			          </div>
			      </div>
			  </div>
			  
			  <div class="modal-footer">
			  <button type="button" class="btn btn-primary" data-dismiss="modal" >Sauvegarder</button>
			  </div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

  function HideBus(){
  document.getElementById('info-bus1').show();
  }
  
  var allerClickedGroup, retourClickedGroup;
  function goToRetour(){
  document.getElementById('formulaire_aller').style.display = 'none';
  document.getElementById('nom_voyage').value = document.getElementById('input_voyage').value;
  document.getElementById('formulaire_retour').style.display = 'block';
  }
  function goBackToAller(){
  document.getElementById('formulaire_retour').style.display = 'none';
  document.getElementById('formulaire_aller').style.display = 'block';
  }
  function submitAllerEtRetour(){
  window.location.href = "validation_bde.php";
  }
  
  function allerHideAllMembers(){
  var i;
  for(i = 0; i<=10; i++){
		    try{
		    var group_id = "allerGroup" + parseInt(i) ; 
		    document.getElementById(group_id).style.display = 'none';
		    }
		    catch(err){
		    };

		    }
		    }
		    
		    function allerShowGroupMembers(j){
		    allerClickedGroup = j;
		    allerHideAllMembers();
		    var group_id = "allerGroup" + parseInt(j);
		    //alert(group_id);
		    document.getElementById(group_id).style.display = 'block';
		    }
		    //Le groupe sera supprimé pour l'aller comme pour le retour
		    function supprimerGroupe(k){
		    if(k==null)
		    return;

		    var aller_suppr_id = "allerButtonGroup" + parseInt(k);
		    var groupName = document.getElementById(aller_suppr_id).textContent.replace(" ","");
		    if(confirm("Es-tu sûr de vouloir supprimer le groupe " + groupName + " ?")){
		    var aller_suppr_id = "allerButtonGroup" + parseInt(k);
		    document.getElementById(aller_suppr_id).style.display = 'none';

		    var retour_suppr_id = "retourButtonGroup" + parseInt(k);
		    document.getElementById(retour_suppr_id).style.display = 'none';
		    alert("Groupe supprimé");
		    }
		    }

		    function retourHideAllMembers(){
		    var i;
		    for(i = 0; i<=10; i++){
				      try{
				      var group_id = "retourGroup" + parseInt(i) ; 
				      document.getElementById(group_id).style.display = 'none';
				      }
				      catch(err){
				      };

				      }
				      }
				      function retourShowGroupMembers(j){
				      retourClickedGroup = j;
				      retourHideAllMembers();
				      var group_id = "retourGroup" + parseInt(j);
				      //alert(group_id);
				      document.getElementById(group_id).style.display = 'block';
				      }
				      </script>
</body>
</html>
