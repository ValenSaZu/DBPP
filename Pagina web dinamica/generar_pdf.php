<?php
    require('fpdf.php');
    include('Formulario.html');

    $nombre = isset($_POST['Nombre'])? $_POST['Nombre']:'';
    $apellido = isset($_POST['Apellido'])? $_POST['Apellido']:'';
    $fechaNacimiento = isset($_POST['fechaNacimiento'])? $_POST['fechaNacimiento']:'';
    $ocupacion = isset($_POST['ocupacion'])? $_POST['ocupacion']:'';
    $telefono = isset($_POST['telefono'])? $_POST['telefono']:'';
    $email = isset($_POST['email'])? $_POST['email']:'';
    $nacionalidad = isset($_POST['nacionalidad'])? $_POST['nacionalidad']:'';
    $idioma = isset($_POST['lista-idiomas'])? $_POST['lista-idiomas']:'';
    $lengProgra = isset($_POST['lengProgra'])? $_POST['lengProgra']:'';
    $aptitudes = isset($_POST['Aptitudes'])? $_POST['Aptitudes']:'';
    $habilidades = isset($_POST['Habilidades'])? $_POST['Habilidades']:'';
    $perfil = isset($_POST['perfil'])? $_POST['perfil']:'';
    $experiencia = isset($_POST['lista-Experiencia'])? $_POST['lista-Experiencia']:'';
    $formacion = isset($_POST['lista-formacion'])? $_POST['lista-formacion']:'';
    $foto = isset($_FILES['imagen']['name'])? $_FILES['imagen']['name']:'';
    $color = isset($_POST['color'])? $_POST['color']:'';

    $pdf = new FPDF();

    $pdf->AddPage();

    $pdf->SetFont('Arial','B',16);

    $pdf -> Cell(40,10,$nombre,1,1,'C');
    $pdf -> Cell(40,10,$apellido,1,1,'C');
    $pdf -> Cell(40,10,$fechaNacimiento,1,1,'C');
    $pdf -> Cell(40,10,$ocupacion,1,1,'C');
    $pdf -> Cell(40,10,$telefono,1,1,'C');
    $pdf -> Cell(40,10,$email,1,1,'C');
    $pdf -> Cell(40,10,$nacionalidad,1,1,'C');
    $pdf -> Cell(40,10,$idioma,1,1,'C');
    $pdf -> Cell(40,10,$lengProgra,1,1,'C');
    $pdf -> Cell(40,10,$aptitudes,1,1,'C');
    $pdf -> Cell(40,10,$habilidades,1,1,'C');
    $pdf -> Cell(40,10,$perfil,1,1,'C');
    $pdf -> Cell(40,10,$experiencia,1,1,'C');
    $pdf -> Cell(40,10,$formacion,1,1,'C');

    $pdf -> Image($foto, 10, 10, 50, 0);
    
    if (!empty($color)) {
        $r = hexdec($color[0]);
        $g = hexdec($color[1]);
        $b = hexdec($color[2]);
        $pdf->SetFillColor($r, $g, $b);
        $pdf->Rect(0, 0, $pdf->GetPageWidth(), $pdf->GetPageHeight(), "F");
    }

    $pdf->Output('Curriculum.pdf', 'D');
?>
