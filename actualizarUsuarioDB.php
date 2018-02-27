<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar Usuario</title>
  </head>
  <body>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "juegosdb");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: " .
        $mysqli->connect_error;
    }else {
      // damos valores para mandar por $post
      $id=$_POST["id"];
      $nombre=$_POST["nombre"];
      $apellidos=$_POST["apellidos"];
      $edad=$_POST["edad"];
      $curso=$_POST["curso"];
      $puntuacion=$_POST["puntuacion"];
      $correo=$_POST["correo"];


      $probar="UPDATE usuario SET nombre='$nombre',apellidos='$apellidos',edad=$edad,curso=$curso,puntuacion=$puntuacion,correo='.$correo.' WHERE id=$id";
      echo $probar;

    // hacemos la consulta para insertar y para mostrar todos los datos
     $consulta = $mysqli->query($probar);
     $consulta2=$mysqli->query("SELECT * FROM usuario");

    // cuantas filas nos devuelve
  	echo "<br>Acabamos de actualizar a: ".$nombre."<br>";
    echo "<br>";

  //  mostramos ultimo user insertado y lista total d inserts)
    while ($actualizarUsuario = $consulta2->fetch_assoc()) {
        echo "Nombre: ".$actualizarUsuario['nombre']."<br>";
        echo "Apellidos: ".$actualizarUsuario['apellidos']."<br>";
        echo "Edad: ".$actualizarUsuario['edad']."<br>";
        echo "Su curso es : ".$actualizarUsuario['curso']."<br>";
        echo "Su puntuacion es: ".$actualizarUsuario['puntuacion']."<br>";
        echo "Su correo es: ".$actualizarUsuario['correo']."<br>";
        echo "<br>";
        echo "<hr>";
    }
 }
    ?>
    <!-- boton para atras -->
    <form action="insertarUsuario.php">
      <input type="submit" value="Volver a insertar">
      <br>
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
