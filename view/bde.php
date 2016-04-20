<!DOCTYPE html>
<html>
<head>
	<title>BUS Planner-Session BDE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
            <li><a href="login.php">Accueil</a></li>
            <li><a href="a_propos.php">A propos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

        <div class="container theme-showcase" role="main">


<div class="container-fluid" style="text-align:center">
		<h1>BUS Planner-Session BDE</h1>
	</div>

	<div class="row">
	<div id="header_aller">
	    <div class="col-md-12" style="text-align:center">
	      <h2>
			Bienvenue admin <strong><?php echo $prenom_getted . " " . $nom_getted; ?> </strong> !
			</br>
			</h2>
			Entrée des données pour le voyage <strong> ALLER </strong>
			
	    </div>
	  </div>
	</div>

	<div class="row">
	<div id="header_retour" style="display:none">
	    <div class="col-md-12" style="text-align:center">
	      <h2>
			Bienvenue admin <strong><?php echo $prenom_getted . " " . $nom_getted; ?> </strong> !
			</br>
		</h2>
			Entrée des données pour le voyage <strong> RETOUR </strong>
	      
	    </div>
	  </div>
	</div>
	
	<div class="row">
	  <p>
	      <div class="input-group col-md-4 col-md-offset-4">
		<span class="input-group-addon" id="basic-addon1">Nom du voyage:</span>
		<input type="text" class="form-control" placeholder="WEI, WEE, WEFA..." aria-describedby="basic-addon1">
	      </div>
	    </div>
	  </p>

	<!-- Formulaire ALLER -->
	<div class="container-fluid" id="formulaire_aller">
		<div class="row">
			<div class="col-md-4 col-md-offset-4"> 
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
			</div>

		</div>

		<div class="row"> 
			<div class="col-md-1 col-md-offset-9"> 
				<button type="button" class="btn btn-success" onclick="javascript:goToRetour();">Suivant</button>
			</div>
		</div>
	</div>
	<!-- Fin du formulaire ALLER -->

	<!-- Formulaire RETOUR -->
	<div class="container-fluid" id="formulaire_retour" style="display:none">
		<div class="row">
			<div class="col-md-4 col-md-offset-4"> 
					<div class="panel panel-success">
						<div class="panel-heading">
							Bus pour ce voyage
							<button type="button" class="close" data-toggle="modal" data-target="#myModal2">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
							</button>
						</div>
						<div class="panel-body">
						   <div class="list-group">
						      <div class="raw"> <div class="col-md-12"> Bus 1: 38 places dont 11 réservées à destination de la MAISEL </div></div>
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
			</div>

		</div>

		<div class="row"> 
			<div class="col-md-1 col-md-offset-8">
				<button type="button" class="btn btn-warning" onclick="javascript:goBackToAller();">Retour</button>
 			</div>
			<div class="col-md-1">
				<button type="button" class="btn btn-primary" onclick="javascript:submitAllerEtRetour();">Soumettre</button>
			</div>
		</div>
	</div>
	<!-- Fin du formulaire RETOUR -->



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
  document.getElementById('header_aller').style.display = 'none';
  document.getElementById('formulaire_retour').style.display = 'block';
  document.getElementById('header_retour').style.display = 'block';
  }
  function goBackToAller(){
  document.getElementById('formulaire_retour').style.display = 'none';
  document.getElementById('header_retour').style.display = 'none';
  document.getElementById('formulaire_aller').style.display = 'block';
  document.getElementById('header_aller').style.display = 'block';
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
