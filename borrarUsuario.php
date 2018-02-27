<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Borrar usuario</title>
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
      // $apellidos=$_POST["apellidos"];
      // $edad=$_POST["edad"];
      // $curso=$_POST["curso"];
      // $puntuacion=$_POST["puntuacion"];
      // $correo=$_POST["correo"];

    // sacamos la consulta por pantalla
    $probar="DELETE FROM usuario WHERE id=$id";
    echo $probar;

    // hacemos la consulta para insertar y para mostrar todos los datos
     $consulta = $mysqli->query($probar);
     $consulta2=$mysqli->query("SELECT * FROM usuario");

    // devuelve el usuario que hemos borrado
  	echo "<br>Acabamos de borrar a: ".$nombre."<br>";
    echo "<br>";

  //  mostramos ultimo user insertado y lista total d inserts)
    // while ($actualizarUsuario = $consulta2->fetch_assoc()) {
    //     echo "Nombre: ".$actualizarUsuario['nombre']."<br>";
    //     echo "Apellidos: ".$actualizarUsuario['apellidos']."<br>";
    //     echo "Edad: ".$actualizarUsuario['edad']."<br>";
    //     echo "Su curso es : ".$actualizarUsuario['curso']."<br>";
    //     echo "Su puntuacion es: ".$actualizarUsuario['puntuacion']."<br>";
    //     echo "Su correo es: ".$actualizarUsuario['correo']."<br>";
    //     echo "<br>";
    //     echo "<hr>";
    // }
 }
    ?>
    <!-- botones par movernos entre nuestras paginas  -->
    <form action="insertarUsuario.php">
      <input type="submit" value="Insertar de nuevo">
    </form>
      <br>
    <form action="actualizarUsuario.php">
      <input type="submit" value="Actualizar usuario">
    </form>
    <br>
  </body>
</html>
