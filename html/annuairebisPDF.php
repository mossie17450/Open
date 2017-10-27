<?php

//$link = mysqli_connect('localhost', 'c4cicit','dyKaTm8H#','c4dev');
$link=mysqli_connect('localhost','root','','annuaire');
 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}

$req="SELECT * FROM personnel ";
$personne = mysqli_query($link, $req);
$row= $personne->fetch_assoc();

        $id = $row["idpersonnel"];
	//	echo $id."<br>";
        $nom= $row["nomPerso"];
	//	echo $nom."<br>";
        $prenom = $row["prenomPerso"];
	//	echo $prenom."<br>";
		$email=$row['mailPerso'];
	
	//	echo $date."<br>";
		


//require('fpdf.php');
require('PDF_MC_Table.php');
// classe étendue pour créer en-tête et pied de page
class annuairePDF extends PDF_MC_Table
{
protected $B = 0;
protected $I = 0;
protected $U = 0;
protected $HREF = '';

function WriteHTML($html)
{
    // HTML parser
    $html = str_replace("\n",' ',$html);
    $a = preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
    foreach($a as $i=>$e)
    {
        if($i%2==0)
        {
            // Text
            if($this->HREF)
                $this->PutLink($this->HREF,$e);
            else
                $this->Write(5,$e);
        }
        else
        {
            // Tag
            if($e[0]=='/')
                $this->CloseTag(strtoupper(substr($e,1)));
            else
            {
                // Extract attributes
                $a2 = explode(' ',$e);
                $tag = strtoupper(array_shift($a2));
                $attr = array();
                foreach($a2 as $v)
                {
                    if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
                        $attr[strtoupper($a3[1])] = $a3[2];
                }
                $this->OpenTag($tag,$attr);
            }
        }
    }
}

function OpenTag($tag, $attr)
{
    // Opening tag
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,true);
    if($tag=='A')
        $this->HREF = $attr['HREF'];
    if($tag=='BR')
        $this->Ln(5);
}

function CloseTag($tag)
{
    // Closing tag
    if($tag=='B' || $tag=='I' || $tag=='U')
        $this->SetStyle($tag,false);
    if($tag=='A')
        $this->HREF = '';
}

function SetStyle($tag, $enable)
{
    // Modify style and select corresponding font
    $this->$tag += ($enable ? 1 : -1);
    $style = '';
    foreach(array('B', 'I', 'U') as $s)
    {
        if($this->$s>0)
            $style .= $s;
    }
    $this->SetFont('',$style);
}

function PutLink($URL, $txt)
{
    // Put a hyperlink
    $this->SetTextColor(0,0,255);
    $this->SetStyle('U',true);
    $this->Write(5,$txt,$URL);
    $this->SetStyle('U',false);
    $this->SetTextColor(0);
}

// en-tête
function Header()
{
    //Police Arial gras 15
    $this->SetFont('Arial','B',14);
    //Décalage à droite
    $this->Cell(80);
    //Titre
    $this->Cell(30,10,'Annuaire du personnel du CIC-IT en PDF',0,0,'C');
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

$pdf=new annuairePDF();
$pdf->SetAuthor('Cécile Raymond');
$pdf->SetTitle('annuaire du personnel du CIC-IT');
$pdf->SetSubject('création de fichier PDF');
$pdf->SetCreator('fpdf_cic-it_bordeaux');
$pdf->AliasNBPages();
$pdf->AddPage();


        // titre en gras
		
		
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
		
$pdf->SetWidths(array(40,40,62,35));
$pdf->Row(array( $nom.' '.$prenom." \n\n\n\n" ,"activite"." \n\n\n\n", $email." \n\n\n\n" ,"truc"." \n\n\n\n"));

		
		$pdf->Output('personnel.pdf', 'I');
// sortie du fichier

?>