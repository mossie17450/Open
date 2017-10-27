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
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!--- ma premiere( presque) feuille de style : -->
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
<div id="body" class="arrondie">

<div id="header" style=" display:flex; flex-direction:row; height:auto;" >
<div style="display:flex; width:17%;"><a href="https://dev.cic-it-bordeaux.fr/index.php" style="float:left; "><img src="../image/logos/cicitgbis.png" class="arrondie" style="width:100%; height;auto;"></a></div>
<div style="display:flex;  width:80%; flex-direction:column;">
<?php echo TXT_EnTete; ?> 
</div>
<div style="display:flex; width:17%;"><a href="http://www.cic-it.fr/index.php" style="float:right;"><img src="../image/logos/reseauCIC-ITter.jpg"  class="arrondie" style="width:100%; height;auto;" ></a></div>
</div><br><br>

<!-- choix de la langue  -->

 
 
<div  style="display:flex; flex-direction:row;"> 

<div id="contenu" align="inline-block" width="100%">

<div id="CdL" style="float: right; align:inline-block; "> 

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

<div id="fin-article" style="display:flex; flex-direction:row;">
<div style="display:flex; flex-direction:column; width:30%;">
<h2 style="text-align:center"><?php echo TXT_TCT; ?></h2>
</div>
 <div style="display:flex; flex-direction:column; width:30%; margin-right:1%; ">
 <a target="_blank" href="../image/personnels/ElodieP.png">
<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/ElodieP.png\" width=\"60%\" height=\"90%\" align=\"right\";>
";
		}
		else {
			
		echo "<img src=\"../image/personnels/ElodieP.png\" width=\"45%\" align=\"right\";>
			";
		}
		
		?></a>
		</div>
		<div style="display:flex; flex-direction:column; width:30%; ">
		 <h3><?php echo TXT_Resp ; ?><br><?php echo TXT_ResponsableClinique; ?></h3>
		 
<div  style="display:inline-block; width:100%; text-align:left;">
<?php echo TXT_TCR ; ?>
</div>
</div>
</div>

<div  style="display:flex; flex-direction:row; ">
<div id="contenu" align="inline-block" width="100%">

<div id="footbis"  class="arrondie"><!-- a droite -->                          
<h6 style="color:white;"></h6><br>
<a href="https://www.chu-bordeaux.fr/"><img src="../image/logos/LogoCHU_2011.gif"   width="70%" class="displayed"></a><br><span><img src="../image/blanc.png" width="10%"  height="5%"></span><br> 
<h6 style="color:white;"></h6>
<a href="http://www.ich.org/home.html"><img src="../image/logos/ICH.jpg"  width="80%" class="displayed"></a><span><img src="../image/blanc.png" width="5%" height="10%"></span><br>
<h6 style="color:white;"></h6>
<a href="http://www.cic-it.fr/"><img src="../image/logos/reseauCIC-ITter.jpg"  width="70%" class="displayed"></a><span><img src="../image/blanc.png" width="5%" height="5%"></span><br>
<h6 style="color:white;"></h6>
<a href="http://www.fcrin.org/"><img src="../image/logos/euclide&fcrin.jpg"  width="100%" class="displayed"></a>
</div>

<div style="padding:20px; display:flex; flex-direction:column;" ><!-- a gauche --> 
<div align="center"><?php echo TXT_HST ; ?></div>
<?php echo TXT_ECM1 ; ?>
<?php echo TXT_ECM2 ; ?>

</div>
<!-- fin du contenu  -->
</div></div>
<!--  pied de page : plan du site, etc,....   --> 
<div id="test" class="arrondie">
<?php echo TXT_Piedhtml ; ?>
</div>
<!-- fin pied de page -->

<br>
</div>
</body>
</html>