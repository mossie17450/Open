<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!-- icone dans la barre du navigateur  -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->

<!-- refeuille de styles -->
 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
     width: 30%;
     margin: auto;	 
  }
  
  </style> 
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
<!-- diaporama :    -->
<link rel="stylesheet" href="../css/slideshow.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<script type="text/javascript" src="../js/mootools.js"></script>
	<script type="text/javascript" src="../js/slideshow.js"></script>
	<script type="text/javascript">				 
	   window.addEvent('domready', function(){
	    var data7 = {
	      'GRAM1p.jpg': { caption: 'etalement GRAM1' }, 
	      'GRAM2p.jpg': { caption: 'etalement GRAM2' }, 		  
	    };
		
			    var myShow = new Slideshow('show7', data7, {controller: false, height:200, hu: '../image/', thumbnails: false,width: 200  });
	  });
		 window.addEvent('domready', function(){
	    var data8 = {
	      'TissusGRAM1pp.jpg': { caption: 'GRAM sur coupe de tissus' }, 
	      'TissusGRAM2pp.jpg': { caption: 'GRAM sur coupe de tissus 2' },  
	    };
		
	  		    var myShow = new Slideshow('show8', data8, {controller: false, height:200, hu: '../image/', thumbnails: false,width: 200  });
	  });
	   window.addEvent('domready', function(){
	    var data9 = {
	      'CMIphotoA.jpg': { caption: 'activité antibiotique:CMI.' }, 
	      'CMB.jpg': { caption: 'CMB.' },
		  'CMBIplaque.jpg': {captation: 'CMI sur microplaque.'},	
	    };
		
	  		    var myShow = new Slideshow('show9', data9, {controller: false, height:200, hu: '../image/', thumbnails: false,width: 200  });
	  });
	   window.addEvent('domready', function(){
	    var data10 = {
	      'TestAgglutination.jpg': { caption: 'teste d\'agglutination.' }, 
	      
	    };
		
	  		    var myShow = new Slideshow('show10', data10, {controller: false, height:200, hu: '../image/', thumbnails: false,width: 200  });
	  });
	//]]>
	</script>

<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/SecondePage.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />

<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/moyenneResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="../css/petitResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 400px)" href="../css/toutpetitResolution.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHDR2.css" />	

</head>

<body id="equipe">
<div id="body" class="arrondie">

<div id="header">
<img src="../image/header.jpg" width="100%" height="150px"; class="arrondie">
</div><br>

<!-- choix de la langue  -->
<!-- mon menu HDR -->

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
 

<div  style="display:flex; flex-direction:row;" >
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
<!-- choix des langues                     fin -->
<!--                                           -->	
<!-- menu HDR(Horizontale Deroulant Responsif) -->      

<nav>
<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>
</ul>
</nav>

</div></div>
	
<!-- fin du choix de la langue  -->	
<!-- fin du menu -->

<div  style="display:flex; flex-direction:column; ">

<div id="fin-article" style="display:flex; flex-direction:row;">
<div style="display:flex; flex-direction:column; width:60%; ">

<?php echo  TXT_TAB ; ?>
<h3><?php echo TXT_ResponsableCellule; ?></h3></div>
<div style="display:flex; flex-direction:column; ">
<a target="_blank" href="../image/personnels/MartineP">

<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/MartineP.png\" width=\"40%\" height=\"auto\"></a>
";
		}
		else {
			
		echo "<img src=\"../image/personnels/MartineP.png\" width=\"30%\" ></a>
			";
		}
	?>
<?php echo TXT_TCBHR; ?></div></div>
</div>


<div  style="display:flex; flex-direction:row; ">
<div id="contenu" align="inline-block" width="100%">

<div id="footbis"  class="arrondie" >

<h4><?php echo TXT_HEA; ?></h4>



<div class="img" style="border:none;" >
 <a target=\"_blank\" href=\"../image/EtuveBacterio.jpg\">
   <?php	
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
   
		echo "<a target=\"_blank\" href=\"../image/EtuveBacterio.jpg\"><img src=\"../image/EtuveBacterio.jpg\" style=\"width:95%; padding:5px; height:auto \" ></a>";	
			}
		else {
				echo "<a target=\"_blank\" href=\"../image/EtuveBacterio.jpg\"><img src=\"../image/EtuveBacterio.jpg\" style=\"width:95%; padding:5px; height:auto \" ></a>";	
}
		?>
	
		<div><?php echo "Etuve pour la bactériologie.";  ?></div><br>
  </a>
 
 <a target="_blank" href="../image/PSMCell3.jpg">
   <?php	
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
   
		echo "<a target=\"_blank\" href=\"../image/PSMCell3.jpg\"><img src=\"../image/PSMCell3.jpg\" style=\"width:95%; padding:5px; height:auto \" ></a>";	
			}
		else {
				echo "<a target=\"_blank\" href=\".../image/PSMCell3.jpg\"><img src=\"../image/PSMCell3.jpg\" style=\"width:95%; padding:5px; height:auto \" ></a>";	
}
		?>
	
		<div><?php echo TXT_BEA4; ;  ?></div><br>
  </a>

<a target="_blank" href="../image/Spectrophotometre.jpg">
 <?php echo "<br><a target=\"_blank\" href=\"../image/Spectrophotometre.jpg\"><img src=\"../image/Spectrophotometre.jpg\" style=\"width:95%; padding:2px; height:auto\"></a>";
 ?>
<?php echo TXT_BEA2; ?><br></a>

<a target="_blank" href="../image/lecteurDePlaque.jpg">
<?php
 echo "<br><a target=\"_blank\" href=\"../image/lecteurDePlaque.jpg\"><img src=\"../image/lecteurDePlaque.jpg\" style=\"width:95%; padding:2px; height:auto\"></a>"; ?>
<div><?php echo TXT_BEA3; ?></div></a>
</div>
 </div>


<div  style="display:flex; flex-direction:column; ">


<div id="section-article"> 
  <?php echo TXT_HST; ?>
   <h2 align="center"><?php echo TXT_BM; ?></h2>
 <h3 align="center"><?php echo TXT_BM1; ?></h3>
<img src="../image/Broyeure.jpg" alt="Broyeure" width="auto" height="250px" align="center" class="displayed">
<br><h3 align="center"><?php echo TXT_BLI3; ?></h3>
 
 <h2 align="center"><?php echo TXT_BM4; ?></h2> <!-- titre -->
 <table class="table">
<tr><td colspan="3"><div id="show9" class="slideshow">
<img src="../image/CMIphotoA.jpg" alt="" width="100%" /></div><br><?php echo TXT_BLI1; ?></td>
<td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
<td><div id="show10" class="slideshow">
<img src="../image/TestAgglutination.jpg" alt="" width="100%" /></div>
<br><?php echo TXT_BLI2; ?></td></tr>
</table>



<h3 align="center"><?php echo TXT_BM3; ?></h3><!-- au centre ...-->
 
<table class="table">
  
<tr><td colspan="3">
<div id="show7" class="slideshow"><img src="../image/GRAM1p.jpg" alt="coloration GRAM etalement" width="50%" /></div>

  </td><td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
   
	<td><div id="show8" class="slideshow" >
    <img src="../image/TissusGRAM1pp.jpg" alt="GRAM sur coupe de tissus" width="50%"/></div> 
	</td></tr><tr><td colspan="3" style="text-align:left"><?php echo TXT_BLI5; ?></td><td></td><td style="text-align:left"><?php echo TXT_BLI4; ?></td><tr>
  </tr></table><br>
 </div> 


 <?php// echo TXT_AEQ; ?>
  <!-- debut du carroussel 
 <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators 
    <ol class="carousel-indicators">
      <li data-target="../css/#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="../css/#myCarousel" data-slide-to="1"></li>
      <li data-target="../css/#myCarousel" data-slide-to="2"></li>
	  <li data-target="../css/#myCarousel" data-slide-to="3"></li>
	  <li data-target="../css/#myCarousel" data-slide-to="4"></li>
	  <li data-target="../css/#myCarousel" data-slide-to="5"></li>	
    </ol>

    <!-- Wrapper for slides 
    <div class="carousel-inner" role="listbox">      
       
      <div class="item active"><h6><?php// echo TXT_legCIC; ?><br><?php// echo TXT_carrouselIm8; ?></h6>
        <img src="../image/Congelateur-80Cellulesbis.jpg" alt="Congelateur -80°C" width="auto" height="150px">
      </div>
	  
	  <div class="item"><h6><?php// echo TXT_legCIC; ?><br><?php// echo TXT_carrouselIm9; ?></h6>       
		<img src="../image/FourUV.jpg" alt="Four à UV" width="auto" height="150px">
      </div>
	   
	   <div class="item"><h6><?php// echo TXT_legendeCar; ?><br><?php// echo TXT_carrouselIm4; ?></h6>
        
		<img src="../image/Chameleon.jpg" alt="chameleon" width="auto" height="150px">
      </div>
	   <div class="item"><h6><?php// echo TXT_legendeCar; ?><br><?php// echo TXT_carrouselIm10; ?></h6>
        
		<img src="../image/LaveriePTIB.jpg" alt="La laverie" width="auto" height="150px">
      </div>
	   <div class="item"><h6><?php// echo TXT_legendeCar; ?><br><?php// echo TXT_carrouselIm3; ?></h6>
        
		<img src="../image/ContenairesN2Lbis.jpg" alt="contenaires d'azote liquide" width="auto" height="150px">
      </div> 
	  
	  
	  <div class="item"><h6><?php// echo TXT_legCIC; ?><br><?php //echo TXT_HTC61; ?></h6>
        
		<img src="../image/MicroscopeNi-UNIKON.jpg" alt="microscope d'histologie?" width="auto" height="150px">
      </div> 
	 
    </div>

  </div>
  </div>
<!-- fin du carousel! --> 

</div>
</div>
 </div>


<!-- ajout pied de page : plan du site....   --> 
<div id="test" class="arrondie">
<?php echo TXT_Piedhtml ; ?>
</div>
<!-- fin ajout -->

<br>
</body>
</html>