<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombre = isset($_POST['nombre']) ? strip_tags(trim($_POST['nombre'])) : '';
    $email  = isset($_POST['email']) ? strip_tags(trim($_POST['email'])) : '';
    $mensaje = isset($_POST['mensaje']) ? strip_tags(trim($_POST['mensaje'])) : '';

    session_start();
    $_SESSION['comentario'] = [
        'nombre' => $nombre,
        'email' => $email,
        'mensaje' => $mensaje,
        'fecha' => date('Y-m-d H:i:s')
    ];

    header('Location: thanks.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La vida en la calle - Deja tu reflexión</title>
</head>

<body background="images/background.jpg">
  <font face="Arial" size="4" color="white">
    <table role="presentation" width="100%" cellpadding="8" cellspacing="0" border="0">
      <td align="center"><a href="examen-brian-roa.html">
          <font color="yellow"><b>Inicio</b></font>
        </a></td>
      <td align="center"><a href="estadisticas.html">
          <font color="yellow"><b>Estadísticas</b></font>
        </a></td>
      <td align="center"><a href="testimonios.html">
          <font color="yellow"><b>Testimonios</b></font>
        </a></td>
      <td align="center"><a href="contact.php">
          <font color="yellow"><b>Deja tu reflexión</b></font>
        </a></td>
    </table>
    <hr color="white">


    <h1>Comparte tu comentario</h1>

    <hr color="white">
    <h2>Formulario de reflexión</h2>
  
<section align="center">
  <form action="contact.php" method="post">
    <table align="center">
      <tr>
        <td>
          <label for="nombre">Nombre:</label><br>
          <input type="text" id="nombre" name="nombre" required>
        </td>
        <td>
          <label for="email">Correo electrónico:</label><br>
          <input type="email" id="email" name="email" required>
        </td>
      </tr>
    </table>

    <p>
      <label for="mensaje">Tu reflexión:</label><br>
      <textarea id="mensaje" name="mensaje" rows="7" cols="45" required></textarea>
    </p>

    <p>
      <input type="submit" value="Enviar reflexión">
    </p>

  </form>
</section>
    <hr color="white">
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

</html>