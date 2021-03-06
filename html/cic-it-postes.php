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
<!--- ma premiere( presque) feuille de style : --->


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

<body id="equipe">
<div id="body" class="arrondie">
<!--<div id="header">
<img src="../image/header.jpg" width="100%" height="auto" class="arrondie">
</div>-->
<div id="header">
<img src="../image/headerHtml1.png" width="100%" height="240px" class="arrondie" />
</div>

<!-- choix de la langue  -->
 <?php
	  if($_SESSION['lang'] && empty($_GET['langue'])){
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
  	 
  	 else {                       // si aucune langue n'est déclarée on inclut le fichier fr-lang.php par défaut
  	 include('../lang/fr-lang.php');
  	 }
	 ?>
<!-- gestion du choix des langues en php -->

 <div  style="display:flex; flex-direction:row;"> 
 <div id="contenu" align="inline-block" width="100%">
 
<div id="CdL" style="float: right; align:inline-block;"> 

<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			echo "		
			<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" style=\"display:flex; flex-direction:row;\" >
<a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\" name=\"langue\" id=\"choixlangue1\"  onclick=\"this.form.submit();\" value=\"fr\"><label><img src=\"../image/fr.png\" width=\"130%\"></a><span><img src=\"../image/transparent.png\" width=\"20px\" ></span>
<a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\"  name=\"langue\" id=\"choixlangue2\"  onclick=\"this.form.submit();\" value=\"en\"><label><img src=\"../image/en.png\" width=\"130%\"></a>		
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
<!-- choix des langues,                    fin -->
<!--                                           -->	
<!-- menu HDR(Horizontale Deroulant Responsif) -->  
     

<nav>
<ul id="menu" style="display:inline;"><?php echo TXT_Menuhtml; ?>
</ul>
</nav>

</div></div>

<!-- fin du menu -->


<div id="contenu" align="inline" width="100%" style="display:flex; flex-direction:row;">

 <!-- ajout pied de page : plan du site....   --> 
<div id="section-article" style="width:80%;"><br><br><br> 
<div style="text-align:center"><?php echo TXT_TitrePoste; ?></div>
<br><br><br> 
<br>
<?php

//$link =mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev' );	
$link = mysqli_connect( 'localhost', 'root','','cic-it2017');		//connection en local....		
	 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}

$req = "SELECT * FROM poste";
		$poste = mysqli_query($link, $req);
		
		if(mysqli_num_rows($poste))
		$nbPostes = true;
		else $nbPostes = false;
		
		
		mysqli_close($link);

	if($nbPostes) {
		
		while($postes = mysqli_fetch_array($poste,MYSQLI_BOTH)) {
			echo '
			<table class="listeEvent">
				<tr><td>'.$postes['titrePoste'].'</td></tr>
				<tr><td>'.$postes['descriptionPoste'].'</td></tr>
				
				<tr><td>'.TXT_TPDF.'</td></tr>
				<tr><td><a href="../admin/www/'.$postes['NomPDFPoste'].'">'.$postes['NomPDFPoste'].'</a></td></tr>
				<tr><td>'.TXT_PostulerS.'</td></tr>
				<tr><td><a href="cic-it-spontanee.php">'.TXT_IciPostulerS.'</a></td></tr>									
			</table>
			<br/><br/>
			';
		}
		
	} 
	else {
	
		echo TXT_ArticlePoste;
		}
	
?>
<br>
</div>


<div id="footbis" class="arrondie"  style="align:center;">
<img src="../image/logos/Universite-BordeauxRVB-01.jpg" width="80%" class="img2"><span><img src="../image/blanc.png" width="20%" height="5%"></span>
<img src="../image/logos/Chubordeaux.jpg" width="60%" class="img2"><span><img src="../image/blanc.png" width="20%" height="5%"></span>
<img src="../image/logos/logo-generique-SD.gif" width="70%" class="img2"><span><img src="../image/blanc.png" width="20p%" height="5%"></span>
<img src="../image/logos/logo_PTIB.jpg" width="70%" class="img2"><span><img src="../image/blanc.png" width="20%" height="5%"></span>
<img src="../image/logos/logo-2acbi.jpg" width="50%" class="img2"><span><img src="../image/blanc.png" width="20%" height="5%"></span>
</div>


<!-- fin ajout -->
</div>
<div id="test" class="arrondie">
<?php echo TXT_Piedhtml; ?>  
</div>

</div>
</body>
</html>