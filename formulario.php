<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    $usuario = $_POST['usuario'];  // Este campo está deshabilitado, pero lo recibimos igual
    $nivel = $_POST['nivel'];
    $deseo = isset($_POST['deseo']) ? "Sí" : "No";

    // Mostrar los datos recibidos
    echo "<h1>Formulario Enviado</h1>";
    echo "<p><strong>Nombre y Apellidos:</strong> " . htmlspecialchars($nombre) . "</p>";
    echo "<p><strong>Contraseña:</strong> " . htmlspecialchars($contraseña) . "</p>";
    echo "<p><strong>Usuario:</strong> " . htmlspecialchars($usuario) . "</p>";
    echo "<p><strong>Nivel:</strong> " . htmlspecialchars($nivel) . "</p>";
    echo "<p><strong>Deseo recibir información:</strong> " . $deseo . "</p>";
} else {
    echo "<p>No se ha recibido ningún dato.</p>";
}
?>
