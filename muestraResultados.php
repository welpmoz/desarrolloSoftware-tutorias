<?php
require('servicios.php');

$opcion = '5';
$contenido = '';

if (isset($_GET['opciones'])){
  $opcion = $_GET['opciones'];
  switch ($opcion){
    case "0":
      [$datos, $encabezado] = nuevosMatriculados2022();
      $contenido = generarCuerpoTableHtml($datos, $encabezado);
      break;
    case "1":
      [$datos, $encabezado] = noMatriculados2022();
      $contenido = generarCuerpoTableHtml($datos, $encabezado);
      break;
    case "2":
      [$datos, $encabezado] = distribucionTutorados2022();
      $contenido = generarCuerpoTableHtml($datos, $encabezado);
      break;
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Resultados</title>
    <link rel="stylesheet" type="text/css" href="estilosTabla.css">
  </head>
  <body>
  <div id="table-wrapper">
    <div id="table-scroll">
      <table>
          <?php echo $contenido; ?>
      </table>
    </div>
  </div>
    <a href="exportar.php?opcion=<?php echo $opcion; ?>"><button>Exportar Resultado</button></a>
  </body>
</html>