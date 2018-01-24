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
<meta  charset="utf8" />
<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />
<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />
<link rel="icon" type="image/png" href="image/logos/logoCIC-ITB.png" />

<!--[if IE]><link rel="icon" type="image/png" href="image/logos/logoCIC-ITB.png" /><![endif]-->
<!---                         -->
<!--- mes feuilles de style : -->
<!---                         -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/CSSPage.css" />
<link rel="stylesheet" type="text/css" href="css/menuHD.css" />
<!--<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/moyenneResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="css/petitResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 400px)" href="css/toutpetitResolution.css" />-->
<link rel="stylesheet" type="text/css" href="css/menuHDR2.css" />

<script type="text/javascript" src="swfobject.js"></script>  
  <script type="text/javascript">  
   var flashvars = {};  
   var params = {};  
   var attributes = {};  
   swfobject.embedSWF("untitled.swf", "AlternativeContent", "0", "0", "9.0.0", false, flashvars, params, attributes);  
  </script>  

<!---                         -->
<!---mes scripts javascript : -->
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
 include('lang/fr-lang.php');
  	 } 
  	 
  	 else if ($_SESSION['lang']=='en') {      // si la langue est 'en' (anglais) on inclut le fichier en-lang.php
  	 include('lang/en-lang.php');
  	 }
  	
	 if (isset($_SESSION['lang'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	
	//echo 'langue:'.$_SESSION['lang'];
	echo '<br />';

	// On affiche un lien pour fermer notre session
	
}
else {
	echo 'Les variables ne sont pas déclarées.';
}
?>
<body>
<div id="body" class="arrondie" height="100%">
<!---                         -->
<!-- en tete                  -->
<!---                         -->
<div id="header" style=" display:flex; flex-direction:row; height:auto; " >
<div style="display:flex; width:10%;"><a href="https://dev.cic-it-bordeaux.fr/index.php" style="float:left; "><img src="image/logos/CIC-ITN.jpg" class="arrondie" style="width:100%; height;auto;"></a></div>
<div style="display:flex;  width:80%; flex-direction:column;">
<?php echo TXT_EnTete; ?> 
</div>
<div style="display:flex; width:10%;"><a href="http://www.cic-it.fr/index.php" style="float:right;"><img src="image/logos/reseauCIC-ITN.jpg"  class="arrondie" style="width:100%; height;auto;" ></a></div>
</div>

<!-- menu et choix des langues -->
<!--                                                                                            -->
<!-- formulaire de choix des langue, avec bouton radio remplacé par une image et auto submit...  -->

<div  style="display:flex; flex-direction:row;">   
<div id="contenu" align="inline" width="100%">

<div id="CdL"> 
<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			echo "		
			<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" style=\"display:flex; flex-direction:row;\" >			
<a href=\"html/admin.php\" ><label><img src=\"../image/cadenasp.png\" width=\"100%\"></a><span><img src=\"../image/transparent.png\" width=\"20px\" ></span>	
<a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\" name=\"langue\" id=\"choixlangue1\"  onclick=\"this.form.submit();\" value=\"fr\"><label><img src=\"../image/fr.png\" width=\"150%\"></a><span><img src=\"../image/transparent.png\" width=\"30px\" ></span>
<a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\"  name=\"langue\" id=\"choixlangue2\"  onclick=\"this.form.submit();\" value=\"en\"><label><img src=\"../image/en.png\" width=\"150%\"></a>		
			"; 	
		}
		
		else {			
		echo "
			<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" style=\"display:flex; flex-direction:row;\" >
<a href=\"html/admin.php\" ><label><img src=\"../image/cadenasp.png\" width=\"100%\"></a><span><img src=\"../image/transparent.png\" width=\"20px\" ></span>			
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
 </div>
 
</div><br><br>
<!--                               -->
<!-- choix des langues en php  fin -->
<!--                               -->
<!-- menu HDR(Horizontale Deroulant Responsif) -->  
 <div  style="display:flex; flex-direction:row; width:100%; "> 
<div id="contenu" align="inline">
<nav>
<ul id="menu"><?php echo TXT_Menu; ?>
</ul>
</nav>
</div>

</div>
<div  style="display:flex; flex-direction:row; width:100%; ">
<div  id="section-article"><br>
<!--<h1 align="center" ><?php // echo TXT_Titre; ?></h1>-->
<h2 align="center" ><strong><?php echo TXT_SSTitre; ?></strong></h2>
<!--  titres de la page....  -->
<?php echo TXT_Article; ?>		

</div>

</div>
</div><br>
<div id="contenu" style="display:inline-block; " >

<div  style="display:flex; flex-direction:row; ">
<div id="PTIB" style="width:40%; height:100%; " class="arrondie" >
 <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"image/ptibbis.jpg\" width=\"100%\" height=\"auto\"   >
";
		}
		else {
			
		echo "<img src=\"image/ptibbis.jpg\"   width=\"100%\" height=\"auto\" >
			";
		}
		?>
 </div>
 
<!--                             -->
<!--image animé                  -->
<!--                             -->	
<!--   si pas adobe flash...     -->
<!--                             -->	             		
<?php 

if($_SESSION['lang']=='fr'){


echo "
<DIV style=\" width:70%; height:30%px; padding-left:5px; padding-right:5px; \">
<P id=cloud></P>
</DIV>

<SCRIPT type=text/javascript src=\"swfobject.js\"></SCRIPT>

<SCRIPT type=text/javascript>

swfobject.addDomLoadEvent(function() {
  swfobject.embedSWF(
					\"imgtagcloud.swf\", \"cloud\",
					\"100%\", \"120%\",
					\"9\", \"\",
					{
						cloud_data:\"cloud2.xml\",
						tcolor:\"0x999999\",
						tcolor2:\"0x666666\",
						hicolor:\"0x494949\",
						tspeed:\"150\",
						fontFace:\"\"
					},
					{wmode: \"transparent\", menu: \"false\", quality: \"best\"}
					);
});



</SCRIPT>
";

//echo "coucou";
}
else {
echo "
<DIV style=\" width:450px; height:350px; \">
<p id=cloud></p>
</DIV>

<SCRIPT type=text/javascript src=\"swfobject.js\"></SCRIPT>

<SCRIPT type=text/javascript>

swfobject.addDomLoadEvent(function() {
  swfobject.embedSWF(
					\"imgtagcloud.swf\", \"cloud\",
					\"450\", \"300\",
					\"9\", \"\",
					{
						cloud_data:\"cloud1.xml\",
						tcolor:\"0x999999\",
						tcolor2:\"0x666666\",
						hicolor:\"0x494949\",
						tspeed:\"150\",
						fontFace:\"\"
					},
					{wmode: \"transparent\", menu: \"false\", quality: \"best\"}
					);
});
</SCRIPT>
";
}

?></div>
<!-- id="AlternativeContent" dans le header.... -->
<div id="AlternativeContent">

<a href="http://www.adobe.com/go/getflashplayer"><img src="image/Responsable.png" alt="Get Adobe Flash player" />installez adobe flash s'il vous plais</a>
</div> 

</div>



<!--                             -->
<!-- images dans un tableau...   -->
<!-- logos à la meme taille...   -->
<!--                             -->
<div  class="table-responsive">
<table class="ex2" width="100%"><tr colspan="10">
 <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
<td colspan="1"><a href="https://www.chu-bordeaux.fr" ><img src="image/logos/ChuBordeauxN.jpg" width="100%" class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="2"><a href="http://www.aquitaine-poitou-charentes.inserm.fr"><img src="image/logos/INSERMN.jpg" width="80%" class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td colspan="2"><a href="http//www.u-bordeaux.fr"><img src="image/logos/universitebN.jpg" width="80%" class="displayed"></a></td>
  <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  <td><a href="http://www.bergonie.org" ><img src="image/logos/BergonieN.jpg" width="100%" class="displayed"></a></td> 
   <td><img src="../image/markerTransparent.png" width="5%" height="auto"></td>
  </tr>
 </table>
</div>

<!--<hr>-->
<br>


<div id="test" class="arrondie">
<?php echo TXT_Pied; ?> 
</div>


</div>
</body>
</html>
