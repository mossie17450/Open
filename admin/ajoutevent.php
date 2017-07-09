<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Gestion de calendrier | Ajout d'événement</title>
    <link rel="stylesheet" type="text/css" href="../design/calendrier.css" media="screen" />
	
</head>
<body>
	<?php
		// Variables vides pour les valeurs par défaut des champs
		$titre=""; $description=""; $dateDebut = date("d/m/Y", time()); $dateFin = date("d/m/Y", time());
		
		if(isset($_POST['envoi'])) {
			// Traitement de l'envoi de l'événement
			$titre = htmlentities(addslashes($_POST['titre']));
			$description = nl2br(htmlentities(addslashes($_POST['description'])));
			$dateDebut = htmlentities($_POST['debut']);
			$dateFin = htmlentities($_POST['fin']);
			
			$typeDate = "#^[0-3]?[0-9]/[01]?[0-9]/[0-9]{4}$#";
			
			if (preg_match($typeDate, $dateDebut) && preg_match($typeDate, $dateFin)) {
				$tabDateDeb = explode("/", $dateDebut);
				$timestampDebut = mktime(0, 0, 0, $tabDateDeb[1], $tabDateDeb[0], $tabDateDeb[2]);
				
				$tabDateFin = explode("/", $dateFin);
				$timestampFin = mktime(0, 0, 0, $tabDateFin[1], $tabDateFin[0], $tabDateFin[2]);
				
				$timestampDiff = $timestampFin - $timestampDebut;
				$nbreJours = intval($timestampDiff / 86400)+1;
				
				if($nbreJours <= 0) $nbreJours = 1;
				
				
				if(!empty($titre) && !empty($description)) {
					// Traitement de l'enregistrement de l'événement
					$identifiantCommun = time();
					$timeDuJour = $timestampDebut;
					
					//include("../calendrier/includes/sql_connect.php");
					
					
					$link = mysqli_connect( 'localhost', 'c4cicit','dyKaTm8H#','c4dev');

					for($i=0 ; $i<$nbreJours ; $i++) {
						$req = "INSERT INTO calendrier(jour_evenement, mois_evenement, annee_evenement, id_evenement) VALUES ( ".date('d', $timeDuJour).", ".date('m', $timeDuJour).", ".date('Y', $timeDuJour).", $identifiantCommun)";
						mysqli_query($link,$req) or die(mysqli_error($link));
						
						$timeDuJour += 86400; // On augmente le timestamp d'un jour
					}
					
					$req = "INSERT INTO evenements VALUES ($identifiantCommun, '$titre', '$description')";
					mysqli_query($link,$req) or die(mysqli_error());
					
					mysqli_close($link);
					
					echo '<ul><li>Evénement enregistré !</li></ul>';
				} else {
					echo '<ul><li>Titre ou description de l\'événement non renseigné.</li></ul>';
				}
			}
			else
			{
				echo "<ul><li>Date de début ou de fin d\'événement non conforme (ex. 12/02/2008).</li></ul>";
			}
		}
	?>
    
    <!-- Formulaire d'envoi -->
	<h1>Ajouter un événement</h1>
    
    <form method="post" action="ajoutevent.php">
    	<table id="tabAjoutEvent">
        	<tr>
            	<td><label>Du : <input type="text" name="debut" value="<?php echo $dateDebut ?>" /></label></td>
                <td><label>Au : <input type="text" name="fin" value="<?php echo $dateFin; ?>" /></label></td>
            </tr>
       		<tr>
       			<td colspan="2"><br/>
                	<label for="titre">Titre de l'événement :</label><br/>
       				<input type="text" name="titre" id="titre" size="30" value="<?php echo $titre ?>" /><br/><br/>
                </td>
       		</tr>
            <tr>
            	<td colspan="2">
       				<label for="description">Description de l'événement :</label><br/>
       				<textarea rows="10" cols="50" id="description" name="description"><?php echo $description ?></textarea>
                </td>
            </tr>
            <tr>
            	<td colspan="2"><input type="submit" name="envoi" value="Envoyer"/></td>
            </tr>
       </table>
    </form>
    

 <ul><li><a href="ajoutevent.php">Ajouter un evenement</a></li>
		<li><a href="supprevent.php">Supprimer un événement</a></li>
		<li><a href="publicationsMaJ.php">Ajouter une publication</a></li>
        <li><a href="ajoutPost.php">afficher une proposition de poste sur notre page "Offre de poste"</a></li>
		<li><a href="supprimeposte.php">supprimer l'affichage de postes sur notre page "Offre de poste"</a></li>
		<li><a href="ajoutPost.php">afficher une proposition de stage sur notre page "Offre de stage"</a></li>
		<li><a href="supprimeposte.php">supprimer l'affichage de stages sur notre page "Offre de stage"</a></li>
		<li><a href="NouveauStagiaire.php">Ajouter un nouveau stagiaire à la liste</a></li>
		<li><a href="listeCV.php">gestion des candidatures spontanées envoyé au site</a></li>
		<li><a href="listeContacts.php">gestion des contactes (formulaire contacte) envoyé au site</a></li>
		<li><a href="../index.php">Retourd à l'acceuil</a></li>	
		</ul>
	
	
    <p class="centre"><br/><a href="../index.php">Revenir à l'accueil</a></p>
</body>
</html>
