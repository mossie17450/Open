<?php
session_start();

   if (isset($_POST['auteurs'])) {  //a modifié
        echo '<br>Entrez les auteurs :';
		
		//la recupe des nomsA et prenom et rang (marche)
		//echo $_POST['nbreAuteurs'];
		for($i=1; $i< $_POST['nbreAuteurs']+1 ; $i++){
		//echo $_POST['nomA'];
		$nom1= addslashes($_POST['nomA'.$i]);
		$nom=utf8_decode($nom1);
		$prenom1=addslashes($_POST['prenomA'.$i]);
		$prenom=utf8_decode($prenom1);
		//echo "nom auteur :".$nom."<br>";
		//echo "prenom :".$prenom."<br>";	
		//echo "rang :".$i."<br>";
		$idPubli= $_POST['idPubli'];
		$idJou= $_POST['idJou'];
		//echo "id publication".$idPubli."<br>";
		//connection a la base de données...a modifier en cic-itbd!
		$link = mysqli_connect( 'localhost', 'c4cicit','dyKaTm8H#','c4dev');
		if (!$link) {
		die('Impossible de se connecter : ' . mysql_error());
		}
		// faire ici les insertions dans 1)table auteur si il n'y est pas (verifier)
		//verifier la présence ou non de l'auteur dans la table:
		$sql5="SELECT idAuteur,nom, prenom FROM auteur WHERE nom='".$nom."' AND prenom='".$prenom."' ";
		$req5 = mysqli_query($link,$sql5) or die ("Erreur SQL 5!<br>".$sql5."<br>".mysqli_error($link));
		$row5 = $req5->fetch_assoc();
		//insertion si l'auteur dans la table si il n'y est pas.
		if($row5['idAuteur']==0){
		//echo "oui pour l'insertion....<br>";
		$sql6="INSERT INTO auteur VALUES(0,'".$nom."','".$prenom."')";
		$req6 = mysqli_query($link,$sql6) or die ("Erreur SQL 6!<br>".$sql6."<br>".mysqli_error($link));
		}
		else{
		//echo "auteur present dans la table!"; pour le dev
		}
		//2) recupe de l'id auteur (verifier)
		$sql7="SELECT idAuteur, nom, prenom FROM auteur WHERE nom='".$nom."' AND prenom='".$prenom."' ";
		$req7 = mysqli_query($link,$sql7) or die ("Erreur SQL 7!<br>".$sql7."<br>".mysqli_error($link));
		$row7 = $req7->fetch_assoc();

		//echo " idAuteur :".$row7['idAuteur'].", nom:".$row7['nom'].", "; //pour le dev
		$idAuteur=$row7['idAuteur'];
		//echo " de rang :".$i."<br>"; //pour le dev
		
//.......................................................................//
//insertion  des auteurs dans la table communique
//.......................................................................//
		//echo "pour l'insertion dans la table communique, idPubli :".$idPubli;
		//echo "pour l'insertion dans la table communique, idJou :".$idJou; //pour le developpement...
	//3) insertion dans la table communique (verifier).
		$sql8="INSERT INTO communique (idAuteur, idPublication, rang) VALUES('".$idAuteur."','".$idPubli."','".$i."')";
		$req8 = mysqli_query($link,$sql8) or die ("Erreur SQL 8!<br>".$sql8."<br>".mysqli_error($link));		
		}
		}
		


//.......................................................................//
//insertion des auteurs dans la table auteur si il n'existe pas
//.......................................................................//
/*entrez le nombre d'auteurs pour la boucle for...*/
//echo"coucou!<br>";
//echo $_SESSION['nbreAuteurs'];
//echo $_POST['nbreAuteurs'];

if (!empty($_POST['submitA'])) {
   //echo "nombre d'auteur :".$_POST['nbreAuteurs'];
  // echo "<br>idPubli : ".$_POST['idPubli'];
   // echo "<br>idJou : ".$_POST['idJou'];
} 
 
  else "combien d'auteur ?";
 ?>  
 

 
<form action="#" method="post" name="listeA">
<?php

if (!empty($_POST['idPubli'])&& !empty($_POST['nbreAuteurs']) && !empty($_POST['idJou'])){
$nbreAuteurs=$_POST['nbreAuteurs'];
echo "nombre d'auteurs :".$nbreAuteurs."<br>";
$idPubli=$_POST['idPubli'];
//echo "<br>idPubli:".$idPubli;
$idJou=$_POST['idJou'];
//echo "<br>idJou:".$idJou;
}

//boucle d'entre des auteurs:
 for($i=1; $i<$nbreAuteurs+1 ; $i++){  
echo "<br>auteur ".$i."<br>";
?>
<label>nom de l'auteur :</label>
<input type="text" name=<?php echo "nomA".$i; ?> /><br>
<label>prenom de l'auteur :</label>
<input type="text" name=<?php echo "prenomA".$i; ?> /><br>
<br/>
<?php
 }
 ?>
<input type="hidden" name="nbreAuteurs" value="<?php echo $nbreAuteurs ;?>" >
<input type="hidden" name="idPubli" value="<?php echo $idPubli ;?>" >
<input type="hidden" name="idJou" value="<?php echo $idJou ;?>" >
<input type="submit" name="auteurs" value="soumettre"/>
</form>
<?php
echo "<br>
 <ul><li><a href=\"../admin/ajoutevent.php\">Ajouter un événement au calendrier des évenements</a></li>
		<li><a href=\"../admin/supprevent.php\">Supprimer un événement</a></li>
		<li><a href=\"../admin/publicationsMaJ.php\">Ajout d'une publication</a></li>
        <li><a href=\"../admin/ajoutPost.php\">affichage de postes proposés</a></li>
		<li><a href=\"../admin/supprimeposte.php\">suppression de l'affichage de postes proposés</a></li>
		<li><a href=\"../admin/ajoutStage.php\">affichage de stage proposés</a></li>
		<li><a href=\"../admin/supprimestage.php\">suppression de l'affichage de stages</a></li>
		<li><a href=\"../admin/listeCV.php\">gestion des candidatures spontanées envoyé au site</a></li>
		<li><a href=\"../admin/listeContacts.php\">gestion des contactes (formulaire contacte) envoyé au site</a></li>
		<li><a href=\"../index.php\">Retourd à l'acceuil</a></li>	
		</ul>";
    ?>
    <p class="centre"><br/><a href="../index.php">Revenir à l'accueil</a></p>
</body>
</html>



		