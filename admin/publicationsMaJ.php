<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">	
<head>
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!---                         -->
<!--- mes feuilles de style : -->
<!---                         -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/moyenneResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="css/petitResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 400px)" href="css/toutpetitResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/calendrier.css" />
<!--<link rel="stylesheet" type="text/css" href="css/menuHDR2.css" />-->
<link rel="stylesheet" type="text/css" href="../css/admin.css" >
</head>

<h1><?php echo "Page de mise à jour des publications: ajout d'une publi.";  ?></h1>

<form method="post" name="validez">

<fieldset><legend><?php echo "Ajout d'une publication." ; ?></legend>
 

 <label style="margin-left:5%;"><?php echo "Titre de la publication"; ?> *</label>
 <input type="text" maxlength="128" name="titreP" size="60"  /><br>
<hr>
 <label style="margin-left:5%;"><?php echo "nom du journale/congres"; ?> *</label>
 <input type="text" maxlength="128" name="revue" id="revue" size="60" />
<hr>
 <label style="margin-left:5%;"><?php echo "Type de  publication"; ?> *</label><br/>
 
<label style="margin-left:10%;">ACL</label><input type="radio" name="typePubli" value="ACL" ><br/>
<label style="margin-left:10%;">ACTN</label><input type="radio" name="typePubli" value="ACTN" ><br/>
<label style="margin-left:10%;">ACTI</label><input type="radio" name="typePubli" value="ACTI" ><br/>
<label style="margin-left:10%;">COM</label><input type="radio" name="typePubli" value="COM" ><br>
 <label style="margin-left:10%;">AFF</label><input type="radio" name="typePubli" value="AFF" ><br>
<label style="margin-left:10%;">Ouvrage</label><input type="radio" name="typePubli" value="Ouvrage" ><br>
 <label style="margin-left:10%;">Brevet</label><input type="radio" name="typePubli" value="Brevet" style="margin-left:20px;">
<hr>
<label style="margin-left:5%;">année de publication :</label>
<input type="text" maxlength="20" name="annee" size="20" /><br>
 <hr>
<br>
<input type="reset" value="recommencez">
<input type="submit" value="validez" name="validez">
</form>

<?php 


//verification des entrées dans le formulaire avant de les entre dans la bd:

//type de publication: /*
if(!empty($_POST['validez'])){

if (empty($_POST['typePubli'])) {

    $nameErr = "type publi? un oubli?<br/>";

	echo $nameErr;

	$typeP=NULL;

  } else {

  // echo $_POST['typePubli'];
$codification=$_POST['typePubli'];
echo $codification;
  }
		
//nom du journale ou autre  
if (empty($_POST['revue'])) {

    $nameErr = "pas de titre de journale! un oubli?<br/>";

	echo $nameErr;

	$revue=NULL;

  } else {
	$revu1=addslashes($_POST['revue']);
    $revue= utf8_decode($revu1);
echo "<br>journale:".$revue."<br>";
  }
 
  if (empty($_POST['titreP'])) {

    $nameErr = "pas de titre de publication! un oubli?<br/>";

	echo $nameErr;

	$titreP=NULL;

  } else {
	$titreP1=addslashes($_POST['titreP']);
    $titreP = utf8_decode($titreP1);
	
	echo "titre publi : ".$titreP." !<br>";
  }
  //année
  
   if (empty($_POST['annee'])) {

    $nameErr = "pas d'annee de publication? un oubli?<br/>";

	echo $nameErr;

	$annee=NULL;

  } else {

    $annee = $_POST['annee'];
  }
 

  if(empty($_POST['revue'])||empty($_POST['titreP'])||empty($_POST['annee'])||empty($_POST['typePubli']))
 {
echo "le formulaire n'est pas correctement remplie, recommencez!"; 
  }
else echo "on continue."; 


 if(!(empty($_POST['revue'])||empty($_POST['titreP'])||empty($_POST['annee'])||empty($_POST['typePubli']))){
 
{
   //echo"<br>on insert dans la bd!<br>";
//echo"type de publi :".$codification."<br>";
$link = mysqli_connect(...); // bd distante...
	if (!$link) {
		die('Impossible de se connecter : ' . mysql_error());
				}
		//else
		//echo "connecter!<br>";
			
//.......................................................................//
//insertion  dans la table journale si il n'y est pas deja
//.......................................................................//
//verifie si le journale (ou autre) est present dans la table journale:

$sql2="SELECT idJournal, titreJournal FROM journale WHERE titreJournal='".$revue."' ";
$req2 = mysqli_query($link,$sql2) or die ("Erreur SQL2 !<br>".$sql."<br>".mysqli_error($link));

$row2 = $req2->fetch_assoc();
/*pour le dev : */
//echo " id du journale:".$row2['idJournal']."!";

$idJou=$row2['idJournal'];
if($row2['idJournal']==""){
//echo "oui<br>"; 

//insertion  dans la table journale (car il n'y est pas encore!)
// attribue un autre idpubli si la publi existe dans un autre journale...? (15Mars2017)

echo "oui pour l'insertion....<br>"; //pour le dev.
$sql1="INSERT INTO journale (titreJournal) VALUES ('".$revue."') ";

$req1 = mysqli_query($link,$sql1) or die ("Erreur SQL !<br>".$sql1."<br>".mysqli_error($link));
echo "verif bd!";

// je recupere l'id du journale de la publi avant l'insertion dans la table 'publication'...

$sql="SELECT idJournal, titreJournal FROM journale WHERE titreJournal='".$revue."' ";
$req = mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link));
$row = $req->fetch_assoc();

$idJou=$row['idJournal'];
//echo "id du journal :".$row['idJournal']."!<br>";//pour le dev.
//printf("id = %s (%s)\n", $row['idJournal'], gettype($row['idJournal']));
//printf("label = %s (%s)\n", $row['titreJournal'], gettype($row['titreJournal']));
}

//echo "mon id du journal :".$idJou."!<br>";//pour le dev.
//echo $idJou."<br>";

//.......................................................................//
//insertion  de la publication dans la table publication 
//.......................................................................//

//avant, si elle existe dans un autre journale, on l'insere avec un autre idpubli!...
//insertion de la publi dans la table publi , ...//
//echo "journale :".$idJou;
if($idJou){
$sql3="INSERT INTO publication (titre, idJournal, annee, codification) VALUES('".$titreP."','".$idJou."','".$annee."','".$codification."')";
$req3 = mysqli_query($link,$sql3) or die ("Erreur SQL 3!<br>".$sql3."<br>".mysqli_error($link));

//recupération de l'id de la publication pour l'insertion dans la table 'communique'. corrige ici :
$sql4="SELECT idPublication, titre, titreJournal FROM publication join journale  WHERE titre='".$titreP."' AND publication.idJournal='".$idJou."' ";
$req4 = mysqli_query($link,$sql4) or die ("Erreur SQL 4!<br>".$sql4."<br>".mysqli_error($link));

$row4 = $req4->fetch_assoc();

echo " id publi :".$row4['idPublication']."!<br>"; //pour le dev
$idPubli=$row4['idPublication'];
echo "<br>publi :".$idPubli;
echo "<br>journale :".$idJou;
}
mysqli_close($link);
}
}
//echo "<br>publi :".$idPubli;
//echo "<br>journale :".$idJou;
?>

<?php 

if (empty($_POST['nbreAuteurs'])) {

    $nameErr = "nous avont besoin du nombre d'auteur pour continue!<br/>";

	echo $nameErr;

	$nbreAuteurs=NULL;

  } else {

    $nbreAuteurs = $_POST['nbreAuteurs'];
	
  }

?>

<form method="post" action= "auteurs.php">
<label style="margin-left:5%;"><? echo "nombre d'auteurs :"; ?> *</label>
<input type="number_format" maxlength="2" name="nbreAuteurs" id="nbreAuteurs" size="2" />
<input type="hidden"  name="idPubli"  value="<?php echo $idPubli ;?>"  />
<input type="hidden"  name="idJou"  value="<?php echo $idJou ; ?>"  />
<input type="submit" value="OK" name="submitA">

</form>

<?php
}

echo "<br>
 <ul><li><a href=\"ajoutevent.php\">Ajouter un événement au calendrier des évenements</a></li>
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
	
	
    <!--<p class="centre"><br/><a href="../index.php">Revenir à l'accueil du site</a></p>-->
</body>
</html>


	



