<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario borrar</title>
  </head>
  <body>

    <form action="borrarUsuario.php" method="post">
        Id:<br>
        <input type="text" name="id">
        <br>
      	Nombre:<br>
      	<input type="text" name="nombre">
        <br>
        <br>
      	<input type="submit" value="Borrar">
        <br>
    	</form>
      <br>


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
