<?php
require('pdf_mc_table.php');

function GenererMot()
{
    //Renvoie un mot aléatoire
    $nb=rand(3,10);
    $mot='';
    for($i=1;$i<=$nb;$i++)
        $mot.=chr(rand(ord('a'),ord('z')));
    return $mot;
}

function GenererPhrase()
{
    //Renvoie une phrase aléatoire
    $nb=rand(1,10);
    $p='';
    for($i=1;$i<=$nb;$i++)
        $p.=GenererMot().' ';
    return substr($p,0,-1);
}

$pdf=new PDF_MC_Table();
$pdf->AddPage();
$pdf->SetFont('Arial','',14);
//Table de 20 lignes et 4 colonnes
$pdf->SetWidths(array(30,50,30,40));
 $pdf->Image('PTIBnew.jpg',10,10,50,70); //marche
//$truc='../image/personnels/SamPP.jpg';
 $pdf->Image('SamPP.jpg',10,10,50,70);
 //connexion bd
 $link=mysqli_connect('localhost','root','','annuaire');
 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}
//requete sql...
$req="SELECT * FROM personnel INNER JOIN activite ON personnel.idpersonnel = activite.personnel_idpersonnel ";
$personne = mysqli_query($link, $req);       
	foreach($personne as $row){
 $photo=$row["photoPerso"]; // n'arrive pas à ouvrir les image sur la BD annuaire...
 $pdf->Image($photo,140,5,20,30);
 
 }
	mysqli_close($link);
srand(microtime()*1000000);
for($i=0;$i<20;$i++)
    $pdf->Row(array(GenererPhrase(),GenererPhrase(),GenererPhrase(),GenererPhrase()));
$pdf->Output();
?>