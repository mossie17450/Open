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
<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<!---  icone barre du navigateur...                        -->
<link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" />
<!--[if IE]><link rel="icon" type="image/png" href="../image/logos/logoCIC-ITB.png" /><![endif]-->
<!--                            -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!--<link rel="stylesheet" type="text/css" href="../css/SecondePage.css" />-->
<link rel="stylesheet" type="text/css" href="../css/CSSPage.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHD.css" />
<link rel="stylesheet" media="screen and (max-width: 1200px)" href="../css/moyenneResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="../css/petitResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 400px)" href="../css/toutpetitResolution.css" />
<link rel="stylesheet" type="text/css" href="../css/menuHDR2.css" />

<!--- mes scripts javascript : -->
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
<div id="body" class="arrondie">


<div id="header" style=" display:flex; flex-direction:row; height:auto; " >
<div style="display:flex; width:10%;"><a href="https://dev.cic-it-bordeaux.fr/index.php" style="float:left; "><img src="../image/logos/CIC-ITN.jpg" class="arrondie" style="width:100%; height;auto;"></a></div>
<div style="display:flex;  width:80%; flex-direction:column;">
<?php echo TXT_EnTete; ?> 
</div>
<div style="display:flex; width:10%;"><a href="http://www.cic-it.fr/index.php" style="float:right;"><img src="../image/logos/reseauCIC-ITN.jpg"  class="arrondie" style="width:100%; height;auto;" ></a></div>
</div>

<!-- choix des langues en php -->
<!---                         -->
<!--                                           -->	
<!-- menu HDR(Horizontale Deroulant Responsif) --> 
<div  style="display:flex; flex-direction:row;  ">
<div id="contenu" align="inline" width="100%">

<!-- formulaire de choix des langue :icon auto-submit -->
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

?>
</form> 
 </div> 
 </div></div><br>
 <!-- fin formulaire choix des langues -->
<div  style="display:flex; flex-direction:row;  ">
<div id="contenu" align="inline" width="100%">
<nav style="display:inline;">
<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>
</ul>
</nav>

</div>
</div> 
 	
<!--<div style="display:flex; flex-direction:column; align:inline-block; "> 
<div id="contenu"  style="display:flex; flex-direction:row;">	
<!-- a droite -->
<!-- a gauche -->
<div  style="display:flex; flex-direction:row; ">
<div id="contenu" style="display:inline-block;" width="100%">

<!--<div id="footbis"  class="arrondie" align="center">
<a href="https://www.chu-bordeaux.fr/"><img src="../image/logos/LogoCHU_2011.gif" width="70%" class="displayed"></a><br><span><img src="../image/blanc.png" width="2%" ></span><br>

<a href="http://www.aquitaine-poitou-charentes.inserm.fr/"><img src="../image/logos/logo-generique-SD.gif" width="70%" class="displayed"></a><br><span><img src="../image/blanc.png" width="2%" ></span><br>

<a href="http//www.u-bordeaux.fr/"><img src="../image/logos/Universite-BordeauxRVB-01.jpg" width="70%" class="displayed"></a><br><span><img src="../image/blanc.png" width="2%" ></span><br>

<a href="http://www.bergonie.org/"><img src="../image/logos/Bergonie.jpg" width="70%" class="displayed"></a><br><span><img src="../image/blanc.png" width="2%" ></span><br>
                   
</div>-->

<div style="display:flex; flex-direction:column;">
<br>
<!--  titres de la page....  -->
<div>
<!--<h1 align="center"><?php // echo TXT_HPT; ?></h1>-->

<?php echo TXT_histoire; ?></div>


<div  class="table-responsive">
<table class="ex2" width="100%"><tr colspan="10">
<td colspan="1"><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
<td colspan="1"><a href="http://www.bergonie.org" ><img src="../image/logos/logo_biotis_t.jpg" width="100%" class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="3"><a href="https://cic-p.u-bordeaux.fr/"><img src="../image/logos/logo_cic_p_bordeaux.png" width="50%" class="displayed"></a></td>
  <td colspan="1"><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="3"><a href="https://cic-p.u-bordeaux.fr/"><img src="../image/logos/CIC-EC.png" width="50%" class="displayed"></a></td>
  </tr>
 </table>
</div>
<!--<div style="margin-left:5%; display:flex; flex-direction:row; height:100%;">
<a href="http://www.biotis-bordeaux.com/"><img src="../image/logos/logo_biotis_t.jpg"  class="displayed" style="width:250%;" ></a>
<a href="https://cic-p.u-bordeaux.fr/" style="margin-left:20%;"><img src="../image/logos/logo_cic_p_bordeaux.png" class="displayed"  style=" width:65%;" ></a>
<a href="https://cic-p.u-bordeaux.fr/" ><img src="../image/logos/CIC-EC.png"  class="displayed" style="width:45%;" ></a>

</div>-->
</div>

<div  class="table-responsive">
<table class="ex2" width="100%"><tr colspan="10">
 <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
<td colspan="1"><a href="https://www.chu-bordeaux.fr" ><img src="../image/logos/ChuBordeauxN.jpg" width="100%" class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="2"><a href="http://www.aquitaine-poitou-charentes.inserm.fr"><img src="../image/logos/INSERMN.jpg" width="80%" class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="2"><a href="http//www.u-bordeaux.fr"><img src="../image/logos/universitebN.jpg" width="80%" class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td><a href="http://www.bergonie.org" ><img src="../image/logos/BergonieN.jpg" width="100%" class="displayed"></a></td> 
   <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  </tr>
 </table>
</div>

</div>
</div>

<div id="test" class="arrondie">
<?php echo TXT_Piedhtml; ?> 
</div>

</div>
</body>
</html>
