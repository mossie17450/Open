<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
<head>
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
<link rel="stylesheet" type="text/css" href="css/SecondePage.css" />
<link rel="stylesheet" type="text/css" href="css/menuHD.css" />
<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/moyenneResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 800px)" href="css/petitResolution.css" />
<link rel="stylesheet" media="screen and (max-width: 400px)" href="css/toutpetitResolution.css" />
<link rel="stylesheet" type="text/css" href="css/menuHDR2.css" />

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
<div id="body" class="arrondie" >
<!---                         -->
<!-- en tete                  -->
<!---                         -->
<!--  photo de la PTIB avec calendrier...  -->
<div id="header" style="height:auto;">
<img src="image/headerGG.jpg" width="100%" height="150px" class="arrondie" /><!-- a optimiser en responsive -->
</div> 




<div  style="display:flex; flex-direction:row; "> 
<!-- animation....--> 
<div  width="70%" align="center">

<!---                         -->
<!-- choix des langues en php -->
<!---                         -->
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
	
	<!--            -->
	<!--image animé -->
	<!--            -->
<?php 
 if((empty($_SESSION['lang'])&& empty($_GET['langue']))||$_SESSION['lang']=='fr'){

echo "
<DIV style=\" width:600px; height:350px; \">
<P id=cloud></P>
</DIV>

<SCRIPT type=text/javascript src=\"swfobject.js\"></SCRIPT>

<SCRIPT type=text/javascript>

swfobject.addDomLoadEvent(function() {
  swfobject.embedSWF(
					\"imgtagcloud.swf\", \"cloud\",
					\"600\", \"300\",
					\"9\", \"\",
					{
						cloud_data:\"cloud2.xml\",
						tcolor:\"0x999999\",
						tcolor2:\"0x666666\",
						hicolor:\"0x494949\",
						tspeed:\"150\",
						fontFace:\"Times New Roman\"
					},
					{wmode: \"transparent\", menu: \"false\", quality: \"best\"}
					);
});
</SCRIPT>
";
}
else {
echo "
<DIV style=\" width:600px; height:350px; \">
<P id=cloud></P>
</DIV>

<SCRIPT type=text/javascript src=\"swfobject.js\"></SCRIPT>

<SCRIPT type=text/javascript>

swfobject.addDomLoadEvent(function() {
  swfobject.embedSWF(
					\"imgtagcloud.swf\", \"cloud\",
					\"600\", \"300\",
					\"9\", \"\",
					{
						cloud_data:\"cloud1.xml\",
						tcolor:\"0x999999\",
						tcolor2:\"0x666666\",
						hicolor:\"0x494949\",
						tspeed:\"150\",
						fontFace:\"Times New Roman\"
					},
					{wmode: \"transparent\", menu: \"false\", quality: \"best\"}
					);
});
</SCRIPT>
";
}

?></div>

<!-- calendrier des evenements  --> 
 
 <div id="cal" class="right" > 

<?php

function getEventsDate($mois, $annee) {
		$result = array();
//connection à la base de données		
		//include("../calendrier/includes/sql_connect.php");
		$link = mysqli_connect( 'localhost', 'c4cicit','dyKaTm8H#','c4dev'); // site local'localhost', 'root','','cic-it2017' site distant: 'localhost', 'c1cicitdev','yuvREZ_7s3B','c1cicitdev'
		if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}
//récuperation des jour et mois (et annee) ayant un evenment.
$sql = 'SELECT DISTINCT jour_evenement,mois_evenement,annee_evenement, titre_evenement, contenu_evenement FROM calendrier c, evenements e WHERE mois_evenement='.$mois.' AND annee_evenement='.$annee.' AND c.id_evenement = e.id_evenement ORDER BY jour_evenement';	
		 $query=mysqli_query($link, $sql) or die("Une requête a échouée.");
		
		while ($row = mysqli_fetch_array($query, MYSQLI_BOTH)) {
			$result[] = $row[0];
			//printf ("%s\n,  %s\n",  $row[3], $row[4]);//on affiche pas le titre de l'evenement dans le calendrier (prend trop de place).		
		}
	
		mysqli_close($link);
		
		return $result;
	}
	
	function afficheEvent($i, $event) {
		$texte = ""; $suivant = false;
		
		foreach($event as $cle => $element) {
			if($suivant) {
				$texte .= $element."<br/>";
			}
			if($element == $i) {
				$suivant = true;
			} else {
				$suivant = false;
			}
		}
		
		//return $texte;
	}

	if(isset($_GET['m']) && isset($_GET['y']) && is_numeric($_GET['m']) && is_numeric($_GET['y'])) {
		$timestamp = mktime(0, 0, 0, $_GET['m'], 1, $_GET['y']);
		
		$event = getEventsDate($_GET['m'], $_GET['y']); // Récupère les jour où il y a des évènements
	}
	else { // Si on ne récupère rien dans l'url, on prends la date du jour
		$timestamp = mktime(0, 0, 0, date('m'), 1, date('Y'));
		
		$event = getEventsDate(date('m'), date('Y')); // Récupère les jour où il y a des évènements
		
	}
	
	
	// === Si le mois correspond au mois actuel et l'année aussi, on retient le jour actuel pour le griser plus tard (sinon le jour actuel ne se situe pas dans le mois)
	if(date('m', $timestamp) == date('m') && date('Y', $timestamp) == date('Y')) $coloreNum = date('d');

	$m = array("01" => "Janvier", "02" => "Février", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juillet", "08" => "Août", "09" => "Septembre", "10" => "Octobre",  "11" => "Novembre", "12" => "Décembre");
	$j = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
	
$me = array("01" => "January", "02" => "February", "03" => "March", "04" => "April", "05" => "May", "06" => "June", "07" => "July", "08" => "August", "09" => "September", "10" => "October",  "11" => "November", "12" => "Décember");
	$je = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');


	$numero_mois = date('m', $timestamp);
	$annee = date('Y', $timestamp);
	
	if($numero_mois == 12) {
		$annee_avant = $annee;
		$annee_apres = $annee + 1;
		$mois_avant = $numero_mois - 1;
		$mois_apres = 01;
	}
	elseif($numero_mois == 01) {
		$annee_avant = $annee - 1;
		$annee_apres = $annee;
		$mois_avant = 12;
		$mois_apres = $numero_mois + 1;
	}
	else {
		$annee_avant = $annee;
		$annee_apres = $annee;
		$mois_avant = $numero_mois - 1;
		$mois_apres = $numero_mois + 1;
	}
	
	// 0 => Dimanche, 1 => Lundi, 2 = > Mardi...
	$numero_jour1er = date('w', $timestamp);
	
	// Changement du numéro du jour car l'array commence à l'indice 0
	if ($numero_jour1er == 0) $numero_jour1er = 6; // Si c'est Dimanche, on le place en 6ème position (après samedi)
	else $numero_jour1er--; // Sinon on mets lundi à 0, Mardi à 1, Mercredi à 2...
	?>
    
	<table class="calendrier">
	
<?php  
if($_SESSION['lang']=='fr'){
 ?>

		<caption><?php echo TXT_TitreCal; ?><br><?php echo '<a href="?m='.$mois_avant.'&amp;y='.$annee_avant.'"><<</a>'; ?><?php echo ''.$m[$numero_mois].' '.$annee.' ' ;?><?php echo '<a href="?m='.$mois_apres.'&amp;y='.$annee_apres.'">>></a>' ;?></caption>
<?php	} 
else { ?>
<caption><?php echo TXT_TitreCal; ?><br><?php echo '<a href="?m='.$mois_avant.'&amp;y='.$annee_avant.'"><<</a>'; ?><?php echo ''.$me[$numero_mois].' '.$annee.' ' ;?><?php echo '<a href="?m='.$mois_apres.'&amp;y='.$annee_apres.'">>></a>' ;?></caption>
<?php }	?>
	<?php //}
	echo TXT_Jours; 
	
	
		// Ecriture de la 1ère ligne
		echo '<tr>';
			// Ecriture de colones vides tant que le mois ne démarre pas
			for($i = 0 ; $i < $numero_jour1er ; $i++) {		echo '<td></td>';	}
			for($i = 1 ; $i <= 7 - $numero_jour1er; $i++) {
				// Ce jour possède un événement
				if (in_array($i, $event)) {
					echo '<td class="jourEvenement';
					
					if(isset($coloreNum) && $coloreNum == $i) echo ' lienCalendrierJour';
					
					echo '"><a href="evenement.php?d='.$i.'/'.$numero_mois.'/'.$annee.'" class="info">'.$i.'<span>'.afficheEvent($i, $event).'</span></a></div></td>';
				} else {
					echo '<td ';
					
					if(isset($coloreNum) && $coloreNum == $i) echo 'class="lienCalendrierJour"';
					
					echo '>'.$i.'</td>';
				}

			}
		echo '</tr>';
		
		$nbLignes = ceil((date('t', $timestamp) - ($i-1))/ 7); // Calcul du nombre de lignes à afficher en fonction de la 1ère (surtout pour les mois a 31 jours)
		
		for($ligne = 0 ; $ligne < $nbLignes ; $ligne++) {
			echo '<tr>';
			for($colone = 0 ; $colone < 7 ; $colone++) {
				if($i <= date('t', $timestamp))	{
					// Ce jour possède un événement
					if (in_array($i, $event)) {
						echo '<td class="jourEvenement';
						
						if(isset($coloreNum) && $coloreNum == $i) echo ' lienCalendrierJour';
						
						echo '"><a href="calendrier/evenement.php?d='.$i.'/'.$numero_mois.'/'.$annee.'" class="info">'.$i.'<span>'.afficheEvent($i, $event).'</span></a></td>';
					} else {
						echo '<td ';
						
						if(isset($coloreNum) && $coloreNum == $i) echo 'class="lienCalendrierJour"';
						
						echo '>'.$i.'</td>';
					}
				} else {
					echo '<td></td>';
				}
				$i = $i +1;
			}
			echo '</tr>';
		}
		
	?>
</table>
</div> 
<!-- fin du calendrier des evenements  -->  

</div>

 <!-- menu et choix des langues -->

<!--                                                                                            -->
<!-- formulaire de choix des langue, avec bouton radio remplacé par une image et auto submit...  -->
<!--                                                                                            -->
<div  style="display:flex;  flex-direction:row; "> 
<div id="contenu" width="100%" style="display:inline;">

<!--                               -->
<!-- choix des langues en php  --> <!--align:inline-block;-->  
<div id="CdL" style="float:right; align:inline; ">
<?php 

		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			echo "		
			<form  action=\"\" methode=\"get\" name=\"automatiquement\" id=\"choixlangue\" style=\"display:flex; flex-direction:row;\" >
<a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\" name=\"langue\" id=\"choixlangue1\"  onclick=\"this.form.submit();\" value=\"fr\"><label><img src=\"image/fr.png\" width=\"130%\"></a><span><img src=\"image/transparent.png\" width=\"10px\" ></span>
<a href=\"#\" style=\"display:flex; flex-direction:row;\"><input type=\"radio\"  name=\"langue\" id=\"choixlangue2\"  onclick=\"this.form.submit();\" value=\"en\"><label><img src=\"image/en.png\" width=\"130%\"></a>		
			"; 	
		}
		
		else {			
		echo "
			<form  action=\"\" methode=\"get\" name=\"automatiquement\" id=\"choixlangue\" style=\"display:flex; flex-direction:row;\" >
<a href=\"\" ><input type=\"radio\" hidden name=\"langue\" id=\"choixlangue1\" onclick=\"this.form.submit();\" value=\"fr\"><label for=\"choixlangue1\"><img src=\"image/fr.png\" width=\"150%\"></a><span><img src=\"image/transparent.png\" width=\"20px\" ></span>
<a href=\"\"><input type=\"radio\" hidden  name=\"langue\" id=\"choixlangue2\" onclick=\"this.form.submit();\" value=\"en\"><label for=\"choixlangue2\"><img src=\"image/en.png\" width=\"150%\"></a>			
			";
		}
		
		?>

<?php
//echo "choix langue?:".$_GET['langue']."<br>";
 if($_SESSION['lang'] && empty($_GET['langue'])){
 $_SESSION['lang'];
 //echo "langue: lang".$_SESSION['lang']; //jusqu'ici ça marche!
 }
 
else if($_GET['langue']=='fr'){
 include('lang/fr-lang.php');
$_SESSION['lang']='fr';
//echo "l.l.session?: ".$_SESSION['lang'];
}
else if($_GET['langue']=='en'){
//echo "<br>langue : ".$_GET['langue'];
 $_SESSION['lang']='en';
// echo "choix de langue!!!!".$_SESSION['lang'];
// echo "<br>langues2 : ";
 include('lang/en-lang.php');
}
//echo "langue lang fin:".$_SESSION['lang'];

?>
</form> 
</div>
<!--                               -->
<!-- choix des langues en php  fin -->
<!--                                           -->	
<!-- menu HDR(Horizontale Deroulant Responsif) -->      

<nav style="display:inline;">
<ul id="menu" style="display:inline;"><?php echo TXT_Menu; ?>
</ul>
</nav>




</div></div>

<div  style="display:flex; flex-direction:row; width:100%"> 
<!-- a gauche -->
<!--  logos...   -->
<div id="contenu" width="100%" height="auto" style="display:inline;" >





<div id="footbis"  class="arrondie" >
<!-- a droite -->   <ul style="list-style-type: none; block-align:center;"> <li style="color:white;">.<br>.</li>                      
<li><a href="https://www.chu-bordeaux.fr/" ><img src="../image/logos/Chubordeaux.jpg"   style="width:80%;" class="displayed"></a></li><br> 
<li style="color:white;">.</li>
<li height="20%"><a href="http://www.aquitaine-poitou-charentes.inserm.fr/"><img src="../image/logos/logo-generique-SD.gif"  width="100%" class="displayed"></a></li><br>
<li style="color:white;">.</li>
<li height="20%"><a href="http//www.u-bordeaux.fr/"><img src="../image/logos/Universite-BordeauxRVB-01.jpg" width="100%" class="displayed"></a></li><br>
<li style="color:white;">.</li>  
<li><a href="http://www.bergonie.org/"><img src="../image/logos/Bergonie.jpg"  width="80%" class="displayed"></a></li><br>
<li style="color:white;">.</li>  
<li style="color:white;"><a href="http://www.ptib.u-bordeaux2.fr/index.php?p=accueil"><img src="../image/logos/logo_PTIB.jpg"  width="100%" class="displayed"></a></li><br>
<li style="color:white;">.</li>  
<li><a href="http://www.2acbi-asso.fr/"><img src="../image/logos/logo-2acbi.jpg"  width="60%" class="displayed" ></a></li></ul>
</div>





<div style="display:flex; flex-direction:column; height:auto;" > 
<!-- a gauche -->

 <div id="PTIB" style="width:100%; height:50%;" class="arrondie">
 <?php
		if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false) || (strpos($_SERVER['HTTP_USER_AGENT'], 'windows phone') !== false)) {
			
			echo "<img src=\"../image/PTIBmontagesmall3.jpg\" width=\"80%\" style=\"margin-left:10%; margin-right:10%; \" height=\"auto\" >
";
		}
		else {
			
		echo "<img src=\"../image/PTIBmontagesmall3.jpg\" style=\"margin-left:10%; margin-right:10%; \"  width=\"80%\" >
			";
		}
		?>
 </div>
 <div  id="section-article">
<h1 align="center" ><?php  echo TXT_Titre; ?></h1>
<h2 align="center" ><?php echo TXT_SSTitre; ?></h2>
<!--  titres de la page....  -->
<?php echo TXT_Article; ?>		
<br><br>
</div>
</div>

</div></div>




<div id="test" class="arrondie">
<?php echo TXT_Pied; ?> 
</div>


</div>
</body>
</html>
