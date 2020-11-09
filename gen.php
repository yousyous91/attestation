<?php
$birth_modify = preg_replace('#([[:digit:]]{4})-([[:digit:]]{2})-([[:digit:]]{2})#', "$3/$2/$1", htmlspecialchars($_POST['birthday']));
$out_modify = preg_replace('#([[:digit:]]{4})-([[:digit:]]{2})-([[:digit:]]{2})#', "$3/$2/$1", htmlspecialchars($_POST['datesortie']));
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;
//use setasign\Fpdi\Tfpdf\FpdfTpl;
require_once("fonts/fpdf.php");
//require_once("fonts/src/Tfpdf/fpdi.php");
ob_clean();
//require_once('fonts/src/Tfpdf/Fpdi.php');
require_once('fonts/src/autoload.php');
require_once('fonts/phpqrcode/qrlib.php');
$pdf = new Fpdi();
//$pdf->AddFont("Arial","","Arial.ttf",true);
$pdf->AddPage();
$pdf->setSourceFile("certificate.pdf");
$tplId = $pdf->importPage(1);
$pdf->useTemplate($tplId);
$pdf->SetFont("Arial","",12);
$pdf->Text(45,52,htmlspecialchars($_POST['firstname']).' '.htmlspecialchars($_POST['lastname']));
$pdf->Text(45,60,$birth_modify);
$pdf->Text(110,60,htmlspecialchars($_POST['placeofbirth']));
$pdf->Text(50,68,htmlspecialchars($_POST['address']).' '.htmlspecialchars($_POST['zipcode']).' '.htmlspecialchars($_POST['city']));
$pdf->Text(42,236,htmlspecialchars($_POST['city']));
$pdf->Text(37,244,$out_modify);
$pdf->Text(95,244,htmlspecialchars($_POST['heuresortie']));
$pdf->SetFont("Arial","",16);
switch (htmlspecialchars($_POST['field-reason']))
{
    case "travail":
        $pdf->Text(27,94,"X");
    break;
    case "achats":
        $pdf->Text(27,110,"X");
    break;
    case "sante":
        $pdf->Text(27,129,"X");
    break;
    case "famille":
        $pdf->Text(27,144,"X");
    break;
    case "handicap":
        $pdf->Text(27,158,"X");
    break;
    case "sport_animaux":
        $pdf->Text(27,172,"X");
    break;
    case "convocation":
        $pdf->Text(27,194,"X");
    break;
    case "missions":
        $pdf->Text(27,208,"X");
    break;
    case "enfants":
        $pdf->Text(27,224,"X");
    break;
    default:
        break;
}
$brr='Cree le: '.$out_modify.' a '.htmlspecialchars($_POST['heuresortie']).';'."\n\r".'Nom: '.htmlspecialchars($_POST['lastname']).';'."\n\r".'Prenom: '.htmlspecialchars($_POST['firstname']).';'."\n\r".'Naissance: '.$birth_modify.' a '.htmlspecialchars($_POST['placeofbirth']).';'."\n\r".'Adresse: '.htmlspecialchars($_POST['address']).' '.htmlspecialchars($_POST['zipcode']).' '.htmlspecialchars($_POST['city']).';'."\n\r".'Sortie: '.$out_modify.' a '.htmlspecialchars($_POST['heuresortie']).';'."\n\r".'Motifs: '.htmlspecialchars($_POST['field-reason']).';';
//$brr=preg_replace('/\*/', ' ', $brr);
//$brr=preg_replace('/\t/', '', $brr);
QRcode::png($brr,'qrcode.png');
$pdf->Image('qrcode.png',150,225,38,38);
$pdf->AddPage();
$pdf->Image('qrcode.png',10,10,100,100);
QRcode::png("Eh non petit cachotier, tu n'aura pas accès aux données des gens ;)", 'qrcode.png');
$pdf->Output('I', 'attestation-'.htmlspecialchars($_POST['firstname']).'-'.$out_modify.'-'.htmlspecialchars($_POST['heuresortie']).'.pdf');
ob_end_flush();?>