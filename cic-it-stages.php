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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<!--<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>-->
   
    <script src="https://raw.github.com/botmonster/jquery-bootpag/master/lib/jquery.bootpag.min.js"></script>
  
<script type="text/javascript" src="../js/jquery.bootpag.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://raw.github.com/botmonster/jquery-bootpag/master/lib/jquery.bootpag.min.js"></script>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">  
	

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
<div id="body" class="arrondie">

<!--<div id="header">
<img src="../image/header.jpg" width="100%" height="150px" class="arrondie" />
</div><br>-->
<div id="header">
<img src="../image/headerBon.png" width="100%" height="240px" class="arrondie" />
</div>
<!-- choix des langues -->
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

 <div  style="display:flex; flex-direction:row;"> 
 <div id="contenu" align="inline-block" width="100%">
 
<div id="CdL" style="float: right; align:inline-block;"> 

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
<div  style="display:flex; flex-direction:row; width:100%"> 
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

<div  style="display:flex; flex-direction:column; height:auto;"><br>
<br><br><br><br><br>
<div style="text-align:center"><?php echo TEXT_TitreStage; ?></div>                              
   
      <!--paging_filter <p><? //TXT_ArticleStage; ?></p>-->
	  <br><br><br>
	  <?php
	  
//$link =mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev' );	//connexion serveur distant
$link = mysqli_connect( 'localhost', 'root','','cic-it2017');		//connection en local....					
	 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}

$req = "SELECT * FROM stage";
		$poste = mysqli_query($link, $req);
		
		if(mysqli_num_rows($poste))
		$nbStages = true;
		else $nbStages = false;
		
		
		mysqli_close($link);

	if($nbStages) {
		
		while($stages = mysqli_fetch_array($poste,MYSQLI_BOTH)) {
			echo '
			<table class="listeEvent">
				<tr><td>'.$stages['titreStage'].'</td></tr>
				<tr><td>'.$stages['descriptionStage'].'</td></tr>
				<tr><td>'.TXT_TPDF.'</td></tr>
				<tr><td><a href="../admin/www/'.$stages['NomStagePDF'].'">'.$stages['NomStagePDF'].'</a></td></tr>
				<tr><td>'.TXT_PostulerS.'</td></tr>
				<tr><td><a href="cic-it-spontanee.php">'.TXT_IciPostulerS.'</a></td></tr>	
				
					
			</table>
			<br/><br/>
			';
		}
		
	} 
	
		else {
	
		echo TXT_ArticleStage;
		}
	
	
	
?>
<br><br><br>	  
	  
<!-- une fenetre modale!  -->
<!--<button class=\"btn btn-md btn-info \" data-toggle=\"modal\" data-target=\"#myModal1\" style=\"position:center;color:#9999ff; background-color:transparent; border:none; \" >-->

<button class="btn btn-info  btn-block" data-toggle="modal" data-target="#StagesModal" style="position:relative; width:80%%; height:2%; left:2%; align:justify; color:#9999ff; background-color:transparent; border:none;" >
	<h3><?php echo TXT_TMS; ?></h3>
	</button>
	<!-- Modal -->
	<div class="modal fade" id="StagesModal" tabindex="-1" role="dialog" aria-labelledby="StagesModalLabel" aria-hidden="true" style="width:90%; padding:5%; " >
	<div class="modal-dialog" style="width:100%;">
	<div class="modal-content" >
	<div class="modal-header">
	<button type="button-lg" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h2 class="modal-title" id="StagesModalLabel"><?php echo TXT_STMS ; ?></h2>
	</div>
	<div class="modal-body">
	<h3><?php echo TXT_ATMS ; ?></h3>
	
<CENTER><table id="tab">
	<?php

//$link =mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev' );	//connexion serveur distant
$link = mysqli_connect( 'localhost', 'root','','cic-it2017');		//connection en local....
 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}	

$sql = "SELECT * FROM stagiaires";
$req= mysqli_query($link,$sql) or die ("Erreur SQL !<br>".$sql."<br>".mysqli_error($link)); 

while($row= mysqli_fetch_array($req, MYSQLI_BOTH)){  

echo "<TR><TD width=\"10%\">".$row[1]."</TD><TD width=\"10%\">".$row[2]."</TD><TD width=\"10%\">".$row[3]."</TD><TD width=\"40%\">".$row[4]."</TD><TD width=\"10%\">".$row[5]."</TD></TR>";

}
mysqli_close($link);

?>

	</table></CENTER>         
	</div>
	</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<br>

</div>

</div></div>

<!-- pied de page -->

<div id="test" class="arrondie">
<?php echo TXT_Piedhtml ; ?>
</div>
<!-- fin ajout -->
</div>
</body>
</html>