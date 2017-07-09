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
		
$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');					
	 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}

		//$nbPoste = false;
		if(isset($_GET['idPoste']) && is_numeric($_GET['idPoste'])) {
			// Traitement de la suppression de l'événement
			$id = htmlentities($_GET['idPoste']);
			echo "supprimer :".$id;
			$req = "DELETE FROM poste WHERE idPoste = " .$id;
			mysqli_query($link,$req);
	
			echo '<ul><li>poste supprimé à l\'affichage !</li></ul>';
		}
		
		
		// Récupération des événements
		$req = "SELECT * FROM poste";
		$poste = mysqli_query($link, $req);
		
		if(mysqli_num_rows($poste))
		$nbPostes = true;
		else $nbPostes = false;
		
		
		mysqli_close($link);
	?>
    
	<h1>Supprimer un poste</h1>
	
    <?php
	if($nbPostes) {
		
		while($postes = mysqli_fetch_array($poste,MYSQLI_BOTH)) {
			echo '
			<table class="listeEvent">
				<tr><td>'.html_entity_decode($postes['titrePoste']).'</td></tr>
				<tr><td>'.html_entity_decode($postes['descriptionPoste']).'</td></tr>
				<tr><td><a href="../admin/www/'.$postes['NomPDFPoste'].'">description en PDF du poste</a></td></tr>
				<tr><td><a href="supprimeposte.php?idPoste='.html_entity_decode($postes['idPoste']).'">Supprimer</a></td></tr>
			</table>
			<br/><br/>
			';
		}
		
	} else {
		
		echo '<p>Il n\'y a pas de poste à supprimer</p>';
		
	}
	echo "
 <ul><li><a href=\"../admin/ajoutevent.php\">Ajouter un événement au calendrier des évenements</a></li>
		<li><a href=\"../admin/supprevent.php\">Supprimer un événement</a></li>
		<li><a href=\"../admin/publicationsMaJ.php\">Ajout d'une publication</a></li>
        <li><a href=\"../admin/ajoutPost.php\">affichage de postes proposés</a></li>
		<li><a href=\"../admin/supprimeposte.php\">suppression de l'affichage de postes proposés</a></li>
		<li><a href=\"../admin/ajoutStage.php\">affichage de stage proposés</a></li>
		<li><a href=\"NouveauStagiaire.php\">Ajouter un nouveau stagiaire</a></li>
		<li><a href=\"../admin/supprimestage.php\">suppression de l'affichage de stages</a></li>
		<li><a href=\"../admin/listeCV.php\">gestion des candidatures spontanées envoyé au site</a></li>
		<li><a href=\"../admin/listeContacts.php\">gestion des contactes (formulaire contacte) envoyé au site</a></li>
		<li><a href=\"../index.php\">Retourd à l'acceuil</a></li>
		
		</ul>";
// Fin  de la page d'administration, en developpement! 
	?>
    
    
    <p class="centre"><a href="../index.php">Revenir à l'accueil</a></p>
</body>
</html>