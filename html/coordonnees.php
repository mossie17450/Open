<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<link rel="icon" type="image/png" href="../image/logoCIC-ITB.png" />
<!--[if IE]><link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /><![endif]-->

<!--- ma premiere( presque) feuille de style : -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../css/SecondePage.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHDR2.css" />
<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/moyenneResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="../css/petitResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 400px)" href="../css/toutpetitResolution.css" />
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


function fr(){
if (document.getElementByValue("fr").checked = false){
document.getElementByValue("fr").checked = true;
document.getElementByValue("en").checked = false;
alert("francais");
}
}

function en(){

if (document.getElementByValue("en").checked = false){
document.getElementByValue("en").checked = true;
document.getElementByValue("fr").checked = false;
alert("englais choisie");
}
}


//-->
</script>
</head>

<body id="equipe">
<div id="body" class="arrondie">

<div id="header">
<img src="../image/header.jpg" width="100%" height="150px" class="arrondie">
</div><br>
<!-- choix de la langue -->

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
 <!-- gestion du choix des langues en php -->

 <div  style="display:flex;  flex-direction:row;"> 
<div id="contenu" width="100%" style="display:inline-block;">
 
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
<div>
<div style="text-align:center"><?php echo TXT_CoordoTitre; ?></div>                        
<div style="text-align:center"><?php echo TXT_CoordoAdresse; ?></div> 
<div  style="margin-top:25px;">

<div  style="display:flex; flex-direction:row;">
<div   style="display:flex; flex-direction:column; margin-left:5%; width:30%;"> 
<!-- Malène Durand -->
<div class="img">
  <a target="_blank" href="../image/personnels/MarleneP.png">
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/MarleneP.png\" width=\"100%\" >";
		}
		else {
			
		echo "<img src=\"../image/personnels/MarleneP.png\" width=\"100%\" >";
		}
		?>
  </a><br>
  <div><?php echo TXT_CoordoResponsable;   ?></div>

</div>
<br>

<!-- laurence Bordenave -->
<div class="img">
  <a target="_blank" href="../image/personnels/LBordenavePP.png"><!-- lien quand on clique sur l'image....   -->
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
  </a><br>
  <div><?php echo TXT_CoordoLB;   ?></div>

</div>
</div>

<!-- Claire Darcos  -->
<div  style="display:flex; flex-direction:column; margin-left:2%; width:30%;"> 
<div class="img">
  <a target="_blank" href="../image/personnels/ClaireP.png">
   <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/personnels/ClaireP.png\" width=\"100%\" >
";
		}
		else {
			
		echo "<img src=\"../image/personnels/ClaireP.png\" width=\"100%\" >
			";
		}
		?>
  </a><br>
  <div><?php echo TXT_CoordoCoSecretériat;  ; ?></div>
  </div></div> 

<br><br>
<div  style="display:flex; flex-direction:column; margin-left:5%; width:40%">
<?php echo TXT_Coordo; ?><br>
<iframe width="70%" height="70%"  frameborder="2px" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.fr/maps?f=q&amp;source=s_q&amp;hl=fr&amp;geocode=&amp;q=Hopital+Xavier+Arnozan,+33600+Pessac&amp;aq=&amp;sll=44.848567,-0.623131&amp;sspn=0.120486,0.220757&amp;ie=UTF8&amp;hq=Hopital+Xavier+Arnozan,&amp;hnear=Pessac,+Gironde,+Aquitaine&amp;cid=14449669705423434568&amp;ll=44.833474,-0.604935&amp;spn=0.121735,0.192261&amp;z=11&amp;output=embed">
</iframe>

<a href="http://www.bisonfute.equipement.gouv.fr/diri/listeflashs.do?pageAstec=ie1_bordeaux.html&amp;langue=fr&amp;evt=1" target="_blank">
<hr><?php echo TXT_CoordoTrafic; ?>
<p><img src="../image/coordonnees_bison_fute.jpg" width="60%"/><br/></p></a>
<a  target="_blank" href="LaurenceBordenave.php">                       
<br><a target="_blank" href="plantbcchu.php"><?php echo TXT_CoordoBusTram; ?>
<img src="../image/plantbcchu.jpg" width="60%"><br/>
<?php echo "Plan de l'hopital Xavier Xernozan de Pessac"; ?>
<br>
</a>
<?php echo "informations tcb :pour se déplacé sur<br>la communauté urbaine de bordeaux<br>"; echo TXT_MobiliteTBM; ?><a href="http://www.infotbm.com/" ></a>
<img src="../image/aeroportXavierXernozan.png" width="50%"><br/>
</div></div>        
</div>
</div>  
  
<!-- ajout pied de page : plan du site....   --> 
<div id="test" class="arrondie">
<?php echo TXT_Piedhtml; ?>  
</div>
<!-- fin ajout -->
<br>
</div>
</body>
</html>