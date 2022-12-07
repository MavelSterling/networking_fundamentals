<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
  </head>
  <body>
    <a href="index.php">Ir al formulario post</a>
    <form action="welcome.php" method="get">
      <ul>
        <li>
          <label for="name">Nombre:</label>
          <input type="text" id="name" name="name">
        </li>
        <li>
          <label for="username"> Username:</label>
          <input type="text" id="user_name" name="user_name">
        </li>
        <li>
          <label for="password">password:</label>
          <input type="password" id="password" name="password">
        </li>
        <li class="button">
          <button type="submit">Enviar</button>
        </li>
      </ul>
    </form>
    <!-- <script type="module" src="script.js"></script> -->
  </body>
</html>