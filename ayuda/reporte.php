<?php
// Cargamos la librería dompdf que hemos instalado en la carpeta dompdf

use Dompdf\Dompdf;

$id = isset($_GET['id']) ? $_GET['id'] : 0;

// Introducimos HTML de prueba
function file_get_contents_curl($url) {
    $ch = curl_init();
$id = isset($_GET['id']) ? $_GET['id'] : 0;

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

 $html=file_get_contents("http://localhost/pruebas/pdf/mostrar.php?id=".$id);


 
 $pdf = new DOMPDF();
 $pdf->set_option('isPhpEnabled', true);
 
 $pdf->set_option('isHtml5ParserEnabled', true);
 
 $fontDir = '/ruta/a/tu/directorio/de/fuentes';
 $fontCache = '/ruta/a/tu/directorio/de/caché';
 
 $pdf->set_option('fontDir', $fontDir);
 $pdf->set_option('fontCache', $fontCache);
 


