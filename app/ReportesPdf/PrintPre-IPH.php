
<?php
    //AddPage(orientacion[PORTRAIT, LANDSCAPE], tamaño[A3, A4, A5, LETTER, LEGAL], rotacion),
    //SetFont(tipo[COURIER, HELVETICA, ARIAL, TIMES, SYMBOL, ZAPDINGBATS], estilo[normal, B, I, U],tamaño),
    //Cell(ancho, alto, texto, bordes, ?, alineacion, rellenar, link)
    //Write(alto, texto, link)
    //OutPut(destino[I, D, F, S], nombre_archivo, utf8)   [I-> Muestra en navegador, D->Descarga, F->Guardar Archivo dentro de Servidor, S->Lo devuelve como cadena]

    require('fpdf/fpdf.php');

    class PDF extends FPDF
    {
        // Cabecera de página
        function Header()
        {
            // Logo
            //$this->Image('img/ms-icon-310x310.png',5,0,38);
            $this->Image('../../public/img/ms-icon-310x310.png',5,0,38);
            // Arial bold 15
            $this->SetFont('Arial','B',12);
            // Movernos a la derecha
            $this->Cell(80);
            // Título
            $this->Cell(70,10,'SSPCERA Reporte de Pre-IPH',0,0,'C');
            // Salto de línea
            $this->Ln(25);
            $this->Cell(12,7,'Folio',1,0,'C');
            $this->Cell(40,7,'Nombres',1,0,'C');
            $this->Cell(15,7,'Edad',1,0,'C');
            $this->Cell(40,7,'Autoridad',1,0,'C');
            $this->Ln(7);
        }

        // Pie de página
        function Footer()
        {
            // Posición: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Número de página
            $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
        }
    }

    // Conecta a la Base de Datos y Trae los Valores para Imprimirlos
    require("../config/conectaBD.php");
    $consulta = "SELECT * FROM preiph";
    $resultado = mysqli_query($conectar, $consulta);

    // Creación del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('LANDSCAPE', 'LETTER'); //Orientacion de la Hoja y Tamaño
    $pdf->SetFont('Arial','B',7);

    // Trae los datos para Imprimir
    while ($row = $resultado->fetch_assoc())
    {
        $pdf-> Cell(12,7, $row['FolioIPH'], 1,0,'C',0);
        $pdf-> Cell(40,7, $row['Nombres'], 1,0,'C',0);
        $pdf-> Cell(15,7, $row['Edad'], 1,0,'C',0);
        $pdf-> Cell(40,7, $row['Autoridad'], 1,1,'C',0);
    }

    $pdf->Output();   //$pdf->Output('D'); Para Descargar PDF
?>