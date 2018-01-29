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
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<link rel="icon" type="image/png" href="../image/logoCIC-ITB.png" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!--<link rel="stylesheet" type="text/css" href="../css/SecondePage.css" />-->
<link rel="stylesheet" type="text/css" href="../css/CSSPage.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/moyenneResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="../css/petitResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 400px)" href="../css/toutpetitResolution.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHDR2.css" />
<script>
window.onload=montre;
function montre(id) {
var d = document.getElementById(id);
	for (var i = 1; i<=10; i++) {
		if (document.getElementById('smenu'+i)) {document.getElementById('smenu'+i).style.display='none';}
	}
if (d) {d.style.display='block';}
}
</script>
</head>

<body>
<?php

  if($_SESSION['lang'] && empty($_GET['langue'])){
		$_SESSION['lang'];
 }
 
 else if(!empty($_GET['langue']) ){
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
<div id="body" class="arrondie">
<!-- en tete -->
<div id="header" style=" display:flex; flex-direction:row; height:auto; " >
<div style="display:flex; width:10%;"><a href="https://dev.cic-it-bordeaux.fr/index.php" style="float:left; "><img src="../image/logos/CIC-ITN.jpg" class="arrondie" style="width:100%; height;auto;"></a></div>
<div style="display:flex;  width:80%; flex-direction:column;">
<?php //echo TXT_EnTete; ?>
<img src="../image/logos/CICITBordeaux.png"  class="arrondie" style="width:100%;" > 
</div>
<div style="display:flex; width:10%;"><a href="http://www.cic-it.fr/index.php" style="float:right;"><img src="../image/logos/reseauCIC-ITN.jpg"  class="arrondie" style="width:100%; height;auto;" ></a></div>
</div>
<!-- choix de la langue -->
<!-- gestion du choix des langues en php -->

<div  style="display:flex;  flex-direction:row;"> 
<div id="contenu" width="100%" style="display:inline-block;"> 
<div id="CdL" style="float:right; align:inline; "> 
<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			echo "		
			<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" style=\"display:flex; flex-direction:row;\" >			
<a href=\"admin.php\" ><label><img src=\"../image/cadenasp.png\" width=\"100%\"></a><span><img src=\"../image/transparent.png\" width=\"20px\" ></span>	
<a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\" name=\"langue\" id=\"choixlangue1\"  onclick=\"this.form.submit();\" value=\"fr\"><label><img src=\"../image/fr.png\" width=\"150%\"></a><span><img src=\"../image/transparent.png\" width=\"30px\" ></span>
<a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\"  name=\"langue\" id=\"choixlangue2\"  onclick=\"this.form.submit();\" value=\"en\"><label><img src=\"../image/en.png\" width=\"150%\"></a>		
			"; 	
		}
		
		else {			
		echo "
			<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" style=\"display:flex; flex-direction:row;\" >
<a href=\"admin.php\" ><label><img src=\"../image/cadenasp.png\" width=\"100%\"></a><span><img src=\"../image/transparent.png\" width=\"20px\" ></span>			
<a href=\"\" ><input type=\"radio\" hidden name=\"langue\" id=\"choixlangue1\" onclick=\"this.form.submit();\" value=\"fr\"><label for=\"choixlangue1\"><img src=\"../image/fr.png\" width=\"150%\"></a><span><img src=\"../image/transparent.png\" width=\"30px\" ></span>
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
</div></div> 
<!--                                           -->
<!-- choix des langues en php à améliorer, fin -->
<!--                                           -->
<br>	
<!-- menu HDR(Horizontale Deroulant Responsif) -->
<div  style="display:flex;  flex-direction:row;"> 
<div id="contenu" width="100%" style="display:inline-block;">       
<nav>
<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>
</ul>
</nav>
</div></div>
<!-- fin du menu -->

<!--<div>
<div style="text-align:center"><?php// echo TXT_CoordoTitre; ?></div>  
-->
<div  class="table-responsive"  width="100%">
<table class="ex2" width="100%" style="padding:2%;">
<tr><td colspan="9"><?php echo TXT_CoordoTitre; ?></td></tr>

<tr colspan="9">
<td colspan="2"><?php echo TXT_Coordo; ?>
  </td>
<td colspan="3"><h3 align="center">Notre adresse:</h3><div align="center"><?php echo TXT_CoordoAdresse; ?></div></td>
<td colspan="4" style="padding:2%;"><iframe width="100%" height="100%" margin-left="1px" frameborder="1px" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Hopital+Xavier+Arnozan,+33600+Pessac&amp;aq=&amp;sll=44.848567,-0.623131&amp;sspn=0.120486,0.220757&amp;ie=UTF8&amp;hq=Hopital+Xavier+Arnozan,&amp;hnear=Pessac,+Gironde,+Aquitaine&amp;cid=14449669705423434568&amp;ll=44.833474,-0.604935&amp;spn=0.121735,0.192261&amp;z=11&amp;output=embed">
</iframe></td>
</tr>
<tr><td colspan="9"><h4>personnes à contactées:</h4></td></tr>
<tr colspan="9"><td colspan="1"><a target="_blank" href="../image/personnels/MarleneP.png">
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/MarleneP.png\" width=\"100%\" >";
		}
		else {
			
		echo "<img src=\"../image/personnels/MarleneP.png\" width=\"100%\" >";
		}
		?>
  </a></td><td colspan="2"><?php echo TXT_CoordoResponsable;?></td>
  
  <td colspan="1"><a target="_blank" href="../image/personnels/ClaireP.png">
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/ClaireP.png\" width=\"100%\" >
";
		}
		else {
			
		echo "<img src=\"../image/personnels/ClaireP.png\" width=\"100%\" >
			";
		}
		?></a></td>
		<td colspan="2"><?php echo TXT_CoordoCoSecretériat; ?></td>
		<td colspan="1"><a target="_blank" href="LaurenceBordenave.php">
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/LBordenavePP.png\" width=\"100%\" >
";
		}
		else {
			
		echo "<img src=\"../image/personnels/LBordenavePP.png\" width=\"100%\" >
			";
		}
		?>
  </a></td>
  <td colspan="2"><?php echo TXT_CoordoResponsable;?></td></tr>
  
 

<!--<tr colspan="9">
<td colspan="2"><?php echo TXT_Coordo; ?>
  </td>
<td colspan="3"><h3 align="center">Notre adresse:</h3><div align="center"><?php //echo TXT_CoordoAdresse; ?></div></td>
<td colspan="4" style="padding:2%;"><iframe width="100%" height="100%" margin-left="1px" frameborder="1px" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Hopital+Xavier+Arnozan,+33600+Pessac&amp;aq=&amp;sll=44.848567,-0.623131&amp;sspn=0.120486,0.220757&amp;ie=UTF8&amp;hq=Hopital+Xavier+Arnozan,&amp;hnear=Pessac,+Gironde,+Aquitaine&amp;cid=14449669705423434568&amp;ll=44.833474,-0.604935&amp;spn=0.121735,0.192261&amp;z=11&amp;output=embed">
</iframe></td>
</tr>-->

<tr colspan="9" rowspan="2">
<td colspan="3" style="padding:2%;"><a href="http://www.bisonfute.equipement.gouv.fr/diri/listeflashs.do?pageAstec=ie1_bordeaux.html&amp;langue=fr&amp;evt=1" target="_blank">
<hr><?php echo TXT_CoordoTrafic; ?>
<p><img src="../image/coordonnees_bison_fute.jpg" width="100%"/><br/></p></a> </td>

<td colspan="3"> <?php echo "Pour se déplacer grâce aux transports en commun.<br>"; echo TXT_MobiliteTBM; ?><a href="http://www.infotbm.com/" ></a>
<br>
<div align="inline"><?php echo "De l'aéroport de Mérignac au CIC-IT,Hôpital Xavier Arnozan (Pessac)"; ?><br><a target="_blank" href="aeroportXavierXernozan.php" >
<!--<img src="../image/aeroportXavierXernozan.png" width="50%"><br/>-->
le plan est ici
</a></div>
<br>
<div align="inline"><?php echo "De la gare Saint Jean (Bordeaux) au CIC-IT, hopital Xavier Arnozan (Pessac)"; ?>
<br><a target="_blank" href="gareStJeanXavierXernozan.php">
<!--<img src="../image/gareStJeanXavierXernozan.png" width="50%"><br/>  gareStJeanXavierXernozan-->
le plan est ici
</a></td>
<td colspan="3" style="padding:2%;">
<a target="_blank" href="plantbcchu.php" ><?php echo TXT_CoordoBusTram; ?>
<img src="../image/plantbcchu.jpg" width="100%"><br/>
</a>
</td>

<!--<td colspan="2">Annuaire du personnel du CIC-IT de Bordeaux : <br><a href="personnel.pdf">
<?php // echo "<img src=\"../image/personnels/personnel.jpg\" width=\"50%\" > "; ?></a>		
</td>
<td colspan="2" rowspan="2"><a href="http://www.bisonfute.equipement.gouv.fr/diri/listeflashs.do?pageAstec=ie1_bordeaux.html&amp;langue=fr&amp;evt=1" target="_blank">
<hr><?php // echo TXT_CoordoTrafic; ?>
<p><img src="../image/coordonnees_bison_fute.jpg" width="100%"/><br/></p></a>


</td>-->
</tr>
</table>


<!-- ajout pied de page : plan du site....   --> 
<div id="test" class="arrondie">
<?php echo TXT_Piedhtml; ?>  
</div>
<!-- fin ajout -->
<br>
</div>
</body>
</html>