<html>
<head>
    <title>Manejo de datos</title>
</head>
<body>
    <?php
    $conexion = mysqli_connect(hostname: "localhost", username: "root", password: "", database: "cotiz") or
    die("Problemas con la conexión");
    
    mysqli_query(mysql: $conexion, query: "insert into cotizaciones(nombre,descripcion,telefono,materia) values 
        ('$_REQUEST[nombre]','$_REQUEST[descripcion]',$_REQUEST[telefono],$_REQUEST[materia])")
    or die("Problemas en el select" . mysqli_error(mysql: $conexion));
    
    mysqli_close(mysql: $conexion);
    
    
    echo "La cotizacion fue realizada con exito, nos contactaremos con usted.";
?>
</body>
</html>