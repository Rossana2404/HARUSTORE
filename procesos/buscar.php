<?php
// Obtiene la categoría seleccionada del formulario
$categoria = $_GET['categoria'];

// Define una lista de categorías y sus páginas correspondientes
$categorias = array(
    'adopcion' => 'adopcion.php',
    'cuidados' => 'cuidados.php',
    'gato' => 'gato.php',
    'perro' => 'perro.php'
);

// Comprueba si la categoría seleccionada está en la lista
if (array_key_exists($categoria, $categorias)) {
    // Redirige a la página correspondiente
    header("Location: " . $categorias[$categoria]);
    exit;
} else {
    // Si la categoría no existe, puedes mostrar un mensaje de error o redirigir a una página de error
    echo "Categoría no encontrada.";
}
?>
