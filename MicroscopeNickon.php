<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">

<head>
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />

<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="../image/logos/logoCIC-ITB.png" /><![endif]-->
<!---                         -->
<!--- mes feuilles de style : -->
<!---                         -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/SecondePage.css" />
<link rel="stylesheet" type="text/css" href="css/menuHDR2.css" />

<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/moyenneResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="css/petitResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 400px)" href="css/toutpetitResolution.css" />


<!---                         -->
<!---mes scripts javascript : -->
<!---                         -->
<script type="text/javascript">
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
<body>
<div id="body" class="arrondie">

<div  style="display:flex; flex-direction:row;"> 
<div id="contenu" style="display:inline-block;" width="100%">
<!-- animation....  -->


<!---                         -->
<!-- choix des langues en php -->
<!---                         -->
 <?php
	  
	   if(empty($_SESSION['lang']) && empty($_GET['langue'])){                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
	 $_SESSION['lang']='fr';
	
  	 }
	  	 
	  else if($_SESSION['lang'] && empty($_GET['langue'])){
 $_SESSION['lang'];
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
  	
	 ?>

<div class="img" style="position:relative; top:5%; left:20%;">

   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/equipements/MicroscopeNi-UNIKON.jpg\" width=\"70%\" >";
		}
		else {
			
		echo "<img src=\"../image/equipements/MicroscopeNi-UNIKON.jpg\" width=\"70%\" >";
		}
		?>
 <br>
  <div><?php echo "microscope NIKON Ni-U.<br> non mis à disposition par le CIC-IT.";   ?></div>
	</div>


</div>
</div>