<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf8" />
	<title>Gestion de stage : affichage du stage proposé par le CIC-IT sur son site.</title>
    <link rel="stylesheet" type="text/css" href="../design/calendrier.css" media="screen" />
	
</head>
<body>

<?php
	$titreStage=""; $descriptionStage=""; 
	
	?>
    <!-- Formulaire d'envoi -->
	<h1>Afficher un stage sur le site internet.</h1>
    
   <form method="post" action="ajoutStage.php"  accept-charset="utf8" enctype="multipart/form-data">
	<!-- ajouter un telegargement de pdf ou docx -->
   <table >
        	
       		<tr>
       			<td colspan="2"><br/>
                	<label for="poste">Titre du stage :</label><br/>
       				<input type="text" name="titreStage" id="titreStage" size="30" value="<?php echo $titreStage ?>" /><br/><br/>
                </td>
       		</tr>
            <tr>
            	<td colspan="2">
       				<label for="description">Description du stage :</label><br/>
       				<textarea rows="10" cols="50" name="descriptionStage"><?php echo $descriptionStage ?></textarea>
                </td>
            </tr>
			 <tr>
            	<td colspan="2">
				 <input type="hidden" name="MAX_FILE_SIZE" value="8000000">

    <?php echo "le stage en pdf: <br>"; ?><input type="file" name="avatar">

     <br><?php echo "taille max : 2 Mo!"; ?>
				
				</td>
            </tr>
            <tr>
            	<td colspan="2"><input type="submit" name="envoi" value="Envoyer"/></td>
            </tr>
       </table>
    </form>
	
	
		<?php
		
			// Variables vides pour les valeurs par défaut des champs

		if(isset($_POST['envoi'])) {
		
			//upload du PDFPoste
				$dossier = 'www/';

$fichier = basename($_FILES['avatar']['name']); //?????

echo $fichier; //(nom du fichier?)

$taille_maxi = 3000000;

$taille = "<br>".filesize($_FILES['avatar']['tmp_name']);

//echo "<br/>taille :".$taille."!";

$extensions = array('.pdf');

$extension = strrchr($_FILES['avatar']['name'], '.'); 

$date=date("Y-m-d h:i:sa");

	$fichier=$date.$fichier; //concatenation fichier et date ???



	//echo "premier fichier: ".$fichier;

//Début des vérifications de sécurité...



if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau

{

     $erreur = 'Vous devez uploader un fichier de type   pdf!';

}



if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload

{

     //On formate le nom du fichier ici...

     $fichier = strtr($fichier, 

          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 

          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

    }
	
		 if( move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier.$fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
	{
		// Variables vides pour les valeurs par défaut des champs
		$titreStage=""; $descriptionStage=""; 
		
		
			// Traitement de l'envoi de l'événement
			$titreStage = htmlentities(addslashes($_POST['titreStage']));
			
			//echo "titre stage =".$titreStage; //pour le dev
			$descriptionStage = htmlentities(addslashes($_POST['descriptionStage']));
			//echo "description stage =".$descriptionStage;  //pour le dev
				
				if(!empty($titreStage) && !empty($descriptionStage)&& !empty($fichier)) {
					// Traitement de l'enregistrement de l'événement
	
					$link = mysqli_connect(...);
				
					$req = "INSERT INTO stage ( titreStage, descriptionStage, NomStagePDF) VALUES ( '$titreStage', '$descriptionStage','$fichier')";
					mysqli_query($link,$req) or die("error!!!");
					
					mysqli_close($link);
					
					echo '<ul><li>Les descriptions du stage enregistrées et affichées !</li></ul>';
				} 
				else {
					echo '<ul><li>Titre ou description du stage non renseigné.</li></ul>';
				}
			
		}
	}
  
	
	echo "<ul><li><a href=\"ajoutevent.php\">Ajouter un événement au calendrier des évenements</a></li>
		<li><a href=\"supprevent.php\">Supprimer un événement</a></li>
		<li><a href=\"publicationsMaJ.php\">Ajout d'une publication</a></li>
        <li><a href=\"ajoutPost.php\">affichage de postes proposés</a></li>
		<li><a href=\"supprimeposte.php\">suppression de l'affichage de postes proposés</a></li>
		<li><a href=\"ajoutStage.php\">affichage de stage proposés</a></li>
		<li><a href=\"supprimestage.php\">suppression de l'affichage de stages</a></li>
		<li><a href=\"NouveauStagiaire.php\">Ajouter un nouveau stagiaire</a></li>
		<li><a href=\"listeCV.php\">gestion des candidatures spontanées envoyé au site</a></li>
		<li><a href=\"listeContacts.php\">gestion des contactes (formulaire contacte) envoyé au site</a></li>
		<li><a href=\"../index.php\">Retourd à l'acceuil</a></li>
		
		</ul>";
		
    ?>
	
    <p class="centre"><br/><a href="../index.php">Revenir à l'accueil</a></p>
</body>
</html>
