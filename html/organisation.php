<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108361116-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-108361116-1');
</script>
<meta charset="utf8" />
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!-- icone dans la barre du navigateur   -->
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
<div id="body" class="arrondie" height="100%" >
<!-- choix de la langue -->

 <?php
		  //premiere page du site : je choisit la langue francaise par défaut. Ce choix est nécessaire car si pas de langue choisit :renvoie d'une erreur...
 if($_SESSION['lang'] && empty($_GET['langue'])){
		$_SESSION['lang'];
 }
	 
 else if(!empty($_GET['langue'])){
 $_SESSION['lang']=$_GET['langue']; //si $_SESSION[lang] OK ne rien change: langue chois par le formulaire.
 }

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
	 

<!-- entete -->

<div id="header" style=" display:flex; flex-direction:row;" >
<div style="display:flex; width:17%;"><a href="https://dev.cic-it-bordeaux.fr/index.php" style="float:left; "><img src="../image/logos/cicitgbis.png" class="arrondie" style="width:100%; height;auto;"></a></div>
<div style="display:flex;  width:80%; flex-direction:column;">
<?php echo TXT_EnTete; ?> 
</div>
<div style="display:flex; width:17%;"><a href="http://www.cic-it.fr/index.php" style="float:right;"><img src="../image/logos/reseauCIC-ITter.jpg"  class="arrondie" style="width:100%; height;auto;" ></a></div>
</div><br><br>


<div  style="display:flex; flex-direction:row;"> 
                                                                                        
<div id="contenu" align="inline" width="100%">
<!--                                                                                            -->
<!-- formulaire de choix des langue, avec bouton radio remplace par une image et autosubmit...  -->
<!--                                                                                            -->
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

<!-- choix des langues en php  fin -->
<!--                               -->	
<!-- menu HDR(Horizontale Deroulant Responsif)-->  
      

<nav>
<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>
</ul>
</nav>


</div>
</div>

<div  style="display:flex; flex-direction:row;"> 
<div  style="display:flex; flex-direction:column; width:90%;">
<div id="section-article">
<?php  echo TXT_TitresFonctionnement ; ?>
<div align="justify"><?php  echo TXT_A1Fonction ; ?></div>
<br>
<div align="justify"><?php echo TXT_A2Fonction ; ?></div>

</div>


<div  style="display:flex; flex-direction:row; width:100%; margin-left:5%;">

<div  style="display:flex; flex-direction:column; width:150%;">
	 <div class="img2" >

   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"equipeCIC-IT.php \"><img src=\"../image/personnels/PhotoGroupeCIC-IT2017.jpg\" alt=\"photo de l'équipe du CIC-IT\" title=\"photo de l'équipe du CIC-IT, mars 2017\" style=\"width:100%; padding:2px; \">
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"equipeCIC-IT.php \" /><img src=\"../image/personnels/PhotoGroupeCIC-IT2017.jpg\" alt=\"photo de l'équipe du CIC-IT\" title=\"photo de l'équipe du CIC-IT\" style=\"width:100%;  padding:2px;\">
";
		}
		?></a>
		
		<h4 align="center"><strong><?php  echo TXT_Equipe; ?></strong></h4>
 </div>
 </div>
 <div  style="border:none; display:flex; flex-direction:column; width:200%;  ">
	 <div class="img2" >
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\" ../image/OrganigrammeCIC-ITnov2016b.jpg\"><img src=\"../image/OrganigrammeCIC-ITnov2016b.jpg\" alt=\"Organigrame du CIC-IT\" title=\"Organigrame du CIC-IT\" style=\"width:80%; padding:2px; \">
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"../image/OrganigrammeCIC-ITnov2016b.jpg \"><img src=\"../image/OrganigrammeCIC-ITnov2016b.jpg\" alt=\"Organigrame du CIC-IT\" title=\"Organigrame du CIC-IT\" style=\"width:80%; padding:2px;\">
";
		}
		
		?></a>
		
  			<h4 align="center"><strong><?php  echo TXT_legendeImg; ?></strong></h4>	
	 </div>
	</div>	
</div>

</div>	
</div>


  <div id="test" class="arrondie">
     <?php echo TXT_Piedhtml ; ?> </div>
 <!-- fin ajout -->
</div>
<br>
</body>
</html>