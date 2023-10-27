<?php
require_once "../../conexion/database.php";
require_once "../../clases/Ventas.php";

ob_start();

$conexion = new mysqli($host, $usuario, $password, $base_datos);

if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

$id_venta = $_GET['id_venta']; // Suponiendo que pasas el ID de venta como parámetro

// Consulta de la venta
$sql = "SELECT v.id_venta, v.fechaCompra, v.id_cliente, p.nombre, p.precio, p.descripcion
        FROM ventas v
        INNER JOIN productos p ON v.id_producto = p.idprod
        WHERE v.id_venta = $id_venta";

$resultado = $conexion->query($sql);

if (!$resultado) {
    die('Error en la consulta: ' . $conexion->error);
}

$venta = $resultado->fetch_assoc();

// Crear un PDF
$pdf = new TCPDF();
$pdf->SetAutoPageBreak(true, 15);

$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

$pdf->Cell(0, 10, 'Boleta de Venta', 0, 1, 'C');
$pdf->Cell(0, 10, '--------------------------------', 0, 1, 'C');
$pdf->Cell(0, 10, 'Fecha de Venta: ' . $venta['fechaCompra'], 0, 1);
$pdf->Cell(0, 10, 'ID de Venta: ' . $id_venta, 0, 1);
$pdf->Cell(0, 10, 'Cliente: ' . $venta['id_cliente'], 0, 1);
$pdf->Cell(0, 10, '--------------------------------', 0, 1, 'C');

$pdf->Cell(100, 10, 'Producto', 1);
$pdf->Cell(30, 10, 'Precio', 1);
$pdf->Cell(40, 10, 'Descripción', 1);
$pdf->Ln();

$pdf->Cell(100, 10, $venta['nombre'], 1);
$pdf->Cell(30, 10, '$' . $venta['precio'], 1);
$pdf->Cell(40, 10, $venta['descripcion'], 1);
$pdf->Ln();

$pdf->Output('boleta_de_venta.pdf', 'I'); // 'I' envía el archivo al navegador para su visualización
?>