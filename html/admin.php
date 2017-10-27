<?php

session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">	

<head>

<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />

<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />

<!---                         -->

<!--- mes feuilles de style : -->

<!---                        
 <link rel="stylesheet" type="text/css" href="../css/SecondePage.css" >
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

 <link rel="stylesheet" type="text/css" href="../css/adminPage.css" >
  <link rel="stylesheet" type="text/css" href="../css/SecondePage.css" >

<!-- <link rel="stylesheet" type="text/css" href="css/menuHD.css" > 

<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/moyenneResolution.css" />

<link rel="stylesheet" media="screen and (max-width: 800px)" href="../css/petitResolution.css" />

<link rel="stylesheet" media="screen and (max-width: 400px)" href="../css/toutpetitResolution.css" />
-->



</head> 

<body> 



<h1 align="center"><?php echo "Espace d'administration du site web du CIC-IT de Bordeaux"; ?></h1> 

<h4 align="center"><?php echo "cette espace intranet est reservé au membres du CIC-IT de Bordeaux et necessite le login et mot de passe"; ?></h4>

    <br/><h2><?php echo "Saisissez votre login et votre mot de passe:"; ?></h2><br/> 

	<form method="post" action="#"> 

    <table align="center"> 

	<tr><td>Login : </font></td> 

	<td><input type="text" name="login" size=15></td></tr> 

    	<tr><td>Mot de passe : </font></td> 

	<td><input type="password" name="password" size=15></td></tr> 

	<tr><td class="centre" colspan="2"><input type="submit" name="enter" value="- OK -" style="cursor:hand;color:blue;font:bold;"></td></tr>      

	</table><br/> 

    </form>

	

<?php 

function get_ip()
{
	if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	{
		$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		
	}
	elseif(isset($_SERVER['HTTP_CLIENT_IP']))
	{
		$ip=$_SERVER['HTTP_CLIENT_IP'];
	}
	else
	{
		$ip=$_SERVER['REMOTE_ADDR'];
	}
	echo $ip;
	return $ip;	
}
$ip=$_SERVER["REMOTE_ADDR"]; //cette ligne permet de recuperer l'adresse du visiteur de la page.
//echo "ip?:".get_ip()."!<br>";



 //cette ligne permet de recuperer l'adresse du visiteur de la page.
//echo "ip du visiteur?:".get_ip()."!!!<br>";

if(isset($_POST['login'])&& !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])){

$login=$_POST['login']; 

$password=$_POST['password']; 

}

if(isset($login)) { // on arrive du formulaire  

    $log="admin"; // change ton login ici 

    $pwd="admin"; //  change ton password ici 

	//ici, l'adresse ip des ordinateurs autorisé à consulter l'espace administration....

   // if ((strcmp($login, $log) != 0)||(strcmp($password, $pwd) != 0)|| !( (preg_match('#fe80::5da3:9c64:dc34:b1e9#', $ip))|| (preg_match('#194.167.179.10#', $ip)) || (preg_match('#fe80::8eb:d45:23f4:5142#', $ip)) )
    if (((strcmp($login, $log) != 0)||(strcmp($password, $pwd) != 0)) && (!(preg_match('#194.167.179.10#', get_ip())) || !((preg_match('#127.0.0.1#', get_ip()))) ))// || (preg_match('#fe80::7401:6b45:c98a:7784#', $ip)) || (preg_match('#fe80::8eb:d45:23f4:5142#', $ip))) )


	{ 

// Ne facilitons pas la tâche aux malveillants - Le test est fait sur la paire login/password 

       	 print "<html><body style=\"text-align:center\"><b>Vous n'êtes pas reconnu.</b><br />Vérifiez SVP.<br /><a href=\"". 

		htmlentities($_SERVER['PHP_SELF'])."\">RETOUR</a></body></html>"; 

// petite page bien formée qui efface  la paire login/password 

       	 exit; } 



//ici l'espace d'administration :lien vers les pages idoines--> reste à developper//

 echo "

	<ul><li><a href=\"../html/admin.php\">votre espace d'administration du site</a></li><hr>
		<li><a href=\"../admin/ajoutevent.php\">Ajouter un événement au calendrier des évenements</a></li>
		<li><a href=\"../admin/supprevent.php\">Supprimer un événement</a></li>
		<hr>
		<li><a href=\"../admin/publicationsMaJ.php\">Ajout d'une publication</a></li>
		<hr>
        <li><a href=\"../admin/ajoutPost.php\">affichage de postes proposés</a></li>
		<li><a href=\"../admin/supprimeposte.php\">suppression de l'affichage de postes proposés</a></li>
		<hr>
		<li><a href=\"../admin/ajoutStage.php\">affichage de stage proposés</a></li>
		<li><a href=\"../admin/supprimestage.php\">suppression de l'affichage de stages proposés</a></li>
		<li><a href=\"../admin/NouveauStagiaire.php\">Enregistre le nouveau stagiaire au CIC-IT</a></li>
		<hr>
		<li><a href=\"../admin/listeCV.php\">gestion des candidatures spontanées envoyé au site</a></li>
		<li><a href=\"../admin/listeContacts.php\">gestion des contactes (formulaire contacte) envoyé au site</a></li>
		<hr>
		<li><a href=\"../index.php\">Retourd à l'acceuil</a></li>
		
		</ul>";

// Fin  de la page d'administration, en developpement! 

}  

?>

</body> 

</html> 



 

