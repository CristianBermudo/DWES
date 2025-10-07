<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción ESO - Somorrostro</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" href="asesino-en-serie.png" type="image/png">
</head>
<body>
    <header>
        <h1>Formulario de Inscripción ESO - Somorrostro</h1>
    </header>
    <main>
    <?php 
    include("conexion.php");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $contraseña = $_POST['contraseña'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];

    $sql = "INSERT INTO alumnado (nombre, apellidos, contraseña, fecha_nacimiento, email, curso_matriculado)
        VALUES ('$nombre', '$apellidos', '$contraseña', '$fecha_nacimiento', '$email', '$curso')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>Inscripción guardada correctamente</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>
        <form action="" method="POST">
            <div>
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br><br>
            </div>
            <div>
            <label for="apellidos">Apellidos</label><br>
            <input type="text" id="apellidos" name="apellidos" required><br><br>
            </div>
            <div>
            <label for="contraseña">Contraseña:</label><br>
            <input type="password" id="contraseña" name="contraseña" required><br><br>
            </div>
            <div>
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label><br>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>
            </div>
            <div>
            <label for="email">Correo Electrónico:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            </div>
            <div>
            <label for="curso">Curso al que desea inscribirse:</label><br>
            <select id="curso" name="curso" required>
                <option value="">Seleccione un curso</option>
                <option value="1_eso">1º ESO</option>
                <option value="2_eso">2º ESO</option>
                <option value="3_eso">3º ESO</option>
                <option value="4_eso">4º ESO</option>
            </select><br><br>
            </div>
            <input type="submit" value="Enviar Inscripción">
        </form>
        <h2>Listado de Alumnnos</h2>
        <?php include("tabla.php"); ?>
        <?php $conn->close(); ?>
        </main>
</body>
</html>