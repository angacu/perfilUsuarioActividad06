<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listar Usuario</title>
  </head>
  <body>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "juegosdb");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: " .
        $mysqli->connect_error;
    }else {
      // damos valores para mandar por $post
      $nombre=$_POST["nombre"];
      $apellidos=$_POST["apellidos"];
      $edad=$_POST["edad"];
      $curso=$_POST["curso"];
      $puntuacion=$_POST["puntuacion"];
      $correo=$_POST["correo"];


    // hacemos la consulta para insertar y para mostrar todos los datos
     $consulta = $mysqli->query("INSERT INTO usuario (nombre, apellidos, edad, curso, puntuacion, correo) VALUES ('$nombre', '$apellidos', $edad, $curso, $puntuacion, '$correo')");
     $consulta2 = $mysqli->query("SELECT * FROM usuario");

    // cuantas filas nos devuelve despues de insertar
  	echo "<br>Acabamos de insertar a: ".$nombre."<br>";
    echo "<br>";

    // mostramos la lista de usuarios insertados con anterioridad
    while ($mostrarUsuarios = $consulta2->fetch_assoc()) {
        echo "Lista usuarios insertados: ".$mostrarUsuarios['nombre']."<br>";
        echo "Edad: ".$mostrarUsuarios['edad']."<br>";
        echo "Su puntuacion es de: ".$mostrarUsuarios['puntuacion']."<br>";
        echo "<br>";
        echo "<hr>";
    }
   }
    ?>
    <!-- botones para movernos entre nuestras paginas -->
    <form action="insertarUsuario.php">
      <input type="submit" value="Volver a insertar">
    </form>
    <br>
    <form action="actualizarUsuario.php">
      <input type="submit" value="Actualizar usuario">
    </form>
    <br>
    <form action="borrarUsuarioForm.php">
      <input type="submit" value="Borrar Usuario">
    </form>
  </body>
</html>
