<?php

require('mc_table.php');


class annuairePDF extends PDF_MC_Table
{
protected $B = 0;
protected $I = 0;
protected $U = 0;
protected $HREF = '';

//fonctions permettant d'inserer des liens
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
    $this->SetFont('Arial','B',16);
    //Décalage à droite
    $this->Cell(80);
    //Titre
    $this->Cell(10,0,'Annuaire du personnel du CIC-IT.',0,0,'C');
    //Saut de ligne
    $this->Ln(10);
}

// pied de page
function Footer()
{
    //Positionnement à 0.5 cm du bas
    $this->SetY(-10);
    //Police Arial italique 6
    $this->SetFont('Arial','I',8);
    //Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

}
// création du pdf
$pdf=new annuairePDF();

$pdf->AddPage();//ajout d'une page
$pdf->SetFont('Arial','B',10); //font
$pdf->Ln(0);//saut de 15 ligne(?)
//faire un tableau d'une ligne et 4 colonnes identique au suivant...en tete du tablau du personnel du CIC-IT
$pdf->SetWidths(array(30,40,40,40,40));
$pdf->WriteHTML($pdf->Row(array( "photo","personne" ,"activite","adresse mail","page activite")));//je remplit l'entete du tableau
//connexion à la BD 'annuaire':
/*
$link=mysqli_connect('localhost','root','','annuaire');
 if (!$link) {
die('Impossible de se connecter : ' . mysql_error());
}
//requete sql...
$req="SELECT * FROM personnel INNER JOIN activite ON personnel.idpersonnel = activite.personnel_idpersonnel ";
$personne = mysqli_query($link, $req);       
	foreach($personne as $row){
        $id = $row["idpersonnel"];
	//	echo $id."<br>";
        $nom= $row["nomPerso"];
	//	echo $nom."<br>";
        $prenom = $row["prenomPerso"];
	//	echo $prenom."<br>";
		$photo=$row["photoPerso"];
		$email=$row['mailPerso'];
	//activite? 
	$activite=$row['nomActivite'];
	//$employeur=$row['empoyeur'];	
	$pageA=$row['pageWebActivite'];	//ici j'ai un lien...
	$idA=$row['idActivite'];
	
    $pdf->SetFont('Arial','B',8);
	 
		if($idA<12)$h=20*$idA+5;
		
		//taille des photos...


 //$pdf->WriteHTML('<a href='.$pageA.'>'.$activite.'</a>');  //les liens en dynamiques marche, pas à la bonne place...
  

  //$pdf->Image('http://localhost/webjuillet2017/image/personnels/CecileP.png'.coucou,5,5,20,30); //marche
 //$pdf->Image($photo,140,5,20,30);  //marche aussi
 // $pdf->Image('Will_code_HTML_for_food.jpg',10,10,50,70);
 /* 
 $pdf->Image('image', a gauche, en haut, hauteur, largeur) 
*/

//Table de 20 lignes et 5 colonnes
//$pdf->SetWidths(array(30,40,40,40,40));
//$pdf->Row(array($pdf->Image($photo,15,$h,20,20,'',$pageA),$nom.' '.$prenom ,$activite." \n\n\n\n",$email ,$pageA));

//	}
//	mysqli_close($link);

$pdf->Output('personnel.pdf', 'I');
// sortie du fichier
?>