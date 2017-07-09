
<?php
require('fpdf.php');
if(isset($_POST['idListeContactes'])){ 
echo "idcontact :".$_POST['idListeContactes'];
$i=$_POST['idListeContactes'];
//echo $i."!!!";
$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');
//echo"coucou1";
 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}

}

// voire testePDF...
$req="SELECT * FROM contact ";
$req2="SELECT max(idContact) FROM contact ";
$contactes = mysqli_query($link, $req);
$nbreContactes = mysqli_query($link, $req2);

while($row = mysqli_fetch_array($contactes,MYSQLI_BOTH)) {
		
			

       // $id = $row["idContact"];
		echo $id."<br>";
        $nom= $row["Nom"];
		echo $nom."<br>";
        $prenom = $row["Prenom"];
		$email=$row['email'];
		$message=$row['message'];
		$date=$row['date'];
		echo $date."<br>";
		
}



/*
// classe étendue pour créer en-tête et pied de page
class PDF extends FPDF
{
// en-tête
function Header()
{
    //Police Arial gras 15
    $this->SetFont('Arial','B',14);
    //Décalage à droite
    $this->Cell(80);
    //Titre
    $this->Cell(30,10,'contact en PDF',0,0,'C');
	//$this->Cell(30,10,'Contact PDF',0,0,'C');
    //Saut de ligne
    $this->Ln(20);
}

// pied de page
function Footer()
{
    //Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    //Police Arial italique 8
    $this->SetFont('Arial','I',8);
    //Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
// création du pdf

$pdf=new PDF();
$pdf->SetAuthor('moi');
$pdf->SetTitle('contact CV');
$pdf->SetSubject('création de fichier PDF');
$pdf->SetCreator('fpdf_cic-it_bordeaux');
$pdf->AliasNBPages();
$pdf->AddPage();


        // titre en gras
		$pdf->SetFont('Arial','B',10);
        $pdf->Write(5,'Contact du ');
		$pdf->SetFont('Arial','',10);  
		$pdf->Write(5,$date);
      
        $pdf->SetFont('Arial','B',10);
        $pdf->Write(5,'son nom :');
		//$pdf->Write(5,$nom);
		
        // description
        $pdf->SetFont('Arial','',10);
         $pdf->Write(5,'son prenom :');
		//$pdf->Write(5,$prenom);
      
		$pdf->SetFont('Arial','',10);
        $pdf->Write(5,'son mail : ');
		//$pdf->Write(5,$email);
      
	  
	  
        $pdf->Ln();
        $pdf->Ln();
		
		
		$pdf->Output('Contact.pdf', 'I');
// sortie du fichier
*/
?>