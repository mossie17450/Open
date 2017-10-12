<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="utf8" lang="utf8" dir="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!-- icone dans la barre du navigateur   -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->

<!--- ma premiere( presque) feuille de style : -->
<link rel="stylesheet" href="../css/slideshow.css">

<!-- le menu HDR -->
<!-- carousel bootstrap...-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">	
   <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 30%;
      margin: auto;
  }
  </style> 
  <link rel="stylesheet" type="text/css" href="../css/slideshow.css" media="screen" />
	<script type="text/javascript" src="../js/mootools.js"></script>
	<script type="text/javascript" src="../js/slideshow.js"></script>
	<script type="text/javascript">		
	//<![CDATA[
	  window.addEvent('domready', function(){
	    var data = {
	      '13-03(G10)2.jpg': { caption: 'coloration trichromique de Masson.' }, 
	      '13-03(G10)TM3.jpg': { caption: 'coloration trichromique de Masson.' }, 
	      '13-03(G20).jpg': { caption: 'coloration trichromique de Masson.' }, 
	     
	    };
	    var myShow = new Slideshow('show', data, {controller: false, height:150, hu: '../image/', thumbnails: false,width:150  });
	  });
	//]]>
	
	window.addEvent('domready', function(){
	    var data1 = {
	      '16-01 1a-1 (G40).jpg': { caption: 'coloration HES.' }, 
	      '16-01 1a-1 (G400)5.jpg': { caption: 'coloration HES.' }, 
	    };
		
	    var myShow = new Slideshow('show1', data1, {controller: false, height:150, hu: '../image/', thumbnails: false,width: 150  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data2 = {
	      '10-08 1-BV0-P07-1 CK8 (G10)b.jpg': { caption: 'IHC-CK8.' }, 
	      '10-08 1-BV0-P07-1 CK8 (G40)b.jpg': { caption: 'IHC-CK8.' }, 
	      '10-08 1-BV0-P21-2 CK8(G20)b.jpg': { caption: 'IHC-CK8.' }, 
	    };
		
	    var myShow = new Slideshow('show2', data2, {controller: false, height:150, hu: '../image/', thumbnails: false,width: 150  });
		var myShow = new Slideshow('show7', data2, {controller: false, height:150, hu: '../image/', thumbnails: false,width: 150  });
	  });
	  
	  
	  window.addEvent('domready', function(){
	    var data3 = {
	      '10-08 1-BV0-P10-1 ki67(G40)7b.jpg': { caption: 'IHC-ki67.' }, 
	      '10-08 1-BV4-P06-2 ki67 (G40)5b.jpg': { caption: 'IHC-ki67.' },     
	    };
		
	    var myShow = new Slideshow('show3', data3, {controller: false, height:150, hu: '../image/', thumbnails: false,width: 150  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data4 = {
	      '15-01 158D-c- A (G10)b.jpg': { caption: 'Goldner?.' }, 
	      '15-01 167G(C)-B2 (G10)b.jpg': { caption: 'G.' }, 
	      '15-01 170G(C)-D1(G10)b.jpg': { caption: 'G.' }, 
	      '15-01 172G(C)-I2 (G10)b.jpg': { caption: 'G.' }, 
		   '15-01 180G-d- D (G10)defect et osb.jpg': { caption: 'G?.' }, 
	    };
	    var myShow = new Slideshow('show4', data4, {controller: false, height:150, hu: '../image/', thumbnails: false,width: 150  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data5 = {
	      '15-01 170D(C) (G10)b.jpg': { caption: 'VVK?' }, 
	      '15-01 170D(C) (G40)b.jpg': { caption: 'VVK.' }, 
	     '15-01 170D(C) (G100)b.jpg': { caption: 'VVK.' }, 
	     
	    };
	    var myShow = new Slideshow('show5', data5, {controller: false, height:150, hu: '../image/', thumbnails: false,width: 150  });
	  });
	  
	  window.addEvent('domready', function(){
	    var data6 = {
	      '16-01 1a-4 ORC (G400)2b.jpg': { caption: 'coloration spécifique à l\'orcéine' },  
	    };
	    var myShow = new Slideshow('show6', data6, {controller: false, height:150, hu: '../image/', thumbnails: false,width: 150  });
	  });
	  window.addEvent('domready', function(){
	    var data7 = {
	      '11-08 P1B-9 caldesmon (G10)pp.jpg': { caption: 'Caldesmon' },  
	    };
	    var myShow = new Slideshow('show7', data7, {controller: false, height:150, hu: '../image/', thumbnails: false,width: 150  });
	  });
	</script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
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
<!-- choix de la langue  -->
<?php
	  if($_SESSION['lang'] && empty($_GET['langue'])){
		$_SESSION['lang'];
 }
	else if(!empty($_GET['langue']) ){
	$_SESSION['lang']=$_GET['langue']; //si $_SESSION[lang] OK ne rien change
 }
//langue par défaut si pas de choix 
 //inclusion des fichiers langue ... différent du choix de la langue.
	if($_SESSION['lang']=='fr') {           // si la langue est 'fr' (français) on inclut le fichier fr-lang.php
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
<!-- en tête -->

<div id="header" style=" display:flex; flex-direction:row; height:auto;" >
<div style="display:flex; width:17%;"><a href="https://dev.cic-it-bordeaux.fr/index.php" style="float:left; "><img src="../image/logos/cicitgbis.png" class="arrondie" style="width:100%; height;auto;"></a></div>
<div style="display:flex;  width:80%; flex-direction:column;">
<?php echo TXT_EnTete; ?> 
</div>
<div style="display:flex; width:17%;"><a href="http://www.cic-it.fr/index.php" style="float:right;"><img src="../image/logos/reseauCIC-ITter.jpg"  class="arrondie" style="width:100%; height;auto;" ></a></div>
</div><br><br>


  
<div  style="display:flex; flex-direction:row;">   
<div id="contenu" align="inline" width="100%">

<div id="CdL" style="float:right; align:inline; "> 
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

?>
</form> 
 </div>
<!--                                           -->
<!-- choix des langues, fin                    -->
<!--                                           -->	
<!-- menu HDR(Horizontale Deroulant Responsif) -->  
<!--                                           -->      

<nav>
<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>
</ul>
</nav>

</div></div>
<!-- fin du menu -->

 <!--<div style="display:flex; flex-direction:column;  ">-->  

 <!-- samantha -->
<div id="fin-article" style="display:flex; flex-direction:row;">
<div style="display:flex; flex-direction:column; width:30%; ">
<?php echo TXT_TH ; ?> 
</div>

<div style="display:flex; flex-direction:column; width:30%; float:left; margin-right:1%;">
<a target="_blank" href="../image/personnels/SamP.png">

<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/SamP.png\" width=\"60%\"; title=\"Samantha Roques\" alt=\"Samantha Roques\" height=\"auto\"; align=\"right\";>
";
		}
		else {
			
		echo "<img src=\"../image/personnels/SamP.png\" width=\"50%\" title=\"Samantha Roques\" alt=\"Samantha Roques\" align=\"right\";>
			";
		}
		?> </a>
	</div>
	<div style="display:flex; flex-direction:column; width:30%;  ">
<?php echo TXT_ResponsableHisto ; ?>	
<div  style="display:inline-block; width:100%;  text-align:left;">
<?php echo TXT_THR ; ?> 
</div>
</div>
</div>


<!--<div  style="display:flex; flex-direction:row; width:100%; height:100%; ">-->
<div  style="display:flex; flex-direction:row; ">
<div id="contenu" align="inline-block" width="100%" >

<div id="footbis"  class="arrondie" >
<!-- images centrées a droite de la page : une autre facon de faire l'aside...-->
<h4><?php echo TXT_HEA; ?></h4>
<div class="img" style="border:none;">
  <!--<a target="_blank" href="../image/Tissus_Leica_TP1020.jpg">-->
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"AutomateTraitementTissus.php\"/><img src=\"../image/equipements/Tissus_Leica_TP1020.jpg\" alt=\"TP1020 LEICA\" title=\"TP1020 LEICA\" style=\"width:80%; padding:2px; height:auto;\">
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"AutomateTraitementTissus.php\"/><img src=\"../image/equipements/Tissus_Leica_TP1020.jpg\" alt=\"TP1020 LEICA\" title=\"TP1020 LEICA\" style=\"width:80%; padding:2px;\">
";
		}
		?>
		<?php echo TXT_HT11;   ?>
  </a>
  <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"Polisseuse.php\"/><img src=\"../image/equipements/Polisseuse.jpg\" alt=\"Polisseuse Buelher beta grinder-polisher (CIC-IT)\" title=\"Polisseuse Buelher beta grinder-polisher (CIC-IT)\" style=\"width:80%; padding:2px; height:auto;\">
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"Polisseuse.php\"/><img src=\"../image/equipements/Polisseuse.jpg\" alt=\"Polisseuse Buelher beta grinder-polisher (CIC-IT)\" title=\"Polisseuse Buelher beta grinder-polisher (CIC-IT)\" style=\"width:80%; padding:2px;\">
";
		}
		?>
		<div><?php echo "Polisseuse";   ?></div>
		
  </a>
  <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"PlateformeInclusion.php\"><img src=\"../image/equipements/Leica_EG115.jpg\" alt=\"plateforme d'inclusion EG1150H LEICA\" title=\"plateforme d'inclusion EG1150H LEICA\" style=\"width:80%; padding:2px; height:auto;\">

";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"PlateformeInclusion.php\"><img src=\"../image/equipements/Leica_EG115.jpg\" alt=\"plateforme d'inclusion EG1150H LEICA\" title=\"plateforme d'inclusion EG1150H LEICA\" style=\"width:80%; padding:2px;\">

";
		}
		?>
		<div><?php echo TXT_HT12; ?></div></a>
		 <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"microtome.php\"><img src=\"../image/equipements/microtomeR2255.jpg\" alt=\"\" title=\"microtome\" style=\"width:80%; padding:2px;height:auto;\">

";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"microtome.php\"><img src=\"../image/equipements/microtomeR2255.jpg\" alt=\"\" title=\"microtome\" style=\"width:80%; padding:2px;\">

";
		}
		?>
		<div><?php echo TXT_HT13;   ?></div>
  </a>
  <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"microtomeGlissiere.php\"><img src=\"../image/equipements/MicrotomeLEICA.jpg\" title=\"microtome à glissière SM2500 (CIT)\" alt=\"microtome à glissière SM2500 (CIT)\" style=\"width:80%; padding:2px; height:auto;\" >
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"microtomeGlissiere.php\"><img src=\"../image/equipements/MicrotomeLEICA.jpg\" title=\"microtome à glissière SM2500 (CIT)\" alt=\"microtome à glissière SM2500 (CIT\" style=\"width:80%; padding:2px;\" >
";
		}
		?>
		<div><?php echo TXT_HT14; ?></div>
  </a>
<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"ScieDiamante.php\"><img src=\"../image/equipements/ScieSP1600LEICA.jpg\"  title=\"scie diamantée SM1600 (CIT)\" style=\"width:80%; padding:2px;height:auto%;\" >

";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"ScieDiamante.php\"><img src=\"../image/equipements/ScieSP1600LEICA.jpg\"  title=\"scie diamantée SM1600 (CIT)\" style=\"width:80%; padding:2px;\" >

";
		}
		?>
		<div><?php echo TXT_HT15;   ?></div>
  </a>
  <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"automateColoration.php\"><img src=\"../image/equipements/tienturierHMS70.jpg\" alt=\"automate de coloration HSM 70\" style=\"width:80%; padding:2px;height:auto;\" >


";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"automateColoration.php\"><img src=\"../image/equipements/tienturierHMS70.jpg\" alt=\"automate de coloration HSM 70\" style=\"width:80%; padding:2px;\" >


";
		}
		?>
		<div><?php echo TXT_HTC21;   ?></div>
  </a>
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"MicroscopeNickon.php\"><img src=\"../image/equipements/MicroscopeNi-UNIKON.jpg\"  title=\"Microscope Ni-U Nikon (CIT)\" style=\"width:80%; padding:2px;height:auto;\" >



";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"MicroscopeNickon.php\"><img src=\"../image/equipements/MicroscopeNi-UNIKON.jpg\"  title=\"Microscope Ni-U Nikon (CIT)\" style=\"width:80%; padding:2px;\" ></br>
";
		}
		?>
		<div><?php echo TXT_HTC61;  ?></div>
  </a>
     <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"microscopeMotorise.php\"><img src=\"..image/equipements/microscope80iNIKON.jpg\" title=\"microscope NIKON 80i à tête motorisée 90i\" style=\"width:80%; padding:2px; height:auto;\" >  ";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"microscopeMotorise.php\"><img src=\"../image/equipements/microscope80iNIKON.jpg\" title=\"microscope NIKON 80i à tête motorisée 90i\" style=\"width:80%; padding:2px;\">

";
		}
		?>
		<div><?php echo TXT_HTC62;   ?></div>
  </a>
     <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<a target=\"_blank\" href=\"Loupe.php\" ><img src=\"../image/equipements/Loupe.jpg\"  title=\"Loupe binoculaire (CIT)\" style=\"width:80%; padding:2px;height:auto;\" >
";
		}
		else {
			
		echo "<a target=\"_blank\" href=\"Loupe.php\"><img src=\"../image/equipements/Loupe.jpg\"  title=\"Loupe binoculaire (CIT)\" style=\"width:80%; padding:2px;\" >
";
		}
		?>
		<div><?php echo TXT_HTC63;   ?></div>
  </a>

</div></div><!-- fin footbis -->
 
<div  style="display:flex; flex-direction:column;  height:100%;">
<!-- premier tableau... -->

<div id="section-article" class="table-responsive"><?php echo TXT_HST; ?>

 <?php echo TXT_HT1; ?>

 <table class="table" width="100%"><tr><td colspan="5">
  <?php echo TXT_HTC1; ?></td></tr><td>
  <?php echo TXT_HCI; ?></td></table>
 

<!-- deusième tableau... -->
 
<table class="table" width="100%"><tr><td colspan="3"><? echo TXT_HTC3; ?></td></tr>
<tr><td><div id="show4" class="slideshow" >
    <img src="../image/15-01 158D-c- A (G10)b.jpg" width="50%" height="auto" alt="Trichrome de Goldner" />
  </div></td><td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td><div id="show5" class="slideshow" >
    <img src="../image/15-01 170D(C) (G10)b.jpg" width="50%" height="auto" alt="Von Kossa Mac Neal" /></div>
	<?php echo TXT_HTCIlegende; ?>
  </td></tr></table>

 
<table class="table" width="100%">

<tr><td colspan="5"><h4><?php echo TXT_HTC4; ?></h4></td></tr>
<tr><td><div id="show2" class="slideshow">
    <img src="../image/10-08 1-BV0-P07-1 CK8 (G10)b.jpg" alt=" CK8" width="50%" height="auto"/>	
  </div></td>
  <td><img src="../image/markerTransparent.png" width="3%" height="auto"></td>
  <td><div id="show7" class="slideshow">
    <img src="../image/11-08 P1B-9 caldesmon (G10)pp.jpg" alt="Caldesmon" width="50%" height="auto"/>
  </div></td>
  <td><img src="../image/markerTransparent.png" width="3%" height="auto"></td>
  <td><div id="show3" class="slideshow" >
  <img src="../image/10-08 1-BV0-P10-1 ki67(G40)7b.jpg" alt=" ki67" title=" ki67" width="50%" height="auto"/>
  </div></tr>
  <td style="text-align:left"><strong>CK8</strong></td><td></td><td><strong>Caldesmon</strong></td><td></td><td style="text-align:left"><strong>Ki67</strong></td>
  </table>
 <br>

 
<h4><?php echo TXT_HTC5; ?></h4>
<br>
<h4><?php echo TXT_HTC6; ?></h4>




</div>
</div>
</div></div>
 <!-- ajout fin fin -->

 <!-- fin du contenu  -->
<!-- ajout pied de page : plan du site....-->   
<div id="test" class="arrondie">
<?php echo TXT_Piedhtml ; ?>
</div>

<!-- fin ajout -->

</div>
</body>
</html>


