<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Gestion des contactes | liste suppression?</title>
    <link rel="stylesheet" type="text/css" href="../design/calendrier.css" media="screen" />
</head>
<body>
<h1>liste des contactes</h1>
<?php

$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');

 if (!$link) {

die('Impossible de se connecter : ' . mysql_error());

}

		$nbEvents = false;

		if(isset($_GET['id']) && is_numeric($_GET['id'])) {

			// Traitement de la suppression de l'événement

			$id = htmlentities($_GET['id']);

			//echo $id."<br>";

			$req = "DELETE FROM contact WHERE idContact = ".$id;

			mysqli_query($link,$req);

			echo '<ul><li>contact supprimé</li></ul>';

		}

		

//affiche la liste des cv.			

		
		$req2 = "SELECT * FROM contact";
		
	$cont = mysqli_query($link, $req2);
		if(mysqli_num_rows($cont)){

		$nbEvents = true;
}
		else $nbEvents = false;

		

	?>

    

	<h1><? echo "Liste des contactes déposé sur le site.";?></h1>

	

    <?php

	

	if($nbEvents) {
		$cont = mysqli_query($link, $req2);
	
	
		while($contact = mysqli_fetch_array($cont,MYSQLI_BOTH)) {
			$i=$contact['idContact'];
			
		echo '	
		<table class=\"listeEvent\">

				<tr><td>Nom :'.html_entity_decode($contact['Nom']).'</td></tr>

				<tr><td>Prenom :'.html_entity_decode($contact['Prenom']).'</td></tr>
				<tr><td>Message :'.html_entity_decode($contact['message']).'</td></tr>
				<tr><td>date de depot du contacte :'.html_entity_decode($contact['date']).'</td></tr>
				<tr><td><a href="listeContacts.php?id='.$i.'">Supprimer </a>(deconseille)</td></tr>			
			</table><hr> '
			;
			
			?>
			
		<br><form action="../admin/contactPDF.php" method="post" />
			<input type="hidden" name="idContact" value="<?php echo $i; ?>" />
			<input type="submit" value="pdf" />
			</form>
			<br/><hr><br/>
			
<!--<tr><td><a href="listeCV.php?id="'.$mescv['idcvjoint'].'">Supprimer </a>(deconseille)</td></tr> à rajouter plus tard dans la table ...-->
		<?php }

	} else {

		echo '<p>Il n\'y a pas de contactes à afficher!</p>';
		mysqli_close($link);

	}
	// à faire : pdf de la liste à télécharge ou imprimer:
echo"
<hr><br><form action=\"../admin/listeDesContactesPDF.php\" method=\"post\" />
			<input type=\"hidden\" name=\"idListeContactes\" value=\"1\" />
			<input type=\"submit\" value=\"liste en pdf\" />
			</form>
			<br/><hr><br/>";	

//à chaque ligne, permettre l'affichage en pdf du contact ou cv :plus tard...





 echo "
 <ul><li><a href=\"../admin/ajoutevent.php\">Ajouter un événement au calendrier des évenements</a></li>
		<li><a href=\"../admin/supprevent.php\">Supprimer un événement</a></li>
		<li><a href=\"../admin/publicationsMaJ.php\">Ajout d'une publication</a></li>
        <li><a href=\"../admin/ajoutPost.php\">affichage de postes proposés</a></li>
		<li><a href=\"../admin/supprimeposte.php\">suppression de l'affichage de postes proposés</a></li>
		<li><a href=\"../admin/ajoutStage.php\">affichage de postes proposés</a></li>
		<li><a href=\"../admin/supprimestage.php\">suppression de l'affichage de stages proposés</a></li>
		<li><a href=\"NouveauStagiaire.php\">Ajouter un nouveau stagiaire</a></li>
		<li><a href=\"../admin/listeCV.php\">gestion des candidatures spontanées envoyé au site</a></li>
		<li><a href=\"../admin/listeContacts.php\">gestion des contactes (formulaire contacte) envoyé au site</a></li>
		<li><a href=\"../index.php\">Retourd à l'acceuil</a></li>
		</ul>";
		
?>		


	
	
</body>
</html>

			

   
