<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf8" />
	<title>Gestion de stage : affichage du stage proposé par le CIC-IT sur son site.</title>
    <link rel="stylesheet" type="text/css" href="../design/calendrier.css" media="screen" />
	
</head>
<body>
<h1>Nouveau stagiaire</h1>
<?php
// Variables vides pour les valeurs par défaut des champs
	$prenomS=""; $nomS=""; $formationS=""; 
	?>
    <form method="post" action="NouveauStagiaire.php" accept-charset="utf8" >
    	<table id="AjoutPost">
        	
       		<tr>
       			<td colspan="2"><br/>
                	<label for="nomS">Nom :</label><br/>
       				<input type="text" name="nomS" id="NomS" size="50" value="<?php echo $nomS; ?>" /><br/><br/>
                </td>
       		</tr>
			<tr>
       			<td colspan="2"><br/>
                	<label for="prenomS">Prenom :</label><br/>
       				<input type="text" name="prenomS" id="prenomS" size="50" value="<?php echo $prenomS; ?>" /><br/><br/>
                </td>
       		</tr>
            <tr>
            	<td colspan="2">
       				<label for="formationS">Formation:</label><br/>
       				<input type="text"  id="formationS" name="formationS"><?php echo $formationS ?><br>
                </td>
            </tr>
			<tr>
				<td colspan="2">
       				<label for="anneeS">Année</label><br/>
       				<input type="text"  id="anneeS" name="anneeS"><?php echo $AnnéeS ?><br>
                </td>
			</tr>
			<tr>
				<td colspan="2">
       				<label for="titreStage">titre du stage (enrgistre dans la BD)</label><br/>
       				<input type="text"  id="titreS" name="titreStage"><?php echo $titreStage ?><br>
					<!-- format de quatre chiffre... à vérifier!   -->
                </td>
			</tr>
            <tr>
            	<td colspan="2"><input type="submit" name="envoi" value="Envoyer"/></td>
            </tr>
       </table>
    </form>



	
	<?php
		// Variables vides pour les valeurs par défaut des champs
	//ajouer l'id du stage....
		if(isset($_POST['envoi'])) {
		
			$titreStage= htmlentities(addslashes($_POST['titreStage']));
			
		
			// Traitement de l'enregistrement d'un nouveau stagiaire :
			
			$nomS = htmlentities(addslashes($_POST['nomS']));
			$prenomS = htmlentities(addslashes($_POST['prenomS']));			// marche pour stoke les accent dans la BD.bien decodé par la page de presentation!
			$formationS = htmlentities(addslashes($_POST['formationS']));
			$anneeS= htmlentities(addslashes($_POST['anneeS']));
			
			//$annee=date('Y');
			echo $annee;	
				
				
				if(!empty($prenomS) && !empty($nomS )&& !empty($formationS)) {
					// Traitement de l'enregistrement de l'événement
					echo "debut du traitement des données envoyees!";
	
					//$link = mysqli_connect('localhost', 'root','','cic-it2017');
					$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev'); // à distance...
				
				$req = "INSERT INTO stagiaires( nomS, prenomS, formation, annee) VALUES ( '$nomS', '$prenomS','$formationS','$anneeS')";
				mysqli_query($link,$req) or die(mysqli_error($link));
					
					mysqli_close($link);
					
					echo '<ul><li>Nouveau stagiaire enregistré !</li></ul>';
				} else {
					echo '<ul><li>Stagiaire non enrgistre.</li></ul>';
				}			
		}
?>

<?php
echo "

 <ul><li><a href=\"../admin/ajoutevent.php\">Ajouter un événement au calendrier des évenements</a></li>
		<li><a href=\"../admin/supprevent.php\">Supprimer un événement</a></li>
		<li><a href=\"../admin/publicationsMaJ.php\">Ajout d'une publication</a></li>
        <li><a href=\"../admin/ajoutPost.php\">affichage de postes proposés</a></li>
		<li><a href=\"../admin/supprimeposte.php\">suppression de l'affichage de postes proposés</a></li>
		<li><a href=\"../admin/ajoutStage.php\">affichage de stage proposés</a></li>
		<li><a href=\"../admin/supprimestage.php\">suppression de l'affichage de stages</a></li>
		<li><a href=\"../admin/listeCV.php\">gestion des candidatures spontanées envoyé au site</a></li>
		<li><a href=\"../admin/listeContacts.php\">gestion des contactes (formulaire contacte) envoyé au site</a></li>
		<li><a href=\"../index.php\">Retourd à l'acceuil</a></li>	
		</ul>";
    ?>
<p class="centre"><br/><a href="../index.php">Revenir à l'accueil</a></p>
</body>
</html>