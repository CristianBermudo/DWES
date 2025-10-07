<?php
$sql = "SELECT nombre, apellidos, contraseña, fecha_nacimiento, email, curso_matriculado FROM alumnado";
$resultado = $conn->query($sql);


if ($resultado->num_rows > 0) {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Contraseña</th>
        <th>Fecha de Nacimiento</th>
        <th>Email</th>
        <th>Curso Matriculado</th>
    </tr>";
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($fila['nombre']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['apellidos']) . "</td>";
        echo "<td>********</td>";
        echo "<td>" . htmlspecialchars($fila['fecha_nacimiento']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['email']) . "</td>";
        echo "<td>" . htmlspecialchars($fila['curso_matriculado']) . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No hay registros</td></tr>";
}

echo "</table>";
?>