<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8;">
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!--- ma premiere( presque) feuille de style : -->
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
     width: 30%;
     margin: auto;	 
  }  
  
  </style> 

<!-- diaporama :    -->

 <link rel="stylesheet" type="text/css" href="../css/slideshow.css" media="screen" />
	<script type="text/javascript" src="../js/mootools.js"></script>
	<script type="text/javascript" src="../js/slideshow.js"></script>

	
<!-- fin diaporama  -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/SecondePage.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/moyenneResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="../css/petitResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 400px)" href="../css/toutpetitResolution.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHDR2.css" />

<!---                         -->
<!---mes scripts javascript : -->
<!---                         -->
<script type="../text/javascript">
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
<img src="../image/header.jpg" width="100%" height="150px"; class="arrondie">
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
 
 <!--<div style="display:flex; flex-direction:column;">-->
 <div  style="display:flex; flex-direction:row;"> 
 <div id="contenu" align="inline" width="100%">
 
<div id="CdL"  style="float:right;" > 
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
<!-- fin du menu -->

<div id="fin-article" style="display:flex; flex-direction:row;">
<div style="display:flex; flex-direction:column; width:30%; ">
<?php echo  TXT_HMT; ?> 
</div>
<div style="display:flex; flex-direction:column; width:30%;">
<br><a target="_blank" href="../image/personnels/MartineP.png">

<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/MartineP.png\" width=\"60%\" height=\"auto\">
";
		}
		else {
			
		echo "<img src=\"../image/personnels/MartineP.png\" width=\"50%\" >
			";
		}
		?></a>
		</div>
<div style="display:flex; flex-direction:column; width:30%;">
<h3 align="center"><?php echo TXT_ResponsableCellule ; ?></h3>
<?php echo TXT_TCBHR; ?></div></div>


<div  style="display:flex; flex-direction:row;">  
 
<div id="contenu" align="inline-block" width="100%">
<!-- images equipements à droite 
<div id="footbis"  class="arrondie" >
<br><br><h4><?php// echo TXT_HEA; ?></h4>
 <br><br><a target="_blank" href="../image/LaserScan.jpg"><img src="../image/LaserScan.jpg" style="width:95%; height:auto;padding:2px;" class="displayed">
<h6><?php// echo TXT_HDA3; ?></h6></a></br></br></br>
 <a target="_blank" href="../image/PCPiloteScan.jpg"><img src="../image/PCPiloteScan.jpg" style="width:95%; height:auto; padding:2px;" class="displayed">
<h6><?php// echo TXT_HDEA1; ?></h6></a></br></br></br>
<a target="_blank" href="../image/etuvesCO2.jpg"><img src="../image/etuvesCO2.jpg" style="width:55%; height:auto; padding:2px;" class="displayed">
<h6><?php// echo TXT_HDEA2; ?></h6></a>
</div>
    teste.          -->


<div id="footbis"  class="arrondie" align="block">
<?php echo TXT_HEA; ?>

 <a target="_blank" href="../image/VetABC.jpg"><img src="../image/VetABC.jpg" style="width:95%; padding:2px;">
<br><h6><?php echo TXT_HEA1; ?></h6></a>

<a target="_blank" href="../image/Cytometre.jpg"><img src="../image/Cytometre.jpg" alt="cytometre" style="width:95%; padding:2px;" >
<br><h6><?php echo TXT_HEA2; ?></h6></a>

<a target="_blank" href="../image/PSMell.jpg"><img src="../image/PSMCell.jpg"  alt="PSM culture cellulaire" style="width:95%; padding:2px;" >
<br><h6><?php echo TXT_HEA3; ?></h6></a>

</div>


<div  style="display:flex; flex-direction:column; ">
<div id="section-article">
<?php echo TXT_HST; ?>
<br>

 <?php echo TXT_HM; ?><br>
 
<div style="display:flex; flex-direction:column; ">

<div  style="display:flex;flex-direction:column; margin:5px;">
  <a target="_blank" href="../image/hemolyse.jpg">
    <img src="../image/hemolyse.jpg" alt="test d'hémolyse" style="width:80%;" class="displayed">
  </a><br>
  <div style="display:flex;flex-direction:column; text-align:center;"><?php echo TXT_HLI1; ?></div>
  </div>
  <br>
  <div class="displayed" style="display:flex;flex-direction:raw; margin:5px; ">
  <div class="displayed" style="display:flex;flex-direction:column; margin:5px; ">
  <a target="_blank" href="../image/facs1.jpg">
    <img src="../image/facs1.jpg" alt="activaion plaquettaire T=0min" style="width:80%" class="displayed">
  </a><br>
  <div><?php echo TXT_HLI2; ?></div>
  </div>
  
  <div class="displayed" style="display:flex;flex-direction:column; margin:5px;">
  <a target="_blank" href="../image/facs2.jpg">
    <img src="../image/facs2.jpg" alt="activaion plaquettaire T=15min" style="width:80%" class="displayed">
  </a><br>
  <div><?php echo TXT_HLI3; ?></div>
  </div>
  </div>
 </div> 
 
 
 
 

</div></div>
<!-- le carousel.....
<?php// echo TXT_AEQ; ?>

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
    </ol>

    <!-- Wrapper for slides  
    <div class="carousel-inner" role="listbox" id="image-car">
 
	<div class="item active"><h6><? //echo// TXT_legendeIHU ; ?><br><?php// echo "Numerateur de sang humain"; ?></h6> 	
		<img src="../image/Numerateursh.jpg" alt="Numerateur de sang humain" width="auto" height="150px">
      </div>
	  
	  <div class="item"><h6><?php// echo TXT_legendeCare ; ?><br><?php// echo TXT_carrouselIm10; ?></h6>  	
		<img src="../image/LaveriePTIB.jpg" alt="La laverie" width="auto" height="150px" >
      </div>
	  
	  <div class="item"><h6><?php// echo TXT_legCICe ; ?><br><?php// echo TXT_carrouselIm12; ?></h6>  	
		<img src="../image/centrifugeuseCultureCell.jpg" alt="centrifugeuse" width="auto" height="150px">
      </div>
	   
	   <div class="item"><h6><?php// echo TXT_legendeCare ; ?><br><?php// echo TXT_carrouselIm11; ?></h6>  	
		<img src="../image/ChambreFroidebis.jpg" alt="Chambre Froide" width="auto" height="150px">
      </div>
	   
	   <div class="item"><h6><?php// echo TXT_legendeCar; ?><br><?php// echo "combine 4°C/20°C"; ?></h6>  	
		<img src="../image/combinebis.jpg" alt="congelateur 4 et -20°C" width="auto" height="150px">
      </div>  
    </div>

    </a>
  </div>
</div>




<!-- fin du carousel! -->
</div>
</div>
<!-- fin du contenu  -->
<!-- ajout pied de page : plan du site....   --> 
<div id="test" class="arrondie">
<?php echo TXT_Piedhtml ; ?>
</div>
<!-- fin ajout -->
</div>
</body>
</html>