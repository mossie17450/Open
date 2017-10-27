<? 
session_start();
$nbre_chiffre=6;
header("Content-type: image/png");
$_img= iamgecreatefrompng('fond_verif_img.png');
$arrier_plan=imagecolorallocate($_img,0,0,0);
$avant_plan= imagecolorallocate($_img,255,255,255);

$i=0;
while($i < $nbre_chiffre)
{
	$chiffre=mt_rand(0,9);
	$chiffes[$i]=$chiffre;
	$i++;
}
$nombre= null;
foreach($chiffres as $caractere)
{
	$nombre .= $caractere;
}

$_SESSION['aleat_nbr']=$nombre;
unset($chiffre);
unset($i);
unset($caractere);
unset($chiffres);

imagestring($_img, 5,20,8,$nombre, $avant_plan);
imagepng($_img);

?>