<?php

session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; " />

    <title>Gestion des CV | liste des CV</title>

    <link rel="stylesheet" type="text/css" href="../design/calendrier.css" media="screen" />

</head>

<body>
<h1>Liste des candidature spontanées envoyé au CIC-IT :<h1>
<?php

$link = mysqli_connect(...);

 if (!$link) {

die('Impossible de se connecter : ' . mysql_error());

}

		$nbEvents = false;

		if(isset($_GET['id']) && is_numeric($_GET['id'])) {

			// Traitement de la suppression de l'événement

			$id = htmlentities($_GET['id']);

			//echo $id."<br>";

			$req = "DELETE FROM cvjoint WHERE idcvjoint = ".$id;

			mysqli_query($link,$req);

			echo '<ul><li>CV supprimé</li></ul>';

		}

		

//affiche la liste des cv.			

		$req = "SELECT * FROM cvjoint";
		
		$cv = mysqli_query($link, $req);
//	$cont = mysqli_query($link, $req2);
//		while($cont = mysqli_fetch_array($cont,MYSQLI_BOTH)) {
//	echo "Nom";	
//	echo '    
//	Nom :'.html_entity_decode($cont['Nom']).'!!!
//	';



		if(mysqli_num_rows($cv))

		$nbEvents = true;

		else $nbEvents = false;

		mysqli_close($link);

	?>

    

	<h1><?php echo "Liste des candidatures spontanée déposé sur le site.";?></h1>

	

    <?php

	

	if($nbEvents) {

		

		while($mescv = mysqli_fetch_array($cv,MYSQLI_BOTH)) {
			$i=$mescv['idcvjoint'];
			echo '
			
			<table class=\"listeEvent\">

				<tr><td>Nom :'.html_entity_decode($mescv['nom']).'</td></tr>

				<tr><td>Prenom :'.html_entity_decode($mescv['prenom']).'</td></tr>

				<tr><td>date de depot du CV :'.html_entity_decode($mescv['date']).'</td></tr>
				<tr><td>Le CV :'.html_entity_decode($mescv['NomfichierCV']).'</td></tr>
				<tr><td>La lettre de motivation (ou autre) :'.html_entity_decode($mescv['NomfichierLettreM']).'</td></tr>
			<tr><td><a href=../html/www/'.html_entity_decode($mescv['NomfichierCV']).'> CV </a>pour imprimer ou/et télécharger</td></tr>
			<tr><td><a href=../html/www/'.html_entity_decode($mescv['NomfichierLettreM']).' > Lettre Motivation </a>pour imprimer ou/et télécharger </td></tr>
			</table><hr>'
			;
			
			?>
			
		<!--<br><form action="../admin/contactCVPDF.php" method="post" />
			<input type="hidden" name="idContact" value="<?// echo $i; ?>" />
			<input type="submit" value="pdf" />
			</form>
			<br/><hr><br/>-->
			
<!--<tr><td><a href="listeCV.php?id="'.$mescv['idcvjoint'].'">Supprimer </a>(deconseille)</td></tr> à rajouter plus tard dans la table ...-->
		<?php }

	} else {

		echo '<p>Il n\'y a pas de CV à afficher!</p>';

	}
	/* à faire : pdf de la liste à télécharge ou imprimer:
echo"
<hr><br><form action=\"../admin/contactCVPDF.php\" method=\"post\" />
			<input type=\"hidden\" name=\"idContact\" value=\"1\" />
			<input type=\"submit\" value=\"liste en pdf\" />
			</form>
			<br/><hr><br/>";	
*/
   



//à chaque ligne, permettre l'affichage en pdf du contact ou cv :plus tard...

//ajouter à la possibiliter de télécharge (adresse du fichier...)ou imprime le PDF?, la possibilité de téléchager le(s) fichier liées au cv. OK

//à chaque ligne, pemetre la suppression (pas conseiller!) Non



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
 
//<tr><td><a href="listeCV.php?id='.$mescv['idcvjoint'].'">Supprimer </a>(deconseille)</td></tr>
		

?>		

</body>

</html>
