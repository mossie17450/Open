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

<link rel="stylesheet" href="../css/slideshow.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">	
	<script type="text/javascript" src="../js/mootools.js"></script>
	<script type="text/javascript" src="../js/slideshow.js"></script>
	
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

<script type="text/javascript">				 
	   window.addEvent('domready', function(){
	    var data8 = {
	      '11.jpg': { caption: '11' }, 
	      '22.jpg': { caption: '22' }, 
	      '33.jpg': { caption: '33' }, 
		'44.jpg': { caption: '44' }, 
		'55.jpg': { caption: '55' }, 
	    };
	    var myShow = new Slideshow('show8', data8, {controller: false, height:200, hu: '../image/', thumbnails: false,width: 200  });
	  });
	  
	   window.addEvent('domready', function(){
	    var data9 = {
	      'blanc.jpg': { caption: 'blanc' }, 
	      'temoin negatif.jpg': { caption: 'negatif' }, 
	      'Temoin positif.jpg': { caption: 'positif' }, 
	  
	    };
	    var myShow = new Slideshow('show9', data9, {controller: false, height:200, hu: '../image/', thumbnails: false,width: 200  });
	  });
	  
	   window.addEvent('domready', function(){
	    var data10 = {
	      'vWF x40.jpg': { caption: 'marquage au von WillBrant Factor' }, 
	      'HUVEC Ulex x40.jpg': { caption: 'HUVECs marquage par Ulex (lectine)' }, 
	      'decellularisation de materiaux.jpg': { caption: 'test de caractérisation: culture en matrigel' }, 
	  
	    };
	    var myShow = new Slideshow('show10', data10, {controller: false, height:200, hu: '../image/', thumbnails: false,width: 200  });
	  });
	  
	   window.addEvent('domready', function(){
	    var data11 = {
	      'Isolement ECP J9.jpg': { caption: 'isolement de cellules, neuvième jour.' }, 
	    
	    };
	    var myShow = new Slideshow('show11', data11, {controller: false, height:200, hu: '../image/', thumbnails: false,width: 200  });
	  });
	
	//]]>
	</script>



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
<!--                     -->
<!-- choix de la langue  -->
<!--                     -->
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
  	
  	 else{                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
  	 include('../lang/fr-lang.php');
  	 }
	 ?>
 


<div  style="display:flex; flex-direction:row;"> 
<div id="contenu" align="inline-block" width="100%" >

<div id="CdL" style="float:right;" style="display:flex; flex-direction:row;"> 

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
<!-- menu HDR(Horizontale Deroulant Responsif) -->  
<!--                                           -->     

<nav>
<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>
</ul>
</nav>

</div></div>
<!-- fin du menu -->
<!-- presentation responsable -->
<!--<div  style="display:flex; flex-direction:column;">--> 

<div id="fin-article" style="display:flex; flex-direction:row;">
<div style="display:flex; flex-direction:column; width:60%; ">

<?php echo  TXT_CCT ; ?>

<h3><?php echo TXT_ResponsableCellule; ?></h3></div>
<div style="display:flex; flex-direction:column; ">
<a target="_blank" href="../image/personnels/MartineP.png">
<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/MartineP.png\" width=\"40%\" height=\"auto\" title=\"Martine Renard\">";
		}
		else {
			
		echo "<img src=\"../image/personnels/MartineP.png\" width=\"35%\" title=\"Martine Renard\">";
		}
		?> 
		</a>
<br><?php echo TXT_TCBHR; ?></div>
</div>

<!-- corps de la page -->

<div  style="display:flex; flex-direction:row; ">
<div id="contenu" align="inline-block" width="100%" >

<div id="footbis"  class="arrondie" ><!-- images a droite -->


<h4><?php echo TXT_HEA; ?></h4><br><br>
<!--  -->
<div class="img" style="border:none; ">
  <a target="_blank" href="PSM.php">
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
echo " <br><img src=\"../image/PSMCell.jpg\" style=\"width:80%; padding:2px; height:10%; \";></a>
";	
		}
		else {
		

		
		echo "<img src=\"../image/PSMCell.jpg\" alt=\"PSM culture cellulaire\" title=\"PSM culture cellulaire\" style=\"width:80%; padding:2px;\">
";
		}
		?>
		<div><?php echo TXT_CCEA1;   ?></div>
  </a><br>
  


  <a target="_blank" href="microscopeInverse.php">
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
echo " <br><img src=\"../image/microscopeInverse.jpg\" style=\"width:80%; padding:2px; height:10%;\";></a>
";	
		}
		else {
		

		
		echo "<img src=\"../image/microscopeInverse.jpg\" alt=\"microscope Inverse\" title=\"microscope Inverse\" style=\"width:80%; padding:2px;\">
";
		}
		?>
		<div><?php echo TXT_CCEA2;   ?></div>
  </a><br>
  


  <a target="_blank" href="etuveCO2.php">
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
echo " <br><img src=\"../image/etuvesCO2.jpg\" style=\"width:80%; padding:2px; height:10%;\";></a>
";	
		}
		else {
		

		
		echo "<img src=\"../image/etuvesCO2.jpg\" alt=\"etuves à CO2\" title=\"etuves à CO2\" style=\"width:80%; padding:2px; \">
";
		}
		?>
		<div><?php echo TXT_CCEA3;   ?></div>
  </a><br>
  

</div>

</div> 

<!--<div  style="display:flex; flex-direction:column; ">-->
<div id="section-article" > 
<?php echo TXT_HST; ?>
<?php echo TXT_CCM; ?>

<!-- image et legende , voire avec Martine! -->

<table class="table">
<tr><td colspan="2"><div id="show10" class="slideshow" >
    <img src="../image/vWF x40.jpg" alt="" width="50%" />
  </div></td><td><img src="../image/markerTransparent.png" width="10%" height="5%"></td>
  <td><div id="show11" class="slideshow">
    <img src="../image/Isolement ECP J9.jpg" alt="" width="70%"/>
	</div></td><tr><td style="text-align:left" colspan="2"><em><?php echo TXT_IlegCC1; ?></em></td><td></td><td style="text-align:left"><em><?php echo TXT_IlegCC2; ?></em></td></tr>
</td></tr></table>
  
<h4><?php echo TXT_CCTM1; ?></h4>



<table class="table">
<tr><td colspan="3"><div id="show8" class="slideshow" >
    <img src="../image/11.jpg" alt="" width="70%" />
  </div></td><td><img src="../image/markerTransparent.png" width="50%" height="5%"></td>
  <td><div id="show9" class="slideshow">
    <img src="../image/blanc.jpg" alt="" width="60%"/>
	</div></td><tr><td style="text-align:left" colspan="3"><em><?php echo TXT_IlegCC3; ?></em></td><td></td><td style="text-align:left"><em><?php echo TXT_IlegCC4; ?></em></td></tr>
</td></tr></table>
</div>


<!-- carrousselle :   -->
<?php// echo TXT_AEQ; ?>

 <!--<div class="container">

  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators 
    <ol class="carousel-indicators">
    <li data-target="../css/#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="../css/#myCarousel" data-slide-to="1"></li>  
    <li data-target="../css/#myCarousel" data-slide-to="2"></li>
    <li data-target="../css/#myCarousel" data-slide-to="3"></li>
	<li data-target="../css/#myCarousel" data-slide-to="4"></li>
	<li data-target="../css/#myCarousel" data-slide-to="5"></li>
	<li data-target="../css/#myCarousel" data-slide-to="6"></li>  
    </ol>
    <!-- Wrapper for slides 
    <div class="carousel-inner" role="listbox">
      <div class="item active"><h6><?php// echo TXT_carrouselIm1;?><br><?php// echo TXT_legCIC; ?></h6>
   <img src="../image/compteurCellules.jpg" alt="compteur de cellules" width="auto" height="150px">
      </div> 	  	  
	  <div class="item"><h6><?php// echo TXT_carrouselIm2; ?><br><?php// echo TXT_legCIC; ?></h6>
        <img src="../image/centrifugeuseJouan.jpg" alt="centrifugeuse Jouan" width="auto" height="150px">
      </div>
	  
	  <div class="item"><h4><?//  echo TXT_carrouselIm3; ?><br><?php// echo TXT_legendeCar; ?></h4>
		<img src="../image/ContenairesN2Lbis.jpg" alt="ContenairesN2L" width="auto" height="150px">
      </div>
	  
	 <div class="item"><h4><?// echo TXT_carrouselIm4; ?><br><?php// echo TXT_legCIC; ?></h4>
        <img src="../image/Chameleon.jpg" alt="" width="auto" height="150px">
      </div> 
	  
	  <div class="item"><h4><?// echo TXT_carrouselIm5; ?><br><?php// echo TXT_legendeCar; ?></h4>
        <img src="../image/combinebis.jpg" alt="combine-20°C&-80°C" width="auto" height="150px">
      </div> 
	  
	  <div class="item"><h4><?// echo TXT_carrouselIm6; ?><br><?php// echo TXT_legendeCar; ?></h4>
        <img src="../image/bainsThermostate.jpg" alt="" width="auto" height="150px">
      </div> 
	  
	  <div class="item"><h6><? //echo// TXT_carrouselIm7; ?><br><?php// echo TXT_legendeCar;  ?></h6>
        <img src="../image/BainUltraSon.jpg" alt="" width="auto" height="150px">
      </div>   
	 
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
	 
    </div>
	</div> 
	</div> -->

<!-- fin du carousel! --> 


</div></div>
<!-- fin du contenu  -->
<!-- ajout pied de page : plan du site....   --> 
<div id="test" class="arrondie">
<?php echo TXT_Piedhtml ; ?>
</div>
</div></div>
<!-- fin ajout -->

</body>
</html>