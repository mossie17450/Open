<? 

session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="utf8" lang="utf8" dir="ltr">



<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>Innovation biomédicale, recherche de biomateriaux avec le CHU de Bordeaux : le CIC-IT. Aquitaine - France</title>

<meta name="keywords" content="CIC, centre, investigation, clinique, innovation, technologique, biomatériaux, bordeaux, CIC-IT, chu bordeaux, PTIB, Master, bidim, cellules, in vivo, in vitro, médical, recherche, Pessac, Arnozan, hôpital, réparation tissulaire, CIC IT, biomédical, Aquitaine, ingénierie tissulaire, scientifique" />

<meta name="description" content="Acteur aquitain de l&#039;innovation biomédicale, le Centre d&#039;Investigation Clinique Innovation Technologique Biomatériaux de Bordeaux opère au sein d&#039;une structure scientifique actuelle et avancée pour appuyer tous ces travaux de recherche." />



<!--- ma premiere( presque) feuille de style : -->

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../css/SecondePage.css">

<link rel="stylesheet" type="text/css" href="../css/menuHDR2.css">

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



function fr(){

alert("francais");

if(document.getElementById("a").checked == true)



}

function en(){

alert("englais");

}



}

//-->

</script>		

</head>



<body>

<div id="body" class="arrondie">



<div id="header">

<img src="../image/header.jpg" width="100%" height="150px" class="arrondie" >

</div>

<!-- choix de la langue -->



 <?

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

<!--                                           -->

<!-- formulaire choix des langues avec image auto-submit  -->

<!--                                           -->		  

<div  style="display:flex; flex-direction:row;"> 

<div id="contenu" align="inline-block" width="100%">



 <div id="CdL" style="float: right; align:inline-block; "> 

<?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			echo "		
			<form  action=\"\" methode=\"post\" name=\"automatiquement\" id=\"choixlangue\" style=\"display:flex; flex-direction:row;\" >
<a href=\"#\" ><input type=\"radio\" name=\"langue\" id=\"choixlangue1\"  onclick=\"this.form.submit();\" value=\"fr\"><label><img src=\"../image/fr.png\" width=\"150%\"></a><span><img src=\"../image/transparent.png\" width=\"20px\" ></span>
<a href=\"#\"><input type=\"radio\"  name=\"langue\" id=\"choixlangue2\"  onclick=\"this.form.submit();\" value=\"en\"><label><img src=\"../image/en.png\" width=\"150%\"></a>		
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

      

<div>

<nav>

<ul id="menu"><? echo utf8_decode(TXT_Menuhtml); ?>

</ul>

</nav>

</div>

</div></div>

<!-- fin du menu -->

<br>

 <!-- debut du test -->

 <?

 //echo $_POST['codification']."<br> "; // permet de voire si la page publication transmet bien les infos à la page publicationR

 $codification= $_POST['codification'];



 switch($codification){

	case "publications_ecrites":

	$cod="'ACL','ACTN','ACTI'";

	echo utf8_decode("<h6 style=\"margin-left:5%;\">articles publiés dans des revues scientifiques.</h6>");

	break;

	case "communications_affichees":

	$cod="'AFF'";

	echo utf8_decode("<h6 style=\"margin-left:5%;\">Présentation affichée dans un symposium.</h6>");

	break;

	case "communications_orales":

	$cod="'COM'";

	echo utf8_decode("<h6 style=\"margin-left:5%;\">Présentation orale lors d'un symposium.</h6>");

	break;

	case "Brevet":

	$cod="'Brevet'";

	echo utf8_decode("<h6 style=\"margin-left:5%;\">Participation au brevet.</h6>");

	break;

	case "ouvrage":

	$cod="'Ouvrage'";

	echo utf8_decode("<h6 style=\"margin-left:5%;\">Participation à l'ouvrage.</h6>");

	break;

 }

 


$link = mysqli_connect('localhost', 'c1cicitdev','yuvREZ_7s3B','c1cicitdev');


 if (!$link) {

die('Impossible de se connecter : ' . mysql_error());

}

$sql= "SELECT DISTINCT titre ,annee ,titreJournal ,codification, communique.idPublication FROM auteur join communique on auteur.idAuteur=communique.idAuteur join publication on communique.idPublication=publication.idPublication join journale on publication.idJournal=journale.idJournal  WHERE publication.codification IN (".$cod.") ORDER BY publication.annee DESC ";

$req= mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link));  

?>



<!-- tableau des resultats  <? /* echo utf8_decode(TXT_VRET); */?> -->

<!-- if $codification == ACL (publication ecrite) faire echo "<a ref="vers la publi sur internet">titre publi</a> -->

<CENTER><table id="tab">

 <? echo utf8_decode(TXT_VRET); ?>

<!--premiere boucle while : liste des publications -->

<? while($row= mysqli_fetch_array($req, MYSQLI_BOTH)){  

echo "<TR><TD width=\"40%\">".$row[0]."</TD><TD width=\"35%\">";// si publication ecrite : mettre en lien vers la publication(sur pubmed par exemple....



// deusième boucle while à l'intérieur de la première :

$sql1="SELECT nom, Rang FROM auteur join communique on auteur.idAuteur=communique.idAuteur   WHERE communique.idPublication=".$row[4]." ORDER BY communique.Rang";

$req1= mysqli_query($link,$sql1) or die ("Erreur SQL !<br>".$sql1."<br>".mysqli_error($link)); 

while($row1= mysqli_fetch_array($req1, MYSQLI_BOTH)){ 

if(trim($row1['nom'])=="Luc"||trim($row1['nom'])=="Couraud"||trim($row1['nom'])=="Delmond"||trim($row1['nom'])=="Durand"||trim($row1['nom'])=="Bordenave"||trim($row1['nom'])=="Renard"||trim($row1['nom'])=="Seris")

{ 

echo "<strong><em>".$row1['nom']."*, </em></strong>";

} 

else

{

echo $row1['nom'].",  "; 

}



}

echo "</TD><TD width=\"10%\">".$row[2]."</TD>"; 

echo "<TD width=\"5%\">".$row[1]."</TD></TR>"; 

}



?>

</table></CENTER>              

<br/>

 





<div id="test" class="arrondie">

<!-- à traduire -->

<?php echo utf8_decode(TXT_Piedhtml); ?>

</div>

<!-- fin ajout -->

<br>

</div>

</body>

</html>



