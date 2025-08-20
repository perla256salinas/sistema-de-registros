<?php require_once 'proteger.php'; ?>
<?php
// index.php - Formulario de registro
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registro de Personas con QR</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <h1>Registros Personas </h1>
    <form action="guardar.php" method="POST" class="card">
      <label>Nombre completo
        <input type="text" name="nombre" required maxlength="100" placeholder="Ej. María Pérez" />
      </label>
      <label>Sección
        <input type="text" name="seccion" required maxlength="50" placeholder="Ej. 1234" />
      </label>
      <label>Número de teléfono
        <input type="tel" name="telefono" required maxlength="20" placeholder="Ej. 9611234567" />
      </label>
      <button type="submit">Guardar y generar QR</button>
    </form>
    <p class="mt">
      Al guardar, se abrirá la <strong>tabla de registros</strong> automáticamente.
    </p>
    <a class="link" href="tabla.php">Tabla de registros</a>
  </div>
</body>
</html>
