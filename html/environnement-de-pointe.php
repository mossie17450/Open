<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Recherche et développement au sein de la PTIB : biomatériaux et réparation tissulaire | CIC-IT Bordeaux</title> 
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Adossé à l&#039;unité Inserm 1026/BioTis, le CIC-IT collabore avec le pôte d&#039;activité médicale du CHU de Bordeaux. Formant de futurs chercheurs et des cadres R&amp;D via le Master BiDim, il est un moteur de de l&#039;innovation médicale en Aquitaine." />
<!--  icone dans la barre du navigateur                              -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->

<!--- ma premiere( presque) feuille de style : -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/SecondePage.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />

<!--<link rel="stylesheet" type="text/css" href="../css/menuHD.css" /> -->
<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/moyenneResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="../css/petitResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 400px)" href="../css/toutpetitResolution.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHDR2.css" />
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
<div id="body" class="arrondie">

<div id="header" style=" display:flex; flex-direction:row; height:auto;" >
<div style="display:flex; width:17%;"><a href="https://dev.cic-it-bordeaux.fr/index.php" style="float:left; "><img src="../image/logos/cicitgbis.png" class="arrondie" style="width:100%; height;auto;"></a></div>
<div style="display:flex;  width:80%; flex-direction:column;">
<?php echo TXT_EnTete; ?> 
</div>
<div style="display:flex; width:17%;"><a href="http://www.cic-it.fr/index.php" style="float:right;"><img src="../image/logos/reseauCIC-ITter.jpg"  class="arrondie" style="width:100%; height;auto;" ></a></div>
</div><br><br>



	 
<div  style="display:flex; flex-direction:row;  "> 
<!--                                                                                            -->
<!-- formulaire de choix des langue, avec bouton radio remplace par une image et autosubmit...  -->
<!--                                                                                            -->
<div id="contenu" align="inline" width="100%">

<div id="CdL" style="float:right; align:inline;"> 

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
<!--                               -->
<!-- choix des langues en php  fin -->
<!--                               -->
	
<!-- menu HDR(Horizontale Deroulant Responsif) -->  
      

<nav>
<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>
</ul>
</nav>


</div>
</div>
	 
<!-- insertion  -->
<div  style="display:flex; flex-direction:row; ">



<!-- a gauche -->
<!--  logos...   -->
<div id="contenu" style="display:inline-block;" width="100%">

<div id="footbis" class="arrondie" align="center" >
<br>
<a href="https://www.chu-bordeaux.fr" style="dysplay:inline;"><img src="../image/logos/Chubordeaux.jpg" width="60%" class="displayed"></a><span><img src="../image/blanc.png" width="2%"></span><br>
<a href="http://www.aquitaine-poitou-charentes.inserm.fr" style="dysplay:inline;"><img src="../image/logos/logo-generique-SD.gif" width="80%" class="displayed"></a><span><img src="../image/blanc.png" width="2%"></span><br>
<a href="http//www.u-bordeaux.fr"><img src="../image/logos/Universite-BordeauxRVB-01.jpg" width="70%" class="displayed"></a><span><img src="../image/blanc.png" width="2%"></span><br> 
<a href="http://www.bergonie.org" ><img src="../image/logos/Bergonie.jpg" width="60%" class="displayed"></a><span><img src="../image/blanc.png" width="2%"></span><br> 
</div>

<div style="display:flex; flex-direction:column;">
<!--  titres de la page....   -->
<div align="center"><?php echo TXT_TitreEnvironnement; ?></div>
	
<!--  texte de la page....   -->
<article><?php echo TXT_ArticleEnvironnement; ?></article>

<div style=" margin-left:5%; display:flex; flex-direction:row;">
<a href="https://www.dondusang.net/rewrite/heading/804/efs/l-efs-en-regions/aquitaine-limousin.htm?idRubrique=804"><img src="../image/logos/EFSAL.jpg" width="100%" class="displayed"></a><span><img src="../image/blanc.png" width="1%" height="0%"></span><br>
<a href="http://www.ptib.u-bordeaux2.fr/index.php?p=accueil"><img src="../image/logos/logo_PTIB.jpg" width="250%" class="displayed"></a><br><span><img src="../image/blanc.png" width="1%" height="0%"></span><br>
<a href="https://www.ihu-liryc.fr/"><img src="../image/logos/IHU liryc.jpg" width="100%" class="displayed"></a><br><span><img src="../image/blanc.png" width="2%" height="0%"></span><br>
<a href="http://www.2acbi-asso.fr/"><img src="../image/logos/logo-2acbi.jpg" width="180%" class="displayed"></a>
<a href="https://bcrm.u-bordeaux.fr/"><img src="../image/logos/BxCRM.png" width="70%" class="displayed"></a>

</div>
</div><br>

</div></div>
 <div id="test" class="arrondie">
 <?php echo TXT_Piedhtml; ?>  
 </div>
 </div>
</body>
</html>
