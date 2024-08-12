<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo 4 YA</title>
    <meta charset="UTF-8">
</head>

<body>
  <?php
  $dia = date("d");
  if ($dia <= 10) {
    echo "sitio activo";
  } else {
    echo "sitio fuera de servicio";
  }
  echo "<br>\n";
  $numero = rand(1,100);
  if($numero<=50){
    echo "El numero es menor o igual a 50";
  }
  else{
    echo "El numero es mayor";
  }
  ?>
</body>

</html>