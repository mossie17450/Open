<?php

if(isset($_POST['idContact'])){ 
//echo "idcontact :".$_POST['idContact'];
$i=$_POST['idContact'];
$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');

 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}
//$req="SELECT * FROM idcvjoint ";
// voire testePDF...
$req="SELECT * FROM cvjoint WHERE idcvjoint=".$i." ";
$contactes = mysqli_query($link, $req);
$row= $contactes->fetch_assoc();

        $id = $row["idcvjoint"];
		//echo $id."<br>";
        $nom= $row["nom"];
		//echo $nom."<br>";
        $prenom = $row["prenom"];
		$email=$row['email'];
		$message=$row['message'];
		$date=$row['date'];
		//echo $date."<br>";
		$fichiercv=$row['NomfichierCV'];
		$fichierMotivation=$row['NomfichierLettreM'];
		
}

require('fpdf.php');

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
    $this->Cell(30,10,'contact CV en PDF',0,0,'C');
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
        $pdf->Ln();
        $pdf->Ln();
		
		$pdf->Ln();
        $pdf->SetFont('Arial','B',10);
        $pdf->Write(5,'son nom :');
		$pdf->Write(5,$nom);
		$pdf->Ln();
        $pdf->Ln();
        // description
        $pdf->SetFont('Arial','',10);
         $pdf->Write(5,'son prenom :');
		$pdf->Write(5,$prenom);
        $pdf->Ln();
        $pdf->Ln();
		$pdf->SetFont('Arial','',10);
        $pdf->Write(5,'son mail : ');
		$pdf->Write(5,$email);
        $pdf->Ln();
        $pdf->Ln();
		$pdf->SetFont('Arial','',10);
         $pdf->Write(5,'son fichier cv :');
		 $pdf->Ln();
		$pdf->Write(5,$fichiercv);
        $pdf->Ln();
        $pdf->Ln();
		$pdf->SetFont('Arial','',10);
         $pdf->Write(5,'son fichier lettre de motivation ou autres :');
		 $pdf->Ln();
		$pdf->Write(5,$fichierMotivation);
		$pdf->Ln();
        $pdf->Ln();
		$pdf->SetFont('Arial','',10);
         $pdf->Write(5,'son message :');
		 $pdf->Ln();
		$pdf->Write(5,$message);
        $pdf->Ln();
        $pdf->Ln();
		$pdf->Output('teste.pdf', 'I');
// sortie du fichier

?>