<?php
require ('fpdf/fpdf.php');
require ('global/cn.php');


$matricula1= filter_var($_POST['ematricula']);
$matricula = trim($matricula1);
$nombre1 = filter_var($_POST['ename']);
$nombre11 = str_replace("Ñ", "N", $nombre1);
$nombre = trim($nombre11);

$consulta = $mysqli->prepare ("SELECT * FROM alm a INNER JOIN papas b on a.matricula = b.matricula WHERE b.matricula = '$matricula'");
$consulta->execute();
$resultado = $consulta->get_result();
$row = $resultado-> fetch_assoc();

if($resultado){
    
    if(isset ($row['nombre1']) && $row['nombre1'] == $nombre){ 
        class PDF extends FPDF{  
            // Cabecera de página
            function Header()
            {
                // Arial bold 15
                $this->SetFont('Arial','B',15);
                // Movernos a la derecha
                $this->Cell(80);
                // Título
                $this->Cell(30,10,'Credencial Tutor COLMEX',0,0,'C');
                // Salto de línea
                $this->Ln(20);
            }
            // Pie de página
            function Footer()
            {
                // Posición: a 1,5 cm del final
                $this->SetY(-15);
                // Arial italic 8
                $this->SetFont('Arial','I',8);
                $this->SetTextColor(0,0,0);
                // Número de página
                $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
            }
            }          
        while($row){
            $pdf = new PDF();
            $pdf->AliasNbPages();
            $pdf->AddPage();
    
            $pdf->SetXY(65,30);
            $pdf->Cell(80, 140, $pdf->Image('images/credencial/creden.png' ,65,30,80,140,'PNG'), 1,0, 'c', 0);
            $pdf->SetFont('Arial','B',10);
            $pdf->SetXY(70,98);
            $pdf->cell(70,10,utf8_decode($row['nombre1']),65,82,'c',0);
            $pdf->Ln();
            $pdf->SetXY(70,103);
            $pdf->cell(70,10,utf8_decode('Papá o Tutor del'), 65,88,'c',0);
            $pdf->SetXY(70,108);
            $pdf->cell(25,10,utf8_decode('alumn@ con matrícula:'), 65,100,'c');
            $pdf->SetXY(110,108);
            $pdf->cell(5,10, $row['matricula'], 92,94,'c',0);
            $pdf->SetXY(70,115);
            $pdf->cell(10,10, 'Ciclo ', 0,0,'c');
            $pdf->SetXY(82,115);
            $pdf->cell(30,10, $row['ciclo'], 82,100,'c',0);
            $pdf->SetXY(110,60);
            $pdf->Cell(27, 35, $pdf->Image($row['foto1'] ,110,60,27,35), 1,0, 'c', 0);
            $pdf->SetXY(70,125);
            $pdf->cell(8,71, 'Tel. 7757534992 ', 70,114,'c');
        
            $pdf->SetXY(107,113);
            $pdf->Cell(31, 30, $pdf->Image($row['qr1'] ,107,127,30,35,'PNG'), 2,0,'c', 0);
            $pdf->SetTextColor(242,41,41);
            $pdf->SetXY(20,165);
            $pdf->cell(10,40,utf8_decode('RECOMENDACIONES PARA EL USO DE SU CREDENCIAL DE TUTOR COLMEX'), 70,130,'c');
            $pdf->SetTextColor(0,0,0);
            $pdf->SetXY(23,175);
            $pdf->cell(10,40,utf8_decode('+ Esta credencial de tutor es única e intransferible.'), 70,130,'c');
            $pdf->SetXY(23,185);
            $pdf->cell(10,40,utf8_decode('+ Es responsabilidad del dueño de la presente credencial evitar un mal uso o utilizar para otro fin.'), 70,130,'c');
            $pdf->SetXY(23,195);
            $pdf->cell(10,40,utf8_decode('+ Esta credencial tiene que ser impresa para ser mayormente legible.'), 70,130,'c');
            $pdf->SetXY(23,205);
            $pdf->cell(10,40,utf8_decode('+ Esta credencial puede ser presentada físicamente, es decir que se puede recortar y ser enmicada.'), 70,130,'c');
            $pdf->Output("credencial.pdf","I");
        }
        }
        if(isset ($row['nombre2']) && $row['nombre2'] == $nombre){ 
            class PDF extends FPDF{  
                // Cabecera de página
                function Header()
                {
                    // Arial bold 15
                    $this->SetFont('Arial','B',15);
                    // Movernos a la derecha
                    $this->Cell(80);
                    // Título
                    $this->Cell(30,10,'Credencial Tutor COLMEX',0,0,'C');
                    // Salto de línea
                    $this->Ln(20);
                }
                // Pie de página
                function Footer()
                {
                    // Posición: a 1,5 cm del final
                    $this->SetY(-15);
                    // Arial italic 8
                    $this->SetFont('Arial','I',8);
                    $this->SetTextColor(0,0,0);
                    // Número de página
                    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
                }
                }          
            while($row){
                $pdf = new PDF();
                $pdf->AliasNbPages();
                $pdf->AddPage();
        
                $pdf->SetXY(65,30);
                $pdf->Cell(80, 140, $pdf->Image('images/credencial/creden.png' ,65,30,80,140,'PNG'), 1,0, 'c', 0);
                $pdf->SetFont('Arial','B',10);
                $pdf->SetXY(70,98);
                $pdf->cell(70,10,utf8_decode($row['nombre2']),65,82,'c',0);
                $pdf->Ln();
                $pdf->SetXY(70,103);
                $pdf->cell(70,10,utf8_decode('Papá o Tutor del'), 65,88,'c',0);
                $pdf->SetXY(70,108);
                $pdf->cell(25,10,utf8_decode('alumn@ con matrícula:'), 65,100,'c');
                $pdf->SetXY(110,108);
                $pdf->cell(5,10, $row['matricula'], 92,94,'c',0);
                $pdf->SetXY(70,115);
                $pdf->cell(10,10, 'Ciclo ', 0,0,'c');
                $pdf->SetXY(82,115);
                $pdf->cell(30,10, $row['ciclo'], 82,100,'c',0);
                $pdf->SetXY(110,60);
                $pdf->Cell(27, 35, $pdf->Image($row['foto2'] ,110,60,27,35), 1,0, 'c', 0);
                $pdf->SetXY(70,125);
                $pdf->cell(8,71, 'Tel. 7757534992 ', 70,114,'c');
            
                $pdf->SetXY(107,113);
                $pdf->Cell(31, 30, $pdf->Image($row['qr2'] ,107,127,30,35,'PNG'), 2,0, 'c', 0);
                $pdf->SetTextColor(242,41,41);
                $pdf->SetXY(20,165);
                $pdf->cell(10,40,utf8_decode('RECOMENDACIONES PARA EL USO DE SU CREDENCIAL DE TUTOR COLMEX'), 70,130,'c');
                $pdf->SetTextColor(0,0,0);
                $pdf->SetXY(23,175);
                $pdf->cell(10,40,utf8_decode('+ Esta credencial de tutor es única e intransferible.'), 70,130,'c');
                $pdf->SetXY(23,185);
                $pdf->cell(10,40,utf8_decode('+ Es responsabilidad del dueño de la presente credencial evitar un mal uso o utilizar para otro fin.'), 70,130,'c');
                $pdf->SetXY(23,195);
                $pdf->cell(10,40,utf8_decode('+ Esta credencial tiene que ser impresa para ser mayormente legible.'), 70,130,'c');
                $pdf->SetXY(23,205);
                $pdf->cell(10,40,utf8_decode('+ Esta credencial puede ser presentada físicamente, es decir que se puede recortar y ser enmicada.'), 70,130,'c');
                $pdf->Output("credencial.pdf","I");

            }
            }
            if(isset ($row['nombre3']) && $row['nombre3'] == $nombre){ 
                class PDF extends FPDF{  
                    // Cabecera de página
                    function Header()
                    {
                        // Arial bold 15
                        $this->SetFont('Arial','B',15);
                        // Movernos a la derecha
                        $this->Cell(80);
                        // Título
                        $this->Cell(30,10,'Credencial Tutor COLMEX',0,0,'C');
                        // Salto de línea
                        $this->Ln(20);
                    }
                    // Pie de página
                    function Footer()
                    {
                        // Posición: a 1,5 cm del final
                        $this->SetY(-15);
                        // Arial italic 8
                        $this->SetFont('Arial','I',8);
                        $this->SetTextColor(0,0,0);
                        // Número de página
                        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
                    }
                    }          
                while($row){
                    $pdf = new PDF();
                    $pdf->AliasNbPages();
                    $pdf->AddPage();
            
                    $pdf->SetXY(65,30);
                    $pdf->Cell(80, 140, $pdf->Image('images/credencial/creden.png' ,65,30,80,140,'PNG'), 1,0, 'c', 0);
                    $pdf->SetFont('Arial','B',10);
                    $pdf->SetXY(70,98);
                    $pdf->cell(70,10,utf8_decode($row['nombre3']),65,82,'c',0);
                    $pdf->Ln();
                    $pdf->SetXY(70,103);
                    $pdf->cell(70,10,utf8_decode('Papá o Tutor del'), 65,88,'c',0);
                    $pdf->SetXY(70,108);
                    $pdf->cell(25,10,utf8_decode('alumn@ con matrícula:'), 65,100,'c');
                    $pdf->SetXY(110,108);
                    $pdf->cell(5,10, $row['matricula'], 92,94,'c',0);
                    $pdf->SetXY(70,115);
                    $pdf->cell(10,10, 'Ciclo ', 0,0,'c');
                    $pdf->SetXY(82,115);
                    $pdf->cell(30,10, $row['ciclo'], 82,100,'c',0);
                    $pdf->SetXY(110,60);
                    $pdf->Cell(27, 35, $pdf->Image($row['foto3'] ,110,60,27,35), 1,0, 'c', 0);
                    $pdf->SetXY(70,125);
                    $pdf->cell(8,71, 'Tel. 7757534992 ', 70,114,'c');
                
                    $pdf->SetXY(107,113);
                    $pdf->Cell(31, 30, $pdf->Image($row['qr3'] ,107,127,30,35,'PNG'), 2,0, 'c', 0);
                    $pdf->SetTextColor(242,41,41);
                    $pdf->SetXY(20,165);
                    $pdf->cell(10,40,utf8_decode('RECOMENDACIONES PARA EL USO DE SU CREDENCIAL DE TUTOR COLMEX'), 70,130,'c');
                    $pdf->SetTextColor(0,0,0);
                    $pdf->SetXY(23,175);
                    $pdf->cell(10,40,utf8_decode('+ Esta credencial de tutor es única e intransferible.'), 70,130,'c');
                    $pdf->SetXY(23,185);
                    $pdf->cell(10,40,utf8_decode('+ Es responsabilidad del dueño de la presente credencial evitar un mal uso o utilizar para otro fin.'), 70,130,'c');
                    $pdf->SetXY(23,195);
                    $pdf->cell(10,40,utf8_decode('+ Esta credencial tiene que ser impresa para ser mayormente legible.'), 70,130,'c');
                    $pdf->SetXY(23,205);
                    $pdf->cell(10,40,utf8_decode('+ Esta credencial puede ser presentada físicamente, es decir que se puede recortar y ser enmicada.'), 70,130,'c');
                    $pdf->Output("credencial.pdf","I");
                }
                }
                else{
            echo'<script type="text/javascript">
            alert("La matrícula o nombre capturado no coincide");
            window.location.href="../index.html";
            </script>';
            exit(); 
        } 
}

?>