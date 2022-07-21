<?php
include ("../global/sesiones.php");
require ('../fpdf/fpdf.php');
require ('../global/cn.php');

$matricula= filter_var($_POST['matricula']);
$consulta = $mysqli->prepare ("SELECT * from alm a INNER JOIN retiroalm b on a.matricula = b.matricula WHERE b.matricula = '$matricula';");
$consulta->execute();
$resultado = $consulta->get_result();

if(!empty($resultado)){
	class PDF extends FPDF
		{
			function Header()
			{
				$this->Image('../images/favicon/icono.png.png', 15, 5, 30 );
				$this->SetFont('Arial','B',17);
				$this->Cell(30);
				$this->Cell(230,25, 'REPORTE DE RETIROS DEL ALUMNO',0,0,'C');
				$this->Ln(40);
			}
			
			function Footer()
			{
				$this->SetY(-15);
				$this->SetFont('Arial','I', 8);
				$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
			}
		}		
	
		
		$pdf = new PDF('L','mm','A4');
		$pdf->AliasNbPages();
		$pdf->AddPage();
		
		$pdf->SetFillColor(232,232,232);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(30,6,utf8_decode('Matrícula'),1,0,'C',1);
		$pdf->Cell(85,6,'Nombre Alumno',1,0,'C',1);
		$pdf->Cell(13,6,'Grado',1,0,'C',1);
		$pdf->Cell(13,6,'Grupo',1,0,'C',1);
		$pdf->Cell(20,6,'Nivel',1,0,'C',1);
		$pdf->Cell(85,6,'Tutor que retiro',1,0,'C',1);
		$pdf->Cell(20,6,'Fecha',1,0,'C',1);
		$pdf->Cell(20,6,'Hora',1,1,'C',1);
		
		$pdf->SetFont('Arial','',8);
	
		while($row = $resultado-> fetch_assoc()){
			$pdf->Cell(30,6,$row['matricula'],1,0,'C');
			$pdf->Cell(85,6,$row['nombre'],1,0,'C');
			$pdf->Cell(13,6,$row['grado'],1,0,'C');
			$pdf->Cell(13,6,$row['grupo'],1,0,'C');
			$pdf->Cell(20,6,$row['nivel'],1,0,'C');
			$pdf->Cell(85,6,utf8_decode($row['tutor']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['fecha']),1,0,'C');
			$pdf->Cell(20,6,utf8_decode($row['hora']),1,1,'C');
		}
			$pdf->Output("reporte-general-alumno.pdf","I");
		
	}else{
		echo'<script type="text/javascript">
				alert("¡Error al generar reporte, no existen datos!");
				window.location.href="../vistapanel.php";
				</script>';
				exit(); 
	}
	?>