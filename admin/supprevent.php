<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Gestion de calendrier | Suppression d'événement</title>
    <link rel="stylesheet" type="text/css" href="../design/calendrier.css" media="screen" />
</head>
<body>
	<?php
		//include("../calendrier/includes/sql_connect.php");
$link = mysqli_connect(...);
					
	 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}

		$nbEvents = false;
		if(isset($_GET['id']) && is_numeric($_GET['id'])) {
			// Traitement de la suppression de l'événement
			$id = htmlentities($_GET['id']);
			
			$req = "DELETE FROM calendrier WHERE id_evenement = " .$id;
			mysqli_query($link,$req);
			
			$req = "DELETE FROM evenements WHERE id_evenement = " .$id;
			mysqli_query($link,$req);
			
			echo '<ul><li>Evénement supprimé !</li></ul>';
		}
		
		
		// Récupération des événements
		$req = "SELECT * FROM evenements";
		$evenements = mysqli_query($link, $req);
		
		if(mysqli_num_rows($evenements))
		$nbEvents = true;
		else $nbEvents = false;
		
		
		mysqli_close($link);
	?>
    
	<h1>Supprimer un événement</h1>
	
    <?php
	if($nbEvents) {
		
		while($evenement = mysqli_fetch_array($evenements,MYSQLI_BOTH)) {
			echo '
			<table class="listeEvent">
				<tr><td>'.html_entity_decode($evenement['titre_evenement']).'</td></tr>
				<tr><td>'.html_entity_decode($evenement['contenu_evenement']).'</td></tr>
				<tr><td><a href="supprevent.php?id='.$evenement['id_evenement'].'">Supprimer</a></td></tr>
			</table>
			<br/><br/>
			';
		}
		
	} else {
		
		echo '<p>Il n\'y a pas d\'événements à supprimer</p>';
		
	}
	?>
    <ul><li><a href="ajoutevent.php">Ajouter un événement au calendrier des évenements</a></li>
		<li><a href="supprevent.php">Supprimer un événement</a></li>
		<li><a href="publicationsMaJ.php">Ajout d'une publication</a></li>
        <li><a href="ajoutPost.php">affichage de postes proposés</a></li>
		<li><a href="supprimeposte.php">suppression de l'affichage de postes proposés</a></li>
		<li><a href="ajoutStage.php">affichage de stage proposés</a></li>
		<li><a href="supprstage.php">suppression de l'affichage de stage proposés</a></li>
		<li><a href="NouveauStagiaire.php">Ajouter un nouveau stagiaire</a></li>
		<li><a href="listeCV.php">gestion des candidatures spontanées envoyé au site</a></li>
		<li><a href="listeContacts.php">gestion des contactes (formulaire contacte) envoyé au site</a></li>
		<li><a href="../index.php">Retourd à l'acceuil</a></li>
		
		</ul>
    
    <p class="centre"><a href="../index.php">Revenir à l'accueil</a></p>
</body>
</html>
