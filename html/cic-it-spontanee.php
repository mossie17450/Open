<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
<head>

<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf8; image=png;" >

<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />

<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!---  icone barre du navigateur...                        -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->
<!--- ma premiere( presque) feuille de style : -->

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/SecondePage.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/moyenneResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="../css/petitResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 400px)" href="../css/toutpetitResolution.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHDR2.css" />

<!--<link rel="stylesheet" type="text/css" href="../css/SecondePage.css" >-->

<!-- script de verification du formulaire....   -->

<script type="text/javascript" src="../js/verifFormS.js" ></script>

<!-- script menu -->

<script type="text/javascript">

<!--

window.onload=montre;

function montre(id) {

var d = document.getElementById(id);

	for (var i = 1; i<=10; i++) {

		if (document.getElementById('smenu'+i)) {document.getElementById('smenu'+i).style.display='none';}

	}

if (d) {d.style.display='block';}

}

//-->



// Fin -->

</script>

</script> 

</head>

<body id="equipe">

<div id="body" class="arrondie">

<div id="header">

<img src="../image/header.jpg" width="100%" height="150px" class="arrondie" >

</div><br>

<!-- choix de la langue  -->

<?php

	  if($_SESSION['lang'] && empty($_GET['langue'])){

 ($_SESSION['lang']);

 }

	else if(!empty($_GET['langue']) ){

 $_SESSION['lang']=$_GET['langue']; //si $_SESSION[lang] OK ne rien change

 }

 //inclusion des fichiers langue ... différent du choix de la langue.

	if ($_SESSION['lang']=='fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php

 include('../lang/fr-lang.php');

  	 } 

  	 

  	 else if ($_SESSION['lang']=='en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php

  	 include('../lang/en-lang.php');

  	 }

  	 

  	 else {                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut

  	 include('../lang/fr-lang.php');

  	 }

	 ?>



 <!-- gestion du choix des langues en php -->



<div  style="display:flex; flex-direction:row;"> 

<div id="contenu" align="inline-block" width="100%">

 

<div id="CdL" style="float: right; align:inline-block;"> 

<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			echo "		
			<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" style=\"display:flex; flex-direction:row;\" >
<a href=\"#\" style=\"display:flex; flex-direction:row;\" ><input type=\"radio\" name=\"langue\" id=\"choixlangue1\"  onclick=\"this.form.submit();\" value=\"fr\"><label><img src=\"../image/fr.png\" width=\"150%\"></a><span><img src=\"../image/transparent.png\" width=\"20px\" ></span>
<a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\"  name=\"langue\" id=\"choixlangue2\"  onclick=\"this.form.submit();\" value=\"en\"><label><img src=\"../image/en.png\" width=\"150%\"></a>		
			"; 	
		}
		
		else {			
		echo "
			<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" style=\"display:flex; flex-direction:row;\" >
<a href=\"\" ><input type=\"radio\" hidden name=\"langue\" id=\"choixlangue1\" onclick=\"this.form.submit();\" value=\"fr\"><label for=\"choixlangue1\"><img src=\"../image/fr.png\" width=\"150%\"></a><span><img src=\"../image/transparent.png\" width=\"20px\" ></span>
<a href=\"\"><input type=\"radio\" hidden  name=\"langue\" id=\"choixlangue2\" onclick=\"this.form.submit();\" value=\"en\"><label for=\"choixlangue2\"><img src=\"../image/en.png\" width=\"150%\"></a>			
			";
		}
		
		?>


<?php



 if($_SESSION['lang'] && empty($_POST['langue'])){

 $_SESSION['lang'];

 }

else if($_POST['langue']=='fr'){

 include('lang/fr-lang.php');

$_SESSION['lang']='fr';



}

else if($_POST['langue']=='en'){



 $_SESSION['lang']='en';

 include('lang/en-lang.php');

}

//echo "langue:".$_SESSION['lang'];

?>

</form> 

 </div>

 

<!--                                           -->

<!-- choix des langues en php à améliorer, fin -->

<!--                                           -->	

<!-- menu HDR(Horizontale Deroulant Responsif) -->  

      



<nav>

<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>

</ul>

</nav>



</div></div>



<!-- fin du menu -->



<article>



<?php echo TXT_TitreSpon ; ?>
<div id="FdC">
<?php echo TXT_Spon ; ?>
 <!--paging_filter-->

<script type="text/javascript" src="../js/verifFormS.js" ></script> 

<form name="ficheS"  accept-charset="iso-8859-1"  enctype="multipart/form-data" method="post" onSubmit="return verifformS()" >

<fieldset><legend><?php echo TXT_Contacte ; ?></legend>

 <label><?php echo TXT_Int; ?> *</span></label>

 <input type="text" maxlength="128" name="intitule" size="60"  />

<br/><br/>

<label><?php echo TXT_Nom ;?> *</span></label>

 <input type="text" maxlength="128" name="nom" size="60"  />

<br/><br/>

<label for=""><?php echo TXT_Prenom ; ?>*</span></label>

 <input type="text" maxlength="128" name="prenom" id="" size="60" />

<br/><br/>



 <label for=""><?php echo TXT_Email; ?>*</span></label>

 <input type="email" maxlength="128" name="email" id="" size="60"/>

<br/><br/>

<label for=""><?php echo TXT_Tel ; ?></label>

 <input type="tel" maxlength="128" name="tel" id="" size="60"/> 

<br/><br/>



 <label for=""><?php echo TXT_Message ; ?></label>

 <textarea cols="60" rows="5" name="message"></textarea>

 <br/><br/><br/></fieldset>

 <fieldset><legend><?php echo TXT_Competences ;  ?></legend>

<!-- upload de fichiers  -->

<p>

 <!-- On limite le fichier à 8000Ko -->
     <input type="hidden" name="MAX_FILE_SIZE" value="8000000">

    <?php echo TXT_CV; ?><input type="file" name="avatar">

     <br><?php echo TXT_Max; ?>

</p>

<br>

<p>

   <!-- On limite le fichier à 8000Ko -->

     <input type="hidden" name="MAX_FILE_SIZE" value="8000000">

    <?php  echo TXT_Motiv ;?><input type="file" name="avatar2">

	 <br><?php echo TXT_Max; ?>

	<br><br>

 <br/><strong>

<?php echo TXT_Note;  ?>

 </p>

 <br>

 <!--</fieldset>

<fieldset>-->

 <!--<legend><?php//  echo TXT_Donnees;  ?></legend>

 <br>

     <!--<img src="captchaLettres.php" ><label><?php //echo TXT_Code; ?></label> 

		<input type="text" name="code" >-->

		<br>

        





 

        <input type="submit" value="<?php echo TXT_ValueE; ?>" style="width:80px;" ><span><img src="../image/transparent.png" width="5%" height="5%"></span><input type="reset" value="<?php echo TXT_ValueR; ?>" style="width:80px;">	

</fieldset>	
<br>
		</form>



<br>

</article>

<br><br>



<?php

//echo "code captcha :".$_SESSION['captcha']; 

// on se connecte à MySQL, si post cic-it et ok...




if ($_SERVER["REQUEST_METHOD"] == "POST"){
/*
echo "langue :".$_SESSION['lang']."<br>";  //pour le dev : les sessions!
	echo "code captcha :".$_SESSION['captcha']; 
	echo "le post est: ".$_POST['code'];
	echo "<br/>bonjour, verification du formulaire :<br/>";

	
/*
	if($_POST['code']!=$_SESSION['captcha']){

	echo "<br/>vous n'avez pas entrez le bon code, recommencez!";		

 }

	else {

	echo "<br/><h3 style=\"text-align:center\">vous avez entrez le bon code.</h3>";

}
*/
echo "<br/><h3 style=\"text-align:center\">vous avez entrez le bon code.</h3>";

//formulaire contact 

if (empty($_POST['intitule'])) {

    $nameErr = "Votre intitulé est requis!<br/>";

	echo $nameErr;

	$intitule=NULL;

  } else {

    $intitule = $_POST['intitule'];

  }

if (empty($_POST['nom'])) {

    $nameErr = "Votre nom est necssecaire<br/>";

	echo $nameErr;

	$nom=NULL;

  } else {

    $nom = $_POST['nom'];

  }



if (empty($_POST['prenom'])) {

    $nameErr = "il faut informer la rubrique prenom<br/>";

	echo $nameErr;

	$prenom=NULL;

  } else {

    $prenom = $_POST['prenom'];

  }



if (empty($_POST['email'])) {

    $nameErr = "votre email et exigé!<br/>";

	echo $nameErr;

	$mail=NULL;

  } else {

    $mail = $_POST['email'];

	

  }

if (empty($_POST['tel'])) {

    $nameErr = "pas de telephone? un oubli?<br/>";

	echo $nameErr;

	$telephone=NULL;

  } else {

    $telephone = $_POST['tel'];

  }

if (empty($_POST['message'])) {

    $nameErr = "pas de message? un oubli?<br/>";

	echo $nameErr;

	$message=NULL;

  } else {

    $message = $_POST['message'];

  }

if($nom==NULL|$prenom==NULL|$intitule==NULL|$mail==NULL)

{

echo "<br/>SVP, remplissez à nouveau le formulaire contact en renseignant les rubliques \"*\" obligatoire!";

}



$dossier = 'www/';

$fichier = basename($_FILES['avatar']['name']); //?????

$fichier2 = basename($_FILES['avatar2']['name']);

echo $fichier; //(nom du fichier?)

echo "<br/>deusieme fichier: ".$fichier2; //(nom du fichier 2?)

$taille_maxi = 8000000;

$taille = "<br>".filesize($_FILES['avatar']['tmp_name']);

//echo "<br/>taille :".$taille."!";

$extensions = array('.jpg', '.jpeg', '.pdf','.doc','.txt','.zip','.rar');

$extension = strrchr($_FILES['avatar']['name'], '.'); 

$date=date("Y-m-d h-i-sa");

	$fichier=$date.$fichier; //concatenation fichier et date ???

	$fichier2=$date.$fichier2;

	//echo "premier fichier: ".$fichier;

//Début des vérifications de sécurité...



if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau

{

     $erreur = 'Vous devez uploader un fichier de type  jpg, jpeg, zip, rar, pdf, txt ou doc...';

}



if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload

{

     //On formate le nom du fichier ici...

     $fichier = strtr($fichier, 

          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 

          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);

	 //deusieme fichier: fichier2

		$fichier2 = strtr($fichier2, 

          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 

          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');

     $fichier2 = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier2);

    }

	 if( move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier.$fichier)&&move_uploaded_file($_FILES['avatar2']['tmp_name'], $dossier.$fichier2)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...

          echo 'Upload 2 effectué avec succès !';

	 

$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');		 

			
if (!$link) {

die('Impossible de se connecter : ' . mysql_error());

}

$date=date("Y-m-d h:i:sa");

//echo $date;

// on sélectionne la table...

mysqli_select_db($link,"cvjoint");

// on crée la requête SQL

$sql = "INSERT INTO cvjoint VALUES( 0,'$nom','$prenom','$intitule','$mail','$telephone','$message','$date','$fichier','$fichier2') " ;



// on envoie la requête, jusque la...ca va presque...



$req = mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link));

mysqli_close($link);

//echo"fin de mise a jour de la bd";

"<h3 style=\"text-align:center\">vous avez correctement remplie le formulaire et vos données sont enrgistrées.<br/> à bientot.<h3/>";

}



?>





  <div id="test" class="arrondie">

  <?php echo TXT_Piedhtml; ?>

      </div>

 <!-- fin ajout -->

</div>

</body>

</html>





