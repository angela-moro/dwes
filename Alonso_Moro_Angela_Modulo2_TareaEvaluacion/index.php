<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Procesamiento de reserva</title>
    </head>
    <body>
        <h1>Formulario de reserva de vehículos</h1>

        <form action="validacion.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
            <br>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido">
            <br>

            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni">
            <br>

            <label for="modelo">Modelo del Vehículo:</label>
            <select id="modelo" name="modelo">
                <option value="Lancia Stratos">Lancia Stratos</option>
                <option value="Audi Quattro">Audi Quattro</option>
                <option value="Ford Escort RS1800">Ford Escort RS1800</option>
                <option value="Subaru Impreza 555">Subaru Impreza 555</option>
            </select>
            <br>

            <label for="fecha_inicio">Fecha de Inicio:</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio">
            <br>

            <label for="duracion">Duración de la reserva en días:</label>
            <input type="number" id="duracion" name="duracion">
            <br>

            <button type="submit">Reservar</button>
        </form>

    </body>
</html>