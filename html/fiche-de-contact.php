<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf8" />

  <title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>

<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />

<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />

<!--- mes feuilles de style : -->

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">  

<link rel="stylesheet" type="text/css" href="../css/SecondePage.css">

<link rel="stylesheet" type="text/css" href="../css/menuHDR2.css">

<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/moyenneResolution.css"/>

<link rel="stylesheet" media="screen and (max-width: 800px)" href="../css/petitResolution.css"/>

<link rel="stylesheet" media="screen and (max-width: 400px)" href="../css/toutpetitResolution.css"/>

<!-- vérification du formulaire contacte -->

<script type="text/javascript" src="js/verifForm.js" ></script>

<!--  script menu   -->

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

</script> 	 	

</head>



<body id="equipe">

<div id="body" class="arrondie">



<div id="header">

<img src="../image/header.jpg" width="100%" height="150px" class="arrondie" >

</div><br>

<!-- gestion du choix des langues en php -->

<div>

 <!-- gestion du choix des langues en php -->



 <?php

	 //premiere page du site : je choisit la langue francaise par défaut. Ce choix est nécessaire car si pas de langue choisit :renvoie d'une erreur...

	 if($_SESSION['lang'] && empty($_GET['langue'])){

		$_SESSION['lang'];

 }

 else if(!empty($_GET['langue']) ){

 $_SESSION['lang']=$_GET['langue']; //si $_SESSION[lang] OK ne rien change: langue chois par le formulaire.

 }

//else  $_SESSION['lang']='fr';

 

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



 <div  style="display:flex; flex-direction:row;"> 

 <div id="contenu" align="inline-block" width="100%">

 

<div id="CdL" style="float:right; align:inline-block;"> 

<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			echo "		
			<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" style=\"display:flex; flex-direction:row;\" >
<a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\" name=\"langue\" id=\"choixlangue1\"  onclick=\"this.form.submit();\" value=\"fr\"><label><img src=\"../image/fr.png\" width=\"150%\"></a><span><img src=\"../image/transparent.png\" width=\"20px\" ></span>
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
<br><br>

<div style="text-align:center"><? echo TXT_TitreContact;?></div>
<div id="FdC">
<div style="text-align:center"><? echo TXT_stContact;?></div>

<script type="text/javascript" src="js/verifForm.js" ></script> 

<form  name="fiche" onSubmit="return verifForm()"  accept-charset="UTF-8" method="post" >

<fieldset><legend><?php echo TXT_Contacte ; ?></legend>

 <label><?php echo TXT_Nom ; ?> *</span></label>

 <input type="text" maxlength="128" name="nom" size="60"  />

<br><br>



<label><?php echo TXT_Prenom ; ?>*</span></label>

 <input type="text" maxlength="128" name="prenom" id="" size="60" />

<br><br>



 <label><?php echo TXT_Email; ?>*</span></label>

 <input type="text" maxlength="128" name="email" id="" size="60"/>

<br><br>

<label><?php echo TXT_Message; ?></label>

<textarea cols="60" rows="5" name="message"></textarea>

<br><br>

<br>

</fieldset>

<!--<fieldset>

<legend><?php //echo TXT_Donnees; ?></legend>-->

<br><br>

<!-- le formulaire de contact marche, sans captcha... -->

<!--<img src="captchaLettres.php"><label><?php // echo TXT_Code; ?></label>

<input type="text" name="code"><br><br>-->

         
<input type="submit"  value="<?php echo TXT_ValueE; ?>" style="width:80px;"><span><img src="../image/transparent.png" width="5%" height="5%"></span><input type="reset" value="<?php echo TXT_ValueR ; ?>" style="width:80px;"><!-- un seul submit dans un formulaire suffit !  -->

<br><br>

</form>

<br>
</div>
<br>



<?php



if ($_SERVER["REQUEST_METHOD"] == "POST"){


/*
	if($_POST['code']!=$_SESSION['captcha']){

	echo "code poste: ".$_POST['code']."!";

	echo "<br>Session captcha: ".$_SESSION['captcha']."!";

	 echo "<br/> le code n'est pas bon, recommencez! (attention le code est tout en majuscules, pas de minuscules! "; //attention les majuscules sont differentes des minuscule 

	}

	else

{	"<br/>vous avez entrez le bon code!";

*/	

 	//echo "Verification du formulaire :<br/>";	

if (empty($_POST['nom'])) {

    $nameErr = "Votre nom est requit<br/>";

	echo $nameErr;

	$nom=NULL;

  } else {

    $nom = $_POST['nom'];

  }



if (empty($_POST['prenom'])) {

    $nameErr = "informez la rubrique prenom<br/>";

	echo $nameErr;

	$prenom=NULL;

  } else {

    $prenom = $_POST['prenom'];

  }



if (empty($_POST['email'])) {

    $nameErr = "le email et exigé!<br/>";

	echo $nameErr;

	$mail=NULL;

  } else {

    $mail = $_POST['email'];

  }



if (empty($_POST['message'])) {

    $nameErr = "pas de message? un oubli?<br/>";

	echo $nameErr;

	$message=NULL;

  } else {

    $message = $_POST['message'];

  }

 if($nom==NULL || $prenom==NULL || $mail==NULL){

 echo"SVP, remplissez à nouveau les rubriques * obligatoires !";

} 

else{

//echo "le nom: ".$nom." Le prenom: ".$prenom." Le mail: ".$mail." Fin.";



 if($nom!=NULL && $prenom!=NULL && $mail!=NULL)

		{

  

// on se connecte à MySQL

$link = mysqli_connect( 'localhost', 'c4cicit','dyKaTm8H#','c4dev');

if (!$link) {

die('Impossible de se connecter : ' . mysql_error());

}

// on sélectionne la table...



mysqli_select_db($link,"contact");

// on crée la requête SQL

$today = date("Y-m-d H:i:s");   
//echo $today;
$sql = "INSERT INTO contact(Nom, Prenom, email, message,date) VALUES('$nom','$prenom','$mail','$message','$today')" ;

// on envoie la requête

$req = mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link));

// on ferme la connexion à mysql
//on envoie un mail à Marlène :un nouveau contacte....

/*
$mail = 'cecile.raymond@chu-bordeaux.fr'; // Déclaration de l'adresse de destination.

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.

{

    $passage_ligne = "\r\n";

}

else

{

    $passage_ligne = "\n";

}

//=====Déclaration des messages au format texte et au format HTML.

$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.".$passage_ligne."nouveau contact: ceci est un teste!!!";



$message_html = "<html><head></head><body><b>Bonjour Marlène,<br></b>, un nouveau contact vient d'être envoyé sur le site.<br><b>Son nom:</b>$nom<br>son prénom : $prenom<br><br>ceci est un teste!!!'.</body></html>";

//==========

 

//=====Création de la boundary

$boundary = "-----=".md5(rand());

//==========

 

//=====Définition du sujet.

$sujet = "nouveau contact";

//=========

 

//=====Création du header de l'e-mail.

$header = "From: \"contact site web\"<weaponsb@mail.fr>".$passage_ligne;

$header.= "Reply-to: \"moi\" ".$passage_ligne;

$header.= "MIME-Version: 1.0".$passage_ligne;

$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

//==========

 

//=====Création du message.

$message = $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format texte.

$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_txt.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format HTML

$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_html.$passage_ligne;

//==========

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

//==========

 

//=====Envoi de l'e-mail.

mail($mail,$sujet,$message,$header);

//==========
*/

mysqli_close($link);

}

}

}

?>





<!-- ajout pied de page : plan du site....   --> 

<div id="test" class="arrondie">

<?php echo TXT_Piedhtml; ?>

</div>

<!-- fin ajout -->

<br>

</div>

</body>

</html>