<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Refranes Aleatorios</title>
  <link rel="stylesheet" href="estilosREFRAN.CSS">
</head>
<body>
  <form method="post">
    <button type="submit" name="ver">Mostrar Refrán</button>
  </form>

  <?php
  $frases = [
    "A caballo regalado, no se le mira el diente.",
    "Más vale pájaro en mano que ciento volando.",
    "El que madruga, Dios lo ayuda.",
    "No por mucho madrugar amanece más temprano.",
    "A palabras necias, oídos sordos.",
    "Ojos que no ven, corazón que no siente.",
    "Camarón que se duerme, se lo lleva la corriente.",
    "Al mal tiempo, buena cara.",
    "Cuando el río suena, agua lleva.",
    "Más vale tarde que nunca."
  ];

  if (isset($_POST['ver'])) {
    $indice = array_rand($frases);
    $fraseSeleccionada = $frases[$indice];
    echo "<p id='refran'>$fraseSeleccionada</p>";
  }
  ?>
</body>
</html>
