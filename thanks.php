<?php
session_start();

$comentario = isset($_SESSION['comentario']) ? $_SESSION['comentario'] : null;

if (!$comentario) {
    header('Location: contact.php');
    exit;
}

$nombre  = htmlspecialchars($comentario['nombre'], ENT_QUOTES, 'UTF-8');
$email   = htmlspecialchars($comentario['email'], ENT_QUOTES, 'UTF-8');
$mensaje = nl2br(htmlspecialchars($comentario['mensaje'], ENT_QUOTES, 'UTF-8'));
$fecha   = htmlspecialchars($comentario['fecha'], ENT_QUOTES, 'UTF-8');

unset($_SESSION['comentario']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La vida en la calle - Gracias por tu reflexión</title>
</head>
<body background="images/background.jpg" bgcolor="black" text="white">
  <font face="Arial" size="4" color="white">
    <table role="presentation" width="100%" cellpadding="8" cellspacing="0" border="0">
      <tr>
        <td align="center"><a href="examen-brian-roa.html"><font color="yellow"><b>Inicio</b></font></a></td>
        <td align="center"><a href="estadisticas.html"><font color="yellow"><b>Estadísticas</b></font></a></td>
        <td align="center"><a href="testimonios.html"><font color="yellow"><b>Testimonios</b></font></a></td>
        <td align="center"><a href="contact.php"><font color="yellow"><b>Deja tu reflexión</b></font></a></td>
      </tr>
    </table>
    <hr color="white">

    <main>
      <h1>Gracias por compartir</h1>

      <hr color="white">
      
      <section>
        <h2>Resumen de tu reflexión</h2>
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Correo:</strong> <?php echo $email; ?></p>
        <p><strong>Fecha:</strong> <?php echo $fecha; ?></p>
        <p><strong>Mensaje:</strong><br><?php echo $mensaje; ?></p>
        <hr color="white">
      </section>

      <section>
        <h2>Qué ocurre ahora</h2>
        <p>Tu reflexión queda registrada de manera simulada para fines académicos y de sensibilización. No estamos guardando datos en una base de datos real.</p>
        <p>Si quieres enviar otra reflexión puedes volver al formulario:</p>
        <p><a href="contact.php"><font color="yellow"><b>Enviar otra reflexión</b></font></a></p>
        <hr color="white">
      </section>

    <footer>
      <p>Enlace útil: <a href="https://help.unhcr.org/costarica/asistencia-social-y-economica" target="_blank"
          rel="noopener">
          <font color="yellow">ACNUR Costa Rica</font>
        </a> ofrece una guía sobre programas de ayuda social y económica, con referencias a instituciones locales, pasos
        para acceder a apoyo como los servicios del IMAS y opciones de empleo y asistencia humanitaria.</p>
      <p><em>
          <font color="lightgrey">Este sitio es un ejercicio académico y de sensibilización</font>
        </em></p>
    </footer>
</body>
</html>
```