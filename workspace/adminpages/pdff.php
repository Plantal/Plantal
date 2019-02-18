<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();
if(!isset($_SESSION['ativa'])){
     header('Location: login.php');
   
   }
$db = new PDO('mysql:host=localhost;dbname=plantal','root','');
     require "fpdf.php";


//$planta = ($_POST["nomeCientifico"]);    
//var_dump($_GET);
$planta = ($_GET["nomeCientifico"]);    
             
          
class myPDFF extends FPDF{
               function headerTable(){
                    $this->SetFont('Times','B',12);

                    $this->Cell(70,10,'Nome',1,0,'C');
                    $this->Cell(80,10,'QrCode',1,0,'C');
                    $this->Ln();
               }

               function viewTable($db, $planta){

                    $this->SetFont('Times','B',12);
                    
                    $stnt = $db->query("select * from planta where nomeCientifico = '".$planta."' ");
                    while($data = $stnt->fetch(PDO::FETCH_OBJ)){

                    	//echo($planta);
                    	//echo $data->qrcode;

                         $this->Cell(70,65,$data->nomeCientifico,1,0,'C');
             
                         $x = $this->GetX(); 
                         $y = $this->GetY();

                         $this->Cell(80,65,$this->Image($data->qrcode, $x+7, $y, 65),1,0,'C');

                         $this->Ln();
                    }
               }
          }
     
     


$pdf = new myPDFF();
$pdf-> AliasNbPages();
$pdf->AddPage('P','A4',0);
$pdf->headerTable();

$pdf->viewTable($db, $planta);
$pdf->Output();
 

?>


