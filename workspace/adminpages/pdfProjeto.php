<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();
if(!isset($_SESSION['ativa'])){
     header('Location: login.php');
   
   }
$db = new PDO('mysql:host=localhost;dbname=plantal','root','root');
     require "fpdf.php";


//$planta = ($_POST["nomeCientifico"]);    
//var_dump($_GET);
$projeto = ($_GET["idProjeto"]);    
             
          
class myPDFF extends FPDF{
               function headerTable(){
                    $this->SetFont('Times','B',12);

                    $this->Cell(70,10,'Nome',1,0,'C');
                    $this->Cell(80,10,'QrCode',1,0,'C');
                    $this->Ln();
               }

               function viewTable($db, $projeto){

                    $this->SetFont('Times','B',12);
                    
                    $stnt = $db->query("SELECT MIN(idPlanta) AS id, nomeCientifico, qrcode FROM projeto_plantal, planta WHERE projetoId = '".$projeto."'  GROUP BY nomeCientifico, qrcode");
                    while($data = $stnt->fetch(PDO::FETCH_OBJ)){

                         echo($projeto);
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

$pdf->viewTable($db, $projeto);
$pdf->Output();
 

?>


